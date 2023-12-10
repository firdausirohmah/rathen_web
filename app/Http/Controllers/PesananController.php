<?php

namespace App\Http\Controllers;

use App\Models\ModelStep1;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;


class PesananController extends Controller
{
    public function form_1(Request $request, $kd_part)
    {
        // dd($kd_part);
        $data = DB::table('tbl_step1')->get('*');
        $ref = db::table('tbl_part')->where('kd_part', $kd_part)->get();

        // dd($ref);

        foreach ($ref as $rev) {
            return view('landing_page.form-order', [
                'pesanan' => $data,
                'data' => $rev,
            ]);
        }
    }
    public function form_2(Request $request)
    {
        $data = DB::table('tbl_step2')->get('*');


        return view('landing_page.form-2', [
            'pesanan' => $data,
        ]);
    }
    public function form_3(Request $request)
    {
        $data = DB::table('tbl_step3')->get('*');


        return view('landing_page.form-3', [
            'pesanan' => $data,
        ]);
    }
    public function form_4(Request $request)
    {
        $data = DB::table('tbl_data_pesanan')->get('*');


        return view('landing_page.form-4', [
            'pesanan' => $data,
        ]);
    }
    // ===========================order=====================================
    public  function order (Request $request){
        $kd_part = $request->kd_part;
        $qty = $request->qty;
        $data = DB::table('tbl_step1')->get('*');
        $ref = db::table('tbl_part')->where('kd_part', $kd_part)->get();

        // dd($kd_part,$qty);
        foreach ($ref as $rev) {
            return view('landing_page.form-order', [
                'pesanan' => $data,
                'data' => $rev,
                'qty' => $qty,
            ]);
        }
    }
    // ==========================quotation===================================
    public function quotation(Request $request)
    {
        session(['nama' => $request->nama_pemesanan]);
        session(['kontak' => $request->kontak]);
        $nama_pemesaanan = $request->nama_pemesanan;
        $kontak = $request->kontak;
        $tanggalSekarang = date("d F Y");
        $data = DB::table('tbl_step1')
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*')
            ->get();
        // dd($tanggalSekarang);
        // $html = view('welcome')->render();
        foreach ($data as $pesanan) {

            return view('landing_page.quotation', [
                'data' => $pesanan,
                'nama' => $nama_pemesaanan,
                'kontak' => $kontak,
                'tanggal' => $tanggalSekarang,
            ]);
        }
        // $pdf = PDF::loadView('landing_page.quotation', [
        //     'data' => $data,
        //     'nama' => $nama_pemesaanan,
        //     'kontak' => $kontak,
        //     'tanggal' => $tanggalSekarang,
        // ]);

        // Simpan atau tampilkan PDF
        // return $pdf->download('output.pdf');
    }
    public function generate(Request $request)
    {
        $nama = session('nama');
        $kontak = session('kontak');
        $tanggal = date("d F Y");

        $data = DB::table('tbl_step1')
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*')
            ->get();

        foreach ($data as $pesanan) {
            $d = [
                'data' => $pesanan,
                'nama' => $nama,
                'kontak' => $kontak,
                'tanggal' => $tanggal,
            ];
            $pdf = new Dompdf();
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $pdf->setOptions($options);

            // Load Bootstrap CSS locally
            $bootstrapCSS = file_get_contents(public_path('c.css')); // Ganti path sesuai dengan lokasi CSS Bootstrap Anda
            $html = View::make('landing_page.quotation', compact('data', 'nama', 'kontak', 'tanggal'))->render();


            // Combine Bootstrap CSS with your HTML
            $combinedHtml = '<style> .print{
                display:none}' . $bootstrapCSS . '<style>' . $html;

            $pdf->loadHtml($combinedHtml);
            $pdf->setPaper('A4', 'landscape');
            $pdf->render();


            return $pdf->stream('quotation.pdf');
        }
    }
    // ================================ add ==================================
    public function addForm1(Request $request)
    {
        $selectedText = $request->input('selectedText');
        dd($selectedText);
        $nm = $request->nama_tim;
        $dm = $request->dom;
        $np = $request->np;
        $nw = $request->nw;
        $ap = $request->alamat_p;
        $jp = $request->jp;
        $kt = $request->kategori;
        $kl = $request->kualitas;
        $harga = $request->harga;
        $bbm = $request->bbm;
        $plr = $request->plr;
        $ud = $request->up3d;
        $lc = $request->logo_celana;
        $lp = $request->lengan_panjang;
        $th = $request->total_harga;
        $xxl = $request->xxl;
        $xxxl = $request->xxxl;
        $xxxxl = $request->xxxxl;
        $cp = $request->celana_panjang;
        $kk = $request->kaoskaki;
        $cookie = $request->cookie;

        $str = Str::random(12);
        $data = ModelStep1::create([
            'kd_pembelian' => 'R' . $str,
            'nama_tim' => $nm,
            'domisili' => $dm,
            'nama_pemesanan' => $np,
            'kontak' => $nw,
            'alamat_pengirim' => $ap,
            'jumlah_pemesanan' => $jp,
            'kategori_harga' => $kt,
            'tipe_kualitas' => $kl,
            'harga' => $harga,
            'badan_bawah' => $bbm,
            'pola_lengan' => $plr,
            'upgrade_logo_3d' => $ud,
            'logo_tim_dicelana' => $lc,
            'lengan_panjang' => $lp,
            'total_harga' => $th,
            'size_2xl' => $xxl,
            'size_3xl' => $xxxl,
            'size_4xl' => $xxxxl,
            'celana_panjang' => $cp,
            'kaoskaki' => $kk,
        ]);
        return redirect('/form-2');
    }
    public function invoice(Request $request)
    {
        $data = DB::table('tbl_step1')
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*')
            ->get();
        foreach ($data as $pesanan) {

            return view('landing_page.invoice', [
                'data' => $pesanan,
            ]);
        }
    }
    public function tambahDataPesanan(Request $request)
    {
        $np = $request->namaPunggung;
        $no = $request->nomor;
        $uk = $request->ukuran;
        $data = DB::table('tbl_data_pesanan')->get();
        // dd($np, $no, $uk);

        $insert =  DB::table('tbl_data_pesanan')->insert([
            'namapunggung' => $np,
            'nomor' => $no,
            'ukuran' => $uk,
        ]);

        return redirect()->back();
    }
    // public function generatePDF()
    // {

    //     $html = file_get_contents(storage_path('app/quotation.html'));


    //     $pdf = PDF::loadHTML($html);

    //     return $pdf->download('output.pdf');
    // }
    public function saveSelectedText(Request $request)
    {
        // Ambil data yang dikirimkan dari frontend
        $selectedText = $request->input('selectedText');

        // Simpan data ke dalam database (contoh: menggunakan model)
        // Replace 'YourModel' dengan model yang sesuai dengan tabel database Anda
        // YourModel::create(['column_name' => $selectedText]);

        // Beri respons jika perlu
        return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan']);
    }
}
