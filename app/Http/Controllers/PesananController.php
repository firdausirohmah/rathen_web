<?php

namespace App\Http\Controllers;

use App\Models\ModelOrder;
use App\Models\ModelStep1;
use App\Models\ModelStep4;
use App\Models\ModeStep2;
use App\Models\ModeStep3;

use App\Models\Quotation1;
use App\Models\Quotation2;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Excel;

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

    public function form_2($request)
    {
        
        $kode = $request;
        
        // dd($kode);
        $data = DB::table('tbl_step2')
            ->join('tbl_quotation_order', 'tbl_step2.kd_step2', '=', 'tbl_quotation_order.kd_step') // Sesuaikan kondisi join
            ->where('tbl_step2.kd_step2', $kode) // Sesuaikan kondisi WHERE
            ->select('tbl_quotation_order.*', 'tbl_step2.*') // Pilih kolom yang ingin Anda ambil
            ->get();
        // dd($data);
        foreach ($data as $pesanan) { 
            return view('landing_page.form-orderStep2', [
                'data' => $pesanan,
                'kode' => $kode, 
            ]);
        }
    }
    public function upload(Request $request)
    {
        $kode = session('kode'); 
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
            $file1Name = $kode . '_Design-Pemain' . '.' . $djp->extension();
            $djp->storeAs('uploads', $file1Name);
        }
        // ===========================
        $djk = $request->file('djk');
        if ($djk == null) {
            $file2Name = '-';
        } else {
            $file2Name = $kode . '_Design-Kiper' . '.' . $djk->extension();
            $djk->storeAs('uploads', $file2Name);
        }
        // ===========================
        $lt = $request->file('lt');
        if ($lt == null) {
            $file3Name = '-';
        } else {
            $file3Name = $kode . '_Logo-Tim' . '.' . $lt->extension();
            $lt->storeAs('uploads', $file3Name);
        }
        // ===========================
        $sdd = $request->file('sdd');
        if ($sdd == null) {
            $file4Name = '-';
        } else {
            $file4Name = $kode . '-Sponsor-Dada-1baris' . '.' . $sdd->extension();
            $sdd->storeAs('uploads', $file4Name);
        }
        // =========================== 
        $sd = $request->file('sd');
        if ($sd == null) {
            $file5Name = '-';
        } else {
            $file5Name = $kode . '_Sponsor-Dada-Logo' . '.' . $sd->extension();
            $sd->storeAs('uploads', $file5Name);
        }
        // =========================== 
        $t1b = $request->file('t1b');
        if ($t1b == null) {
            $file6Name = '-';
        } else {
            $file6Name = $kode . '_Sponsor-Dada-t1b' . '.' . $t1b->extension();
            $t1b->storeAs('uploads', $file6Name);
        }
        // ===========================
        $ltt = $request->file('ltt');
        if ($ltt == null) {
            $file7Name = '-';
        } else {
            $file7Name = $kode . '_Sponsor-Dada-Logo-Tulisan' . '.' . $ltt->extension();
            $ltt->storeAs('uploads', $file7Name);
        }
        // ===========================
        $lk = $request->file('lk');
        if ($lk == null) {
            $file8Name = '-';
        } else {
            $file8Name = $kode . '_Logo-Lengan-R' . '.' . $lk->extension();
            $lk->storeAs('uploads', $file8Name);
        }
        // ===========================
        $llk = $request->file('llk');
        if ($llk == null) {
            $file9Name = '-';
        } else {
            $file9Name = $kode . '-Logo-Lengan-LR' . '.' . $llk->extension();
            $llk->storeAs('uploads', $file9Name);
        }
        // ===========================
        $sbt = $request->file('sbt');
        if ($sbt == null) {
            $file10Name = '-';
        } else {
            $file10Name = $kode . '_Sponsor-Belakang-t1b' . '.' . $sbt->extension();
            $sbt->storeAs('uploads', $file10Name);
        }
        // ===========================
        $sblt = $request->file('sblt');
        if ($sblt == null) {
            $file11Name = '-';
        } else {
            $file11Name = $kode . '_Sponsor-Belakang-Logo' . '.' . $sblt->extension();
            $sblt->storeAs('uploads', $file11Name);
        }
        // ===========================
        // dd($file1Name,$file2Name,$file3Name,$file4Name,$file5Name,$file6Name,$file7Name,$file8Name,$file9Name,$file10Name,$file11Name);


        // dd($file1Name,$file2Name); 
        $data = ModeStep2::where('kd_step2', $kode )
        ->update([ 
            'design_jersey_pemain' => $file1Name,
            'design_jersey_kiper' => $file2Name,
            'logo_tim' => $file3Name,
            'sponsor_dada_tulisan1baris' => $file4Name,
            'sponsor_dada_logodantulisan' => $file5Name,
            'extra_tulisan1baris' => $file6Name,
            'extra_logodantulisan' => $file7Name,
            'logo_dilengan_kanan' => $file8Name,
            'logo_dilengan_kiri' => $file9Name,
            'sponsor_belakang_tulisan1baris' => $file10Name,
            'sponsor_belakang_logodantulisan' => $file11Name,
        ]);
        // Lakukan operasi lain jika diperlukan
        // dd($file1,$file2);
        return redirect('/form-3')->with('success', 'Files successfully uploaded.');
    }
    public function form_3($request)
    {
        $kode = $request;
        // dd($kode);
        $data = DB::table('tbl_step3')
            ->join('tbl_quotation_order', 'tbl_step3.kd_step3', '=', 'tbl_quotation_order.kd_step') // Sesuaikan kondisi join 
            ->where('tbl_step3.kd_step3', $kode) // Sesuaikan kondisi WHERE
            ->select('tbl_quotation_order.*', 'tbl_step3.*') // Pilih kolom yang ingin Anda ambil
            ->get();
        
        foreach ($data as $step3){ 
            return view('landing_page.form-orderStep3', [
                'data' => $step3,
                'kode' => $kode,
            ]);
        }

    }
    public function form_4($request)
    {
        $kode = $request;
        $order = Quotation2::where('kd_step',$kode)->get();
        // dd($order);
        $data = ModelStep4::where('kd_step1', $kode) 
        ->orderByRaw("FIELD(ukuran, 'S', 'M', 'L', 'XL', 'XXL', 'XXXL')") // Sesuaikan dengan ukuran yang sesuai 
        ->get();  
        foreach ($order as $field){
            $status = $field->status_order; 
        }
        // dd($status);

            return view('landing_page.form-orderStep4', [
                'pesanan' => $data, 
                'kode' => $kode,
                'sukses' => $status,
            ]); 
        
    }
    public function downloadPdf()
{
    $file = public_path('file/Format-Ukuran.pdf');

    return response()->download($file, 'Format-Ukuran.pdf');
}
    public function tambahDataPesanan(Request $request)
    {
        $kode = $request->segment(2);
        $np = $request->namaPunggung;
        $no = $request->nomor;
        $uk = $request->ukuran;
        // dd($np, $no, $uk, $kode);  
        $countData = ModelStep4::where('kd_step1', $kode)->count();
        // $tbl_step1 = ModelStep1::where('kd_step4', $kode)->get();
        $tbl_quotation_order = Quotation2::where('kd_step', $kode)->get();
        foreach ($tbl_quotation_order as $qty){
            $jmlQTY = $qty->qty;
        }
        // dd($jmlQTY);
        if ($countData < $jmlQTY) {
            $insert =  ModelStep4::create([
                'namapunggung' => $np,
                'nomor' => $no,
                'ukuran' => $uk,
                'kd_step1' => $kode,
            ]);
            return redirect()->back()->with('success', 'Data Pemain Berhasil Di Tambahkan.');
        } else {
            $selesai = ModelOrder::where('kd_order', $kode)->update(['status_order'=> 'sukses']);
            return redirect()->back()->with('error', 'Data Yang Di Inputkan Sudah Memenuhi Batas Pemesanan.');
        }
        

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
        
        // foreach ($ref as $rev) {
        //     $totalHarga = $rev->harga * $qty;
        //     // dd($totalHarga);
        //     return view('landing_page.form-order', [
        //         'pesanan' => $data,
        //         'data' => $rev,
        //         'qty' => $qty,
        //         'total' => $totalHarga,
        //     ]);
        // }
        foreach ($ref as $rev) {
            $totalHarga = $rev->harga * $qty;
            // dd($totalHarga);
            return view('landing_page.form-orderStep1', [
                'pesanan' => $data,
                'data' => $rev,
                'qty' => $qty,
                'total' => $totalHarga,
            ]);
        }
    }

    public  function orderNew(Request $request)
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
            return view('landing_page.form-orderStep', [
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
        $now = Carbon::now();
        $formattedNow = $now->format('dHmiys'); 
        session([
            'kode' => $formattedNow, 
        ]);
        $step2 = ModeStep2::create([
            'kd_step2' => $formattedNow,
        ]);
        $step3 = ModeStep3::create([
            'kd_step3' => $formattedNow,
        ]);

        session(['nama' => $request->nama_pemesanan]);
        session(['kontak' => $request->kontak]);
        session(['email' => $request->email]);
        session(['alamat' => $request->alamat]);

        $nama_pemesanan = $request->nama_pemesanan;
        $kontak = $request->kontak;
        $email = $request->email;
        $alamat = $request->alamat;

        $kk = $request->kerah_kancing;
        $bbm = $request->bb_melengkung;
        $pl = $request->lengan_raglan;
        $lp = $request->lengan_panjang;
        $s2xl = $request->s2xl;
        $s3xl = $request->s3xl;
        $s4xl = $request->s4xl;
        $cp = $request->celana_printing;
        $cpro = $request->celana_pro;
        $kki = $request->kaoskaki;
        $be = $request->bahan_embos;
        $l3d = $request->logo_3d;
        $kr = $request->kerah_rib;
        $tr = $request->tangan_rib;
        // dd($lp);

        $kd_part = $request->kd_part;
        $qty = $request->qty;
        // $data = DB::table('tbl_step1')->get('*');
        $ref = DB::table('tbl_part')->where('kd_part', $kd_part)->get();

        $str = Str::random(12);

        // Save data to tbl_quotation
        Quotation1::create([
            'kd_quotation' => 'Q' . $str,
            'nama_pelanggan' => $nama_pemesanan,
            'no_hp' => $kontak,
            'email' => $email,
            'alamat' => $alamat,
            // Add other columns as needed
        ]);

        // Rest of your existing code...
        $tanggalSekarang = date("d F Y");

        $data = DB::table('tbl_quotation_order')
            ->join('tbl_step2', 'tbl_quotation_order.kd_step', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_quotation_order.kd_step', '=', 'tbl_step3.kd_step3')
            ->select('tbl_quotation_order.*', 'tbl_step2.*', 'tbl_step3.*')
            ->get();

        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_logo.*', 'tbl_harga.*')
            ->get();
        
        foreach ($harga as $h){
            $price = $h;
        }
        foreach ($ref as $rev) {
            $product = $rev->product;
            $hargaproduct = $rev->harga;
            $kualitas = $rev->kualitas;
        }

        Quotation2::create([
            'kd_step' => $formattedNow,
            'kd_quotation' => 'Q' . $str,
            'product' => $product,
            'qty' => $qty,
            'kerah_kancing' => $kk ,
            'bb_melengkung' => $bbm ,
            'lengan_raglan' => $pl ,
            'lengan_panjang' => $lp,
            's2xl'=>$s2xl,
            's3xl'=>$s3xl,
            's4xl'=>$s4xl,
            'celana_printing'=>$cp ,
            'celana_pro'=>$cpro,
            'kaoskaki'=>$kki,
            'bahan_embos'=>$be ,
            'logo_3d'=>$l3d ,
            'kerah_rib'=>$kr ,
            'tangan_rib'=>$tr ,
            'kategori_harga'=>$kd_part,
            'tipe_kualitas'=>$kualitas,
        ]);

        foreach ($data as $pesanan) {
            
            $d = [
                'pesanan' => $pesanan->kd_step,
                'price' => $price, 
                'product' => $product, 
            ];

            return view('landing_page.quotation-order', [
                'nama' => $nama_pemesanan,
                'kontak' => $kontak,
                'email' => $email,
                'alamat' => $alamat,

                'tanggal' => $tanggalSekarang,
                'kd_part'=>$kd_part,

                'pesanan' => $pesanan,
                'price' => $price,
                session(['price' => $price]),
                'product' => $product,
                session(['product' => $product]),
                'harga' => $hargaproduct,
                session(['harga' => $hargaproduct]),
                'qty' => $qty,
                session(['qty' => $qty]),

                'kerah_kancing' => $kk ,
                session(['kerah_kancing' => $kk]),
                'badan_bawah' => $bbm , 
                session(['badan_bawah' => $bbm]),
                'pola_lengan' => $pl ,
                session(['pola_lengan' => $pl]),
                'lengan_panjang' => $lp ,
                session(['lengan_panjang' => $lp]),
                's2xl' => $s2xl,
                session(['s2xl' => $s2xl]),
                's3xl' => $s3xl,
                session(['s3xl' => $s3xl]),
                's4xl' => $s4xl,
                session(['s4xl' => $s4xl]),
                'celana_printing' => $cp,
                session(['celana_printing' => $cp]),
                'celana_pro' => $cpro,
                session(['celana_pro' => $cpro]),
                'kaoskaki' => $kki,
                session(['kaoskaki' => $kki]),
                'bahan_embos' => $be,
                session(['bahan_embos' => $be]),
                'logo_3d' => $l3d,
                session(['logo_3d' => $l3d]),
                'kerah_rib' => $kr,
                session(['kerah_rib' => $kr]),
                'tangan_rib' => $tr,
                session(['tangan_rib' => $tr]),
            ]);
        }
    }
    
    public function quotation_view($request)
    {
        $formattedNow = $request; 
        // $data = DB::table('tbl_step1')->get('*');
        
        $str = Str::random(12);

        $data = DB::table('tbl_quotation_order')
            ->join('tbl_quotation', 'tbl_quotation_order.kd_quotation', '=', 'tbl_quotation.kd_quotation')
            ->select('tbl_quotation_order.*','tbl_quotation.*')
            ->where('kd_step', $formattedNow)->get();

        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_logo.*', 'tbl_harga.*')
            ->get();
        
        foreach ($harga as $h){
            $price = $h;
        }
        foreach ($data as $pesanan){
            $kd_part = $pesanan->kategori_harga;
        }
        $ref = DB::table('tbl_part')->where('kd_part', $kd_part)->get();

        foreach ($ref as $rev) {
            $product = $rev->product;
            $hargaproduct = $rev->harga;
            $kualitas = $rev->kualitas;
        }

        foreach ($data as $pesanan) {
            
            $d = [
                
                'price' => $price, 
                'product' => $product,

            ];

            return view('landing_page.quotation-order', [
                
                'nama' => $pesanan->nama_pelanggan,
                'kontak' => $pesanan->no_hp,
                'email' => $pesanan->email,
                'alamat' => $pesanan->alamat,

                'tanggal' => Carbon::parse($pesanan->created_at)->format('d F Y'),
                'kd_part' => $pesanan->kategori_harga,

                'pesanan' => $pesanan,
                'price' => $price,
                'product' => $product,
                'qty' => $pesanan->qty,
                'harga' => $hargaproduct,

                // dd($pesanan),
                'kerah_kancing' => $pesanan->kerah_kancing,
                'badan_bawah' => $pesanan->bb_melengkung,
                'pola_lengan' => $pesanan->lengan_raglan,
                'lengan_panjang' => $pesanan->lengan_panjang,
                's2xl' => $pesanan->s2xl,
                's3xl' => $pesanan->s3xl,
                's4xl' => $pesanan->s4xl,
                'celana_printing' => $pesanan->celana_printing,
                'celana_pro' => $pesanan->celana_pro,
                'kaoskaki' => $pesanan->kaoskaki,
                'bahan_embos' => $pesanan->bahan_embos,
                'logo_3d' => $pesanan->logo_3d,
                'kerah_rib' => $pesanan->kerah_rib,
                'tangan_rib' => $pesanan->tangan_rib,

                'kode'=>$formattedNow,
                // dd($pesanan),
                // dd($price),

                
            ]);
        }
    }

    public function generate(Request $request)
    {
        $nama = session('nama');
        $kontak = session('kontak');
        $email = session('email');
        $alamat = session('alamat');
        $tanggal = date("d F Y");

        $price = session('price');
        $product = session('product');
        $harga = session('harga');
        $qty = session('qty');
        $kerah_kancing = session('kerah_kancing');
        $badan_bawah = session('badan_bawah');
        $pola_lengan = session('pola_lengan');
        $lengan_panjang = session('lengan_panjang');
        $s2xl = session('s2xl');
        $s3xl = session('s3xl');
        $s4xl =  session('s4xl');
        $celana_printing =  session('celana_printing');
        $celana_pro = session('celana_pro');
        $kaoskaki = session('kaoskaki');
        $bahan_embos = session('bahan_embos');
        $logo_3d = session('logo_3d');
        $kerah_rib = session('kerah_rib');
        $tangan_rib = session('tangan_rib');

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

                'price' => $price,
                'product' => $product,
                'harga' => $harga,
                'qty' => $qty,

                'kerah_kancing' => $kerah_kancing , 
                'badan_bawah' => $badan_bawah , 
                'pola_lengan' => $pola_lengan ,
                'lengan_panjang' => $lengan_panjang ,
                's2xl' => $s2xl,
                's3xl' => $s3xl,
                's4xl' => $s4xl,
                'celana_printing' => $celana_printing,
                'celana_pro' => $celana_pro,
                'kaoskaki' => $kaoskaki,
                'bahan_embos' => $bahan_embos,
                'logo_3d' => $logo_3d,
                'kerah_rib' => $kerah_rib,
                'tangan_rib' => $tangan_rib,
            ];
            $pdf = new Dompdf();
            $options = new Options();
            $options->set(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->setChroot('');
            $pdf->setOptions($options);

            // Load Bootstrap CSS locally
            $bootstrapCSS = file_get_contents('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'); // Ganti path sesuai dengan lokasi CSS Bootstrap Anda
            $html = View::make('landing_page.quotation', compact('data', 'nama', 'kontak', 'email', 
            'alamat', 'tanggal','qty','harga','product','kerah_kancing','badan_bawah','pola_lengan', 'price', 'logo_3d',
            'lengan_panjang','s2xl','s3xl','s4xl','celana_printing','celana_pro','kaoskaki','bahan_embos','kerah_rib','tangan_rib'))->render();
            $srcImg= "{{public_path('/asset/images/logo-dark.png')}}";


            // Combine Bootstrap CSS with your HTML
            $combinedHtml = '<style> html *{margin:0;padding:0;}.button.back{display:none;}.print{
                display:none;}.container{margin:0!important;} .card{width:650px!important;border:none!important}
                .table-responsive table thead tr th, .table-responsive table tbody tr td, .table-responsive table tfoot tr td{border-color: #3c3f44;}'
                . $bootstrapCSS . '<style>' . $html;

            $pdf->loadHtml($combinedHtml);
            $pdf->setPaper('A4', 'portrait');
            $pdf->render();

            // return $pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('reports.invoiceSell')->stream();
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
        // Simpan username ke dalam sesi
        session([
            'kode' => $formattedNow, 
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
            'kd_step4' => $formattedNow,

        ]);
        $order = ModelOrder::create([
            'kd_order' => $formattedNow,
            'kd_step2' => $formattedNow,
            'kd_step3' => $formattedNow,
            'status_order' => 'proses',
        ]); 
        // auth()->login($order);

        return redirect('/form-2');
    }
    public function addForm3(Request $request)
    {
        $kode = session('kode'); 
        $pl = $request->pola_lengan;
        $mk = $request->model_kerah;
        $bb = $request->bb;
        $bc = $request->bc;
        // dd($kode, $pl, $mk, $bb, $bc);
        $data = ModeStep3::where('kd_step3', $kode)->update([
            'pola_lengan' => $pl ,
            'model_kerah' => $mk ,
            'bahan_baju' => $bb ,
            'bahan_celana' => $bc , 
        ]);   

        return redirect('/form-4');
    }
    public function invoice(Request $request)
    {
        $kode = session('kode');
        $data = ModelStep1::where('kd_step4', $kode)
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->join('tbl_part', 'tbl_step1.kategori_harga', '=', 'tbl_part.kd_part')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*','tbl_part.harga')
            ->get();
        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_logo.*', 'tbl_harga.*')
            ->get();
        
        foreach ($harga as $h){
            $price = $h;
        }
        foreach ($data as $pesanan) {
            // dd($pesanan->tipe_kualitas);
            $JarseyOrder = $pesanan->tipe_kualitas;
            if($JarseyOrder == 'Stadium'){
                $JarseyDefault = 'Jarsey'.' - '.$JarseyOrder.' '.$pesanan->kategori_harga;
                $Jarsey = strtoupper($JarseyDefault);
            }else{
                $JarseyDefault = 'Jarsey'.'-'.$JarseyOrder.' VERSION';
                $Jarsey = strtoupper($JarseyDefault);
            } 
            $d = [
                'Jarsey' => $Jarsey,
                'pesanan' => $pesanan,
                'price' => $price, 
            ];
            // dd($Jarsey);
            
            return view('landing_page.form-orderStep5', [
                'pesanan' => $pesanan,
                'price' => $price,
                'Jarsey' => $Jarsey,
            ]);
        }
    }
    public function export(){
        $kode = session('kode');
        $data = ModelStep1::where('kd_step4', $kode)
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->join('tbl_part', 'tbl_step1.kategori_harga', '=', 'tbl_part.kd_part')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*','tbl_part.harga')
            ->get();
        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_logo.*', 'tbl_harga.*')
            ->get();
        foreach ($harga as $h){
            $price = $h;
        }
       
        foreach ($data as $pesanan) {
            $JarseyOrder = $pesanan->tipe_kualitas;
            if($JarseyOrder == 'Stadium'){
                $JarseyDefault = 'Jarsey'.' - '.$JarseyOrder.' '.$pesanan->kategori_harga;
                $Jarsey = strtoupper($JarseyDefault);
            }else{
                $JarseyDefault = 'Jarsey'.'-'.$JarseyOrder.' VERSION';
                $Jarsey = strtoupper($JarseyDefault);
            } 
            $d = [
                'pesanan' => $pesanan,
                'price' => $price, 
                'Jarsey' => $Jarsey,
            ];
            // dd ($data->nama_pemesanan);
            $pdf = new Dompdf();
            $options = new Options();
            $options->set(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->setChroot('');
            $pdf->setOptions($options);

            // Load Bootstrap CSS locally
            $bootstrapCSS = file_get_contents(public_path('c.css')); // Ganti path sesuai dengan lokasi CSS Bootstrap Anda
            $html = View::make('landing_page.invoice', compact('pesanan', 'price','Jarsey'))->render();
            
            // Combine Bootstrap CSS with your HTML
            $combinedHtml = '<style> .print{
                display:none;}.container{margin:0!important;} .row{width:650px;} .card{border:none!important} .card-body{width:650px;}
                .card-body .row .col-md-6{margin:1rem!important;padding:0!important} td, .col-md-6 p, .col-md-2 p, .text-primary, .text-center{color:#000!important}
                .table-responsive table thead tr th, .table-responsive table tbody tr td, .table-responsive table tfoot tr td{border-color: #3c3f44;}'
                . $bootstrapCSS . '<style>' . $html;

            $pdf->loadHtml($combinedHtml);
            $pdf->setPaper('A4', 'potrait');
            $pdf->render();


            return $pdf->stream('invoice.pdf');
            } 
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
    public function exportToExcel()
    {
        $data = ModelStep4::all();

        return Excel::create('data_export', function ($excel) use ($data) {
            $excel->sheet('Sheet 1', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download('xlsx');
    }
}
