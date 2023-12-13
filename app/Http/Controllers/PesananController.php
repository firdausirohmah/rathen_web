<?php

namespace App\Http\Controllers;

use App\Models\ModelOrder;
use App\Models\ModelStep1;
use App\Models\ModeStep2;
use App\Models\ModeStep3;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Carbon;
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
    public function upload(Request $request)
    {
        $now = Carbon::now();
        $time = $now->format('dHmiys');
        // Validasi file
        // $request->validate([
        //     'djp' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'djk' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'lt' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'sdd' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'sd' => 'required|mimes:cdr,ai,pdf,jpg',
        //     't1b' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'ltt' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'lk' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'llk' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'sbt' => 'required|mimes:cdr,ai,pdf,jpg',
        //     'sblt' => 'required|mimes:cdr,ai,pdf,jpg', 
        // ]);

        // Menyimpan file pertama
        $djp = $request->file('djp');
        if ($djp == null) {
            $file1Name = '-';
        } else {
            $file1Name = $time . '_Design-Pemain' . '.' . $djp->extension();
            $djp->storeAs('uploads', $file1Name);
        }
        // ===========================
        $djk = $request->file('djk');
        if ($djk == null) {
            $file2Name = '-';
        } else {
            $file2Name = $time . '_Design-Kiper' . '.' . $djk->extension();
            $djk->storeAs('uploads', $file2Name);
        }
        // ===========================
        $lt = $request->file('lt');
        if ($lt == null) {
            $file3Name = '-';
        } else {
            $file3Name = $time . '_Logo-Tim' . '.' . $lt->extension();
            $lt->storeAs('uploads', $file3Name);
        }
        // ===========================
        $sdd = $request->file('sdd');
        if ($sdd == null) {
            $file4Name = '-';
        } else {
            $file4Name = $time . '-Sponsor-Dada-1baris' . '.' . $sdd->extension();
            $sdd->storeAs('uploads', $file4Name);
        }
        // =========================== 
        $sd = $request->file('sd');
        if ($sd == null) {
            $file5Name = '-';
        } else {
            $file5Name = $time . '_Sponsor-Dada-Logo' . '.' . $sd->extension();
            $sd->storeAs('uploads', $file5Name);
        }
        // =========================== 
        $t1b = $request->file('t1b');
        if ($t1b == null) {
            $file6Name = '-';
        } else {
            $file6Name = $time . '_Sponsor-Dada-t1b' . '.' . $t1b->extension();
            $t1b->storeAs('uploads', $file6Name);
        }
        // ===========================
        $ltt = $request->file('ltt');
        if ($ltt == null) {
            $file7Name = '-';
        } else {
            $file7Name = $time . '_Sponsor-Dada-Logo-Tulisan' . '.' . $ltt->extension();
            $ltt->storeAs('uploads', $file7Name);
        }
        // ===========================
        $lk = $request->file('lk');
        if ($lk == null) {
            $file8Name = '-';
        } else {
            $file8Name = $time . '_Logo-Lengan-R' . '.' . $lk->extension();
            $lk->storeAs('uploads', $file8Name);
        }
        // ===========================
        $llk = $request->file('llk');
        if ($llk == null) {
            $file9Name = '-';
        } else {
            $file9Name = $time . '-Logo-Lengan-LR' . '.' . $llk->extension();
            $llk->storeAs('uploads', $file9Name);
        }
        // ===========================
        $sbt = $request->file('sbt');
        if ($sbt == null) {
            $file10Name = '-';
        } else {
            $file10Name = $time . '_Sponsor-Belakang-t1b' . '.' . $sbt->extension();
            $sbt->storeAs('uploads', $file10Name);
        }
        // ===========================
        $sblt = $request->file('sblt');
        if ($sblt == null) {
            $file11Name = '-';
        } else {
            $file11Name = $time . '_Sponsor-Belakang-Logo' . '.' . $sblt->extension();
            $sblt->storeAs('uploads', $file11Name);
        }
        // ===========================
        // dd($file1Name,$file2Name,$file3Name,$file4Name,$file5Name,$file6Name,$file7Name,$file8Name,$file9Name,$file10Name,$file11Name);


        // dd($file1Name,$file2Name); 
        $data = ModeStep2::create([
            'kd_step2' => $file1Name,
            'design_jersey_pemain' => $file2Name,
            'design_jersey_kiper' => $file3Name,
            'logo_tim' => $file4Name,
            'sponsor_dada_tulisan1baris' => $file5Name,
            'sponsor_dada_logodantulisan' => $file6Name,
            'extra_tulisan1baris' => $file7Name,
            'extra_logodantulisan' => $file8Name,
            'logo_dilengan_kanan' => $file9Name,
            'logo_dilengan_kiri' => $file10Name,
            'sponsor_belakang_tulisan1baris' => $file11Name,
        ]);
        // Lakukan operasi lain jika diperlukan
        // dd($file1,$file2);
        return redirect('/form-3')->with('success', 'Files successfully uploaded.');
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
    public  function order(Request $request)
    {
        $kd_part = $request->kd_part;
        $qty = $request->qty;
        $data = DB::table('tbl_step1')->get('*');
        $ref = DB::table('tbl_part')->where('kd_part', $kd_part)->get();
        // $totalHarga = $ref->harga;
        // dd($ref->harga);
        // dd($kd_part,$qty);
        foreach ($ref as $rev) {
            $totalHarga = $rev->harga * $qty;
            // dd($totalHarga);
            return view('landing_page.form-order', [
                'pesanan' => $data,
                'data' => $rev,
                'qty' => $qty,
                'total' => $totalHarga,
            ]);
        }
    }
    // ==========================quotation===================================
    public function quotation(Request $request)
    {
        session(['nama' => $request->nama_pemesanan]);
        session(['kontak' => $request->kontak]);
        session(['email' => $request->email]);
        session(['alamat' => $request->alamat]);
        $nama_pemesaanan = $request->nama_pemesanan;
        $kontak = $request->kontak;
        $email = $request->email;
        $alamat = $request->alamat;

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
                'email' => $email,
                'alamat' => $alamat,

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
        $email = session('email');
        $alamat = session('alamat');
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
                'email' => $email,
                'alamat' => $alamat,
                'tanggal' => $tanggal,
            ];
            $pdf = new Dompdf();
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $pdf->setOptions($options);

            // Load Bootstrap CSS locally
            $bootstrapCSS = file_get_contents(public_path('c.css')); // Ganti path sesuai dengan lokasi CSS Bootstrap Anda
            $html = View::make('landing_page.quotation', compact('data', 'nama', 'kontak', 'email', 'alamat', 'tanggal'))->render();


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
        $now = Carbon::now();
        $formattedNow = $now->format('dHmiys');
        // dd($formattedNow);
        $selectedText = $request->input('selectedText');
        // dd($selectedText);
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
        $cookie = $formattedNow;

        $order = ModelOrder::create([
            'kd_order' => $formattedNow,
            'kd_step2' => $formattedNow,
            'kd_step3' => $formattedNow,
            'status_order' => 'proses',
        ]);
        $step2 = ModeStep2::create([
            'kd_step2' => $formattedNow,
        ]);
        $step3 = ModeStep3::create([
            'kd_step3' => $formattedNow,
        ]);
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
            'kd_step2' => $formattedNow,
            'kd_step3' => $formattedNow,

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
