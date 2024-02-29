<?php

namespace App\Http\Controllers;

use App\Imports\FinanceImport;
use App\Models\AboutUs;
use App\Models\Approval;
use App\Models\Faq;
use App\Models\Finance;
use App\Models\LinkWeb;
use App\Models\Location;
use App\Models\Media;
use App\Models\ModelStep1;
use App\Models\ModelStep4;
use App\Models\OrderStep;
use App\Models\pemesananModel;
use App\Models\ProgressProduction;
use App\Models\TargetOmset;
use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View as FacadesView;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\FlareClient\View;

class adminController extends Controller
{
    public function dashboard()
    {
        $data = DB::table('tbl_step1')->orderBy('created_at', 'asc')->take(30)->get();

        $uniqueCustomers = $data->groupBy(function ($item) {
            return strtolower(str_replace(' ', '', $item->nama_pemesanan));
        })->map(function ($group) {
            return [
                'nama_pemesanan' => $group->first()->nama_pemesanan,
                // 'total_orders' => $group->sum('harga'),
            ];
        })->values();

        $uniqueDom = $data->groupBy(function ($item) {
            return strtolower(str_replace(' ', '', $item->domisili));
        })->map(function ($group) {
            return [
                'domisili' => $group->first()->domisili,
                // 'total_orders' => $group->sum('harga'),
            ];
        })->values();

        return view('auth.dashboard', [
            'pages' => "Dashboard",
            'data' => $data,
            'uniqueCustomers' => $uniqueCustomers,
            'uniqueDom' => $uniqueDom,
        ]);
    }
    public function vieworder()
    {
        $data = DB::table('tbl_step1')
            ->select('*')
            ->get();

        $dataQ = DB::table('tbl_quotation_order')
            ->join('tbl_quotation', 'tbl_quotation_order.kd_quotation', '=', 'tbl_quotation.kd_quotation')
            ->select('tbl_quotation_order.*','tbl_quotation.*')
            ->get();
        // dd($data); 
        return view('auth.tables', [
            'pages' => "View Order",
            'order' => $data,
            'quo' => $dataQ,
        ]);
    }
    public function production()
    {
        $data = DB::table('tbl_step1')
            ->join('user_order', 'tbl_step1.kd_step2', '=', 'user_order.kd_order')
            ->join('progress_productions', 'progress_productions.kd_step', '=', 'tbl_step1.kd_step2')
            ->select('tbl_step1.*','user_order.*', 'progress_productions.*')
            ->get();

        $dataQ = DB::table('tbl_quotation_order')
            ->join('tbl_quotation', 'tbl_quotation_order.kd_quotation', '=', 'tbl_quotation.kd_quotation')
            ->select('tbl_quotation_order.*','tbl_quotation.*')
            ->get();
        // dd($data); 
        return view('auth.production', [
            'pages' => "Production",
            'order' => $data,
            'quo' => $dataQ,
        ]);
    }
    public function approval_edit(Request $input){
        $kode = $input->kode;
        if(isset($input)){
            for($i = 1; $i < 4; $i++){
                $aproval_get = Approval::where('id_user',$i)->where('kd_step', $kode)->first();
                if($aproval_get != null){
                    Approval::where('id_user',$i)->update(['is_agreed' => (($input->has(('approval'.$i))?true:false))]);
                }else{
                    
                    $insert = new Approval();
                    if($input->has(('approval'.$i))){

                        $insert->id_user = $i;
                        $insert->kd_step = $kode;
                        $insert->is_agreed = true;
                        $insert->save();
                    }else{
                        $insert->id_user = $i;
                        $insert->kd_step = $kode;
                        $insert->is_agreed = false;
                        $insert->save();

                    }
                    
                }

               
            }

        }
        return redirect()->back();
    }
    public function production_edit($request)
    {
        $kode = $request;

        // dd($request);
        $aproval_1 = Approval::where('id_user',1)->where('kd_step', $kode)->first();
        $aproval_2 = Approval::where('id_user',2)->where('kd_step', $kode)->first();
        $aproval_3 = Approval::where('id_user',3)->where('kd_step', $kode)->first();
        $data = ModelStep1::where('kd_step4', $kode)
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->join('tbl_part', 'tbl_step1.kategori_harga', '=', 'tbl_part.kd_part')
            ->join('user_order', 'user_order.kd_order', '=', 'tbl_step1.kd_step2')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*','tbl_part.harga','user_order.*')
            ->get();
        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_logo.*', 'tbl_harga.*')
            ->get();
        
        foreach ($harga as $h){
            $price = $h;
        }
        foreach ($data as $pesanan) {
            // dd($pesanan->status_order);
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
            
            return view('landing_page.production', [
                'pesanan' => $pesanan,
                'price' => $price,
                'Jarsey' => $Jarsey,
                'kode' => $kode, 
                'aproval_1' => $aproval_1,
                'aproval_2' => $aproval_2,
                'aproval_3' => $aproval_3,
            ]);
        }
    }
    public function production_generate($request)
    {
        $kode = $request;

        // dd($request);
        $aproval_1 = Approval::where('id_user',1)->where('kd_step', $kode)->first();
        $aproval_2 = Approval::where('id_user',2)->where('kd_step', $kode)->first();
        $aproval_3 = Approval::where('id_user',3)->where('kd_step', $kode)->first();
        $pesanan = ModelStep1::where('kd_step4', $kode)
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->join('tbl_part', 'tbl_step1.kategori_harga', '=', 'tbl_part.kd_part')
            ->join('user_order', 'user_order.kd_order', '=', 'tbl_step1.kd_step2')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*','tbl_part.harga','user_order.*')
            ->first();
        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_logo.*', 'tbl_harga.*')
            ->get();
        
        foreach ($harga as $h){
            $price = $h;
        }
        
            // dd($pesanan->status_order);
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
            $pdf = new Dompdf();
            $options = new Options();
            $options->set(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->setChroot('');
            $pdf->setOptions($options);

            // Load Bootstrap CSS locally
            $bootstrapCSS = file_get_contents('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'); // Ganti path sesuai dengan lokasi CSS Bootstrap Anda
            $html = FacadesView::make('landing_page.production-generate', [
                'pesanan' => $pesanan,
                'price' => $price,
                'Jarsey' => $Jarsey,
                'kode' => $kode, 
                'aproval_1' => $aproval_1,
                'aproval_2' => $aproval_2,
                'aproval_3' => $aproval_3,
            ])->render();
            $srcImg= "{{public_path('/asset/images/logo-dark.png')}}";


            // Combine Bootstrap CSS with your HTML
            $combinedHtml = '<style> html *{margin:0;padding:0;}.button.back{display:none;}.print{
                display:none;}.container{margin:0!important;} .card{width:650px!important;border:none!important}
                .table-responsive table thead tr th, .table-responsive table tbody tr td, .table-responsive table tfoot tr td{border-color: #3c3f44;}'
                . $bootstrapCSS.'<style>' . $html;

            $pdf->loadHtml($combinedHtml);
            $pdf->setPaper('A4', 'lanscape');
            $pdf->render();

            // return $pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('reports.invoiceSell')->stream();
            return $pdf->stream('production.pdf');
            
            // return view('landing_page.production-generate', [
            //     'pesanan' => $pesanan,
            //     'price' => $price,
            //     'Jarsey' => $Jarsey,
            //     'kode' => $kode, 
            //     'aproval_1' => $aproval_1,
            //     'aproval_2' => $aproval_2,
            //     'aproval_3' => $aproval_3,
            // ]);
        
    }
    
    public function progress_edit($request)
    {
        $kode = $request;
        // dd($request);
        
        $data = ModelStep1::where('kd_step4', $kode)
            ->join('tbl_step2', 'tbl_step1.kd_step2', '=', 'tbl_step2.kd_step2')
            ->join('tbl_step3', 'tbl_step1.kd_step3', '=', 'tbl_step3.kd_step3')
            ->join('tbl_part', 'tbl_step1.kategori_harga', '=', 'tbl_part.kd_part')
            ->join('user_order', 'user_order.kd_order', '=', 'tbl_step1.kd_step2')
            ->select('tbl_step1.*', 'tbl_step2.*', 'tbl_step3.*','tbl_part.harga','user_order.*')
            ->get();
        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_logo.*', 'tbl_harga.*')
            ->get();

           
        
        foreach ($harga as $h){
            $price = $h;
        }
        foreach ($data as $pesanan) {
            $progress = ProgressProduction::where('kd_step', $request)->first();
            // dd($pesanan->status_order);
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
            return view('landing_page.progress', [
                'pesanan' => $pesanan,
                'price' => $price,
                'Jarsey' => $Jarsey,
                'kode' => $kode, 
                'progress' => $progress, 
                
            ]);
        }
    }

    public function production_design_update(Request $request){

        //return $request;
        $kode = $request->idForm2; 
        $data_quotation_order = [];
        if($request->kerah_kancing != null){
            $data_quotation_order += ['kerah_kancing' => $request->kerah_kancing];
        }
        if($request->bb_melengkung != null){
            $data_quotation_order += ['bb_melengkung' => $request->bb_melengkung];
        }
        if($request->lengan_raglan != null){
            $data_quotation_order += ['lengan_raglan' => $request->lengan_raglan];
        }
        if($request->lengan_panjang != null){
            $data_quotation_order += ['lengan_panjang' => $request->lengan_panjang];
        }
        if(count($data_quotation_order) > 0){
            //return $data_quotation_order;

            DB::table('tbl_quotation_order')->where('kd_step', $kode)->update($data_quotation_order);
        }
        
        
        $data_step3 = [];
        if($request->model_kerah != null){
            $data_step3 += ['model_kerah' => $request->model_kerah];
        }
        if($request->bb != null){
            $data_step3 += ['bahan_baju' => $request->bb];
        }
        if($request->bc != null){
            $data_step3 += ['bahan_celana' => $request->bc];
        }

        if(count($data_step3) > 0){

            DB::table('tbl_step3')->where('kd_step3', $kode)->update($data_step3);
        }

        if($request->note != null){
            DB::table('user_order')->where('kd_order', $kode)->update(['note_order' => $request->note]);
        }
        
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
        $data = [];
        if ($djp == null) {
            $file1Name = '-';
        } else {
            $file1Name = $kode . '_Design-Pemain_' .time(). '.' . $djp->extension();
            $djp->move('uploads', $file1Name);
            $data += ['design_jersey_pemain' => $file1Name];
        }
        // ===========================
        $djk = $request->file('djk');
        if ($djk == null) {
            $file2Name = '-';
        } else {
            $file2Name = $kode . '_Design-Kiper_' .time().'.' . $djk->extension();
            $djk->move('uploads', $file2Name);
            $data += ['design_jersey_kiper' => $file2Name];
        }
        // ===========================
        $lt = $request->file('lt');
        if ($lt == null) {
            $file3Name = '-';
        } else {
            $file3Name = $kode . '_Logo-Tim_' .time().'.' . $lt->extension();
            $lt->move('uploads', $file3Name);
            $data += ['logo_tim' => $file3Name];
        }
        // ===========================
        $sdd = $request->file('sdt');
        if ($sdd == null) {
            $file4Name = '-';
        } else {
            $file4Name = $kode . '-Sponsor-Dada-1baris_' .time(). '.' . $sdd->extension();
            $sdd->move('uploads', $file4Name);
            $data += ['sponsor_dada_tulisan1baris' => $file4Name];
        }
        // =========================== 
        $sd = $request->file('sdl');
        if ($sd == null) {
            $file5Name = '-';
        } else {
            $file5Name = $kode . '_Sponsor-Dada-Logo_' .time(). '.' . $sd->extension();
            $sd->move('uploads', $file5Name);
            $data += ['sponsor_dada_logodantulisan' => $file5Name];
        }
        // =========================== 
        $t1b = $request->file('t1b');
        if ($t1b == null) {
            $file6Name = '-';
        } else {
            $file6Name = $kode . '_Sponsor-Dada-t1b_' .time(). '.' . $t1b->extension();
            $t1b->move('uploads', $file6Name);
            $data += ['extra_tulisan1baris' => $file6Name];
        }
        // ===========================
        $ltt = $request->file('ldt');
        if ($ltt == null) {
            $file7Name = '-';
        } else {
            $file7Name = $kode . '_Sponsor-Dada-Logo-Tulisan_' .time(). '.' . $ltt->extension();
            $ltt->move('uploads', $file7Name);
            $data += ['extra_logodantulisan' => $file7Name];
        }
        // ===========================
        $lk = $request->file('lk');
        if ($lk == null) {
            $file8Name = '-';
        } else {
            $file8Name = $kode . '_Logo-Lengan-R_' .time(). '.' . $lk->extension();
            $lk->move('uploads', $file8Name);
            $data += ['logo_dilengan_kanan' => $file8Name];
        }
        // ===========================
        $llk = $request->file('llk');
        if ($llk == null) {
            $file9Name = '-';
        } else {
            $file9Name = $kode . '-Logo-Lengan-LR_' .time(). '.' . $llk->extension();
            $llk->move('uploads', $file9Name);
            $data += ['logo_dilengan_kiri' => $file9Name];
        }
        // ===========================
        $sbt = $request->file('sbt');
        if ($sbt == null) {
            $file10Name = '-';
        } else {
            $file10Name = $kode . '_Sponsor-Belakang-t1b_' .time(). '.' . $sbt->extension();
            $sbt->move('uploads', $file10Name);
            $data += ['sponsor_belakang_tulisan1baris' => $file10Name];
        }
        // ===========================
        $sblt = $request->file('sbl');
        if ($sblt == null) {
            $file11Name = '-';
        } else {
            $file11Name = $kode . '_Sponsor-Belakang-Logo_' .time(). '.' . $sblt->extension();
            $sblt->move('uploads', $file11Name);
            $data += ['sponsor_belakang_logodantulisan' => $file11Name];
        }
        // ===========================
        // dd($file1Name,$file2Name,$file3Name,$file4Name,$file5Name,$file6Name,$file7Name,$file8Name,$file9Name,$file10Name,$file11Name);


        // dd($file1Name,$file2Name); 
        //return $data;
        // ->update([ 
        //     'design_jersey_pemain' => $file1Name,
        //     'design_jersey_kiper' => $file2Name,
        //     'logo_tim' => $file3Name,
        //     'sponsor_dada_tulisan1baris' => $file4Name,
        //     'sponsor_dada_logodantulisan' => $file5Name,
        //     'extra_tulisan1baris' => $file6Name,
        //     'extra_logodantulisan' => $file7Name,
        //     'logo_dilengan_kanan' => $file8Name,
        //     'logo_dilengan_kiri' => $file9Name,
        //     'sponsor_belakang_tulisan1baris' => $file10Name,
        //     'sponsor_belakang_logodantulisan' => $file11Name,
        // ]);
        // $datas = ModeStep2::where('kd_step2', $kode )
        // ->update($data);
        if(count($data) > 0){


           // return $data;

            $datas = DB::table('tbl_step2')
            ->where('kd_step2', $kode)
            ->update($data);
        }
    
        // Lakukan operasi lain jika diperlukan
        // dd($file1,$file2);
       

            return redirect('production/design/'.$kode)->with('success', 'Files successfully uploaded.');
    }
    public function production_design($request)
    {
        
        $kode = $request;

        $data = DB::table('tbl_step1')
            ->join('tbl_step2', 'tbl_step2.kd_step2', '=', 'tbl_step1.kd_step2')
            ->join('tbl_step3', 'tbl_step3.kd_step3', '=', 'tbl_step1.kd_step2')
            ->join('user_order', 'user_order.kd_order', '=', 'tbl_step1.kd_step2')
            ->join('tbl_quotation_order', 'tbl_quotation_order.kd_step', '=', 'tbl_step1.kd_step2')
            ->where('tbl_step1.kd_step2', $kode)
            ->select('tbl_step1.*', 'tbl_step2.*','tbl_step3.*','user_order.*', 'tbl_quotation_order.*')
            ->first();

    
            // Loop through each item in $pesanan to get kategori_harga
        
                // Assign kategori_harga from each item to $kd_part
                $kd_part = $data->kategori_harga;
            

        
            $Step4 = ModelStep4::where('kd_step1', $kode)
            ->orderByRaw("FIELD(ukuran, 'S', 'M', 'L', 'XL', 'XXL', 'XXXL')") // Sesuaikan dengan ukuran yang sesuai 
            ->get();
        
        $part = DB::table('tbl_part')->where('kd_part', $kd_part)->get();

         
            return view('landing_page.productionStep2', [
                'dataStep4' => $Step4,
                'data' =>$data,
                'pesanan' => $part,
                'kode' => $kode, 
            ]);
        
    }
    public function update_progress(Request $request){
        $validator = Validator::make($request->all(), [
            'shiping_payment' => 'required_if:is_shipping_payment,true',
            'final_concept' => 'required_if:is_final_concept,true|file',
            'order_quantity' => 'required_if:is_order_quantity,true|file',
            'production_data' => 'required_if:is_production_data,true|file',
            'logo' => 'required_if:is_logo,true|file',
            'polifek_quality' => 'required_if:is_polifek_quality,true|file',
            'stitching_neatness' => 'required_if:is_stitching_neatness,true|file',
            'packaging' => 'required_if:is_packaging,true|file',
            'delivery' => 'required_if:is_delivery,true|file',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return redirect()->back()->withErrors(['error' => $errors[0]]);
        }

    $uploads = [];

    $kd_step = $request->kd_step;
    // Proses penyimpanan file-file yang diunggah
    // Proses penyimpanan file-file yang diunggah
    foreach (['final_concept', 'order_quantity', 'production_data', 'logo', 'polifek_quality', 'stitching_neatness', 'packaging', 'delivery'] as $fileKey) {
        if ($request->hasFile($fileKey)) {
            $filename = time() . '.' . $request->file($fileKey)->getClientOriginalExtension();
            $uploads[$fileKey] = $filename;
            $request->file($fileKey)->move('uploads', $filename);

            // Simpan nama file di dalam database
            DB::table('progress_productions')
                ->where('kd_step', $kd_step)
                ->update([$fileKey => $filename]);
        }
    }



    // Ambil data yang sudah ada di database
    $existingData = DB::table('progress_productions')->where('kd_step', $kd_step)->first();

    // Data yang akan disimpan ke database
    $dataToSave = [
        'is_shipping_payment' => $request->has('is_shipping_payment') ? true : false,
        'shipping_payment' => $request->biaya_pengiriman,
        'is_final_concept' => $request->has('is_final_concept') ? true : false,
        'is_order_quantity' => $request->has('is_order_quantity') ? true : false,
        'is_production_data' => $request->has('is_production_data') ? true : false,
        'is_polifek_quality' => $request->has('is_polifek_quality') ? true : false,
        'is_stitching_neatness' => $request->has('is_stitching_neatness') ? true : false,
        'is_logo' => $request->has('is_logo') ? true : false,
        'is_packaging' => $request->has('is_packaging') ? true : false,
        'is_delivery' => $request->has('is_delivery') ? true : false,
    ];

    // Set data file yang diunggah
    foreach ($uploads as $key => $filename) {
        $dataToSave[$key] = $filename;
    }

    // Update data di database jika ada data yang diunggah
   
        DB::table('progress_productions')->where('kd_step', $kd_step)->update($dataToSave);
    

    return redirect()->back();


    }
    public function approval_action(Request $request)
    {
        $kode = $request->kd_step;
        
        // Update the records in the database
        DB::table('user_order')
            ->where('kd_order', $kode)
            ->update(['status_order' => 'produksi']);
        

        // Redirect back to the same route
        return redirect()->back();
    }

    public function finance(Request $request)

    {
        $finance = new Finance();
        $financeData = $finance->all();
        
        $row =  $finance->select('transaction_date', DB::raw('sum(nominal) as nominal'))->groupBy('transaction_date')->where('type', 'debit')->get();
        $omset = $finance->select(DB::raw('SUM(nominal) as omset'))->where('type', 'debit')->get()->value('omset');
        
        $expense = $finance->select(DB::raw('SUM(nominal) as expense'))->where('type', 'credit')->get()->value('expense');
        $order = $finance->select(DB::raw('count(id) as order_total'))->where('status', 'order')->get()->value('order_total');
        $saldo = $omset - $expense;
        $grossProfit = $omset - $finance->select(DB::raw('SUM(nominal) as expense'))
            ->where('type', 'credit')
            ->where('status', 'belanja')
            ->get()->value('expense');
        $netProfit = $saldo;
            // Gross Profit Margin
            
            $grossProfitMargin = ($grossProfit / (($omset == null || $omset == 0)?1:$omset)) * 100;

            // Net Profit Margin
            $netProfitMargin = ($netProfit / (($omset == null || $omset == 0)?1:$omset)) * 100;
        

            $current_ratio = (($omset == null || $omset == 0)?0:$omset) / (($expense == null || $expense == 0)?1:$expense);
            $target = TargetOmset::select(DB::raw('SUM(nominal) as target'))->get()->value('target');
            $target_omset = TargetOmset::get();
            $hutang = $finance->select(DB::raw('SUM(nominal) as hutang'))->where('money_status', 'hutang')->get()->value('hutang');
            $piutang = $finance->select(DB::raw('SUM(nominal) as hutang'))->where('money_status', 'piutang')->get()->value('piutang');
        
       

        if($request->date != null){
            $montYear = explode('-',$request->date);
            $month = $montYear[1];
            $year = $montYear[0];
            
            $row =  $finance->select('transaction_date', DB::raw('sum(nominal) as nominal'))->whereYear('transaction_date', $year)->whereMonth('transaction_date', $month)->where('type', 'debit')->groupBy('transaction_date')->get();
            
            $omset = $finance->select(DB::raw('SUM(nominal) as omset'))->whereYear('transaction_date', $year)->whereMonth('transaction_date', $month)->where('type', 'debit')->get()->value('omset');
            
            $expense = $finance->select(DB::raw('SUM(nominal) as expense'))->whereYear('transaction_date', $year)->whereMonth('transaction_date', $month)->where('type', 'credit')->get()->value('expense');
            
            $order = $finance->select(DB::raw('count(id) as order_total'))->whereYear('transaction_date', $year)->whereMonth('transaction_date', $month)->where('status', 'order')->get()->value('order_total');
            $saldo = $omset-$expense;

            $grossProfit = $omset - $finance->select(DB::raw('SUM(nominal) as expense'))
            ->whereYear('transaction_date', $year)
            ->whereMonth('transaction_date', $month)
            ->where('type', 'credit')
            ->get()->value('expense');

            $netProfit = $saldo;
            // Gross Profit Margin
            $grossProfitMargin = ($grossProfit / (($omset == null || $omset == 0)?1:$omset)) * 100;

            // Net Profit Margin
            $netProfitMargin = ($netProfit / (($omset == null || $omset == 0)?1:$omset)) * 100;
        

            $current_ratio = (($omset == null || $omset == 0)?0:$omset) / (($expense == null || $expense == 0)?1:$expense);
            $target = TargetOmset::select(DB::raw('SUM(nominal) as target'))
            ->whereYear('target_date', $year)
            ->whereMonth('target_date', $month)
            ->get()->value('target');
            $hutang = $finance->select(DB::raw('SUM(nominal) as hutang'))
            ->whereYear('transaction_date', $year)
            ->whereMonth('transaction_date', $month)
            ->where('money_status', 'hutang')->get()->value('hutang');
            $piutang = $finance->select(DB::raw('SUM(nominal) as hutang'))
            ->whereYear('transaction_date', $year)
            ->whereMonth('transaction_date', $month)
            ->where('money_status', 'piutang')->get()->value('piutang');
        }
        if($order== null){
            $order = 0;
        }
        $data = [];
        $data_bulan = [];
        
        if($row != null){
            foreach($row as  $dt){
                $data_bulan[] = $dt['transaction_date'];


                $data[] = $dt['nominal'];
            }
        }

        //$data = [860,1140,1060,1060,1070,1110,1330,2210,7830,2478];
        return view('auth.finance', [
            'pages' => "Finance",
            'data' => $data,
            'data_bulan' => $data_bulan,
            'omset' => $omset,
            'saldo' => $saldo,
            'expense' => $expense,
            'order' => $order,
            'gross_profit' => $grossProfitMargin,
            'net_profit' => $netProfitMargin,
            'order' => $order,
            'current_ratio' => $current_ratio,
            'financeData' => $financeData,
            'target' => $target,
            'target_omset' => $target_omset,
            'hutang' => $hutang,
            'piutang' => $piutang,


        ]);
    }
    public function financeAdd(Request $request)
    {
        $finance = new Finance();
        $finance->transaction_date = $request->date;
        $finance->type = $request->type;
        $finance->transactions = $request->transaksi;
        $finance->status = $request->kategori_transaksi;
        $finance->note = $request->note;
        $finance->nominal = $request->nominal;
        $finance->money_status = $request->status_uang;
        $finance->save();
        return redirect()->back();

    }
    public function financeTargetAdd(Request $request)
    {
        $target = new TargetOmset();
        $target->target_date = $request->date;
        $target->nominal = $request->nominal;
        $target->save();
        return redirect()->back();

    }

    public function master()
    {
        $harga = DB::table('tbl_harga')
            ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
            ->select('tbl_harga.*', 'tbl_logo.*')
            ->get();
        foreach ($harga as $data) {


            return view('auth.master', [
                'pages' => "master",
                'data' => $data,

            ]);
        }
    }

    public function updateHargaBahan(Request $request)
    {
        $badan_bm = $request->badan_bm;
        $u_logo3d = $request->u_logo3d;
        $pola_lr = $request->pola_lr;
        $l_timdicelana = $request->l_timdicelana;
        $l_panjang = $request->l_panjang;
        $s_2xl = $request->s_2xl;
        $s_3xl = $request->s_3xl;
        $s_4xl = $request->s_4xl;
        $pb_normal = $request->pb_normal;
        $p_badan_m = $request->p_badan_m;
        $pl_normal = $request->pl_normal;
        $p_lenganraglan = $request->p_lenganraglan;
        $kerah_custom = $request->kerah_custom;

        $insert = DB::table('tbl_harga')
            ->update([
                'badan_bm' => $badan_bm,
                'u_logo3d' => $u_logo3d,
                'pola_lr' => $pola_lr,
                'l_timdicelana' => $l_timdicelana,
                'l_panjang' => $l_panjang,
                's_2xl' => $s_2xl,
                's_3xl' => $s_3xl,
                's_4xl' => $s_4xl,
                'pb_normal' => $pb_normal,
                'p_badan_m' => $p_badan_m,
                'pl_normal' => $pl_normal,
                'p_lenganraglan' => $p_lenganraglan,
                'kerah_custom' => $kerah_custom,

            ]);
        return redirect()->back()->with('success', 'Price Bahan updated successfully');
    }
    public function updateHargaLogo(Request $request)
    {
        $dtf = $request->dtf;
        $extra_ltim = $request->extra_ltim;
        $d_tpu = $request->d_tpu;
        $d_rubber = $request->d_rubber;
        $rubber_ot = $request->rubber_ot;
        $s_hd = $request->s_hd;
        $w_hd = $request->w_hd;
        $w_lokal = $request->w_lokal;
        $printing = $request->printing;
        $tulisan_1baris = $request->tulisan_1baris;
        $extra_1baris = $request->extra_1baris;
        $logo_1warna = $request->logo_1warna;
        $extra__1warna = $request->extra__1warna;
        $e_logodtf = $request->e_logodtf;
        $e_tulisan1baris = $request->e_tulisan1baris;

        $insert = DB::table('tbl_logo')
            ->update([
                'dtf'   => $dtf,
                'extra_ltim' => $extra_ltim,
                'd_tpu'  => $d_tpu,
                'd_rubber'  => $d_rubber,
                'rubber_ot'  => $rubber_ot,
                's_hd'  => $s_hd,
                'w_hd'  => $w_hd,
                'w_lokal'  => $w_lokal,
                'printing'  => $printing,
                'tulisan_1baris'  => $tulisan_1baris,
                'extra_1baris'  => $extra_1baris,
                'logo_1warna'  => $logo_1warna,
                'extra__1warna'  => $extra__1warna,
                'e_logodtf'  => $e_logodtf,
                'e_tulisan1baris'  => $e_tulisan1baris,
            ]);

        return redirect()->back()->with('success', 'Price Logo updated successfully');
    }
    public function destroyInvoice($id)
    {
        DB::table('tbl_step1')->where('kd_step2', $id)->delete();
        DB::table('tbl_step2')->where('kd_step2', $id)->delete();
        DB::table('tbl_step3')->where('kd_step3', $id)->delete();
        DB::table('tbl_step4')->where('kd_step1', $id)->delete();
        DB::table('user_order')->where('kd_step2', $id)->delete();

        return redirect()->back()->with('success', 'Data has been deleted successfully');
    }
    public function destroyQuo($id)
    {
        DB::table('tbl_quotation_order')->where('kd_quotation', $id)->delete();
        DB::table('tbl_quotation')->where('kd_quotation', $id)->delete();

        return redirect()->back()->with('success', 'Data has been deleted successfully');
    }





    public function landingpage(Request $request){
        $link_web_1 = LinkWeb::whereHas('media', function ($query) {
            $query->where('media_type_of', 'icon_link_section_1');
        })->get();
        $link_web_2 = LinkWeb::whereHas('media', function ($query) {
            $query->where('media_type_of', 'icon_link_section_2');
        })->get();
        $about_us = new AboutUs();
        $media = new Media();
        $faq = Faq::get();
        $faq_edit = null;
        $step_edit = null;
        if(isset($request->faq_edit)){

            $faq_edit = Faq::find($request->id);
            //return $faq_edit;
            
            
        }
        if(isset($request->step_edit)){

            $step_edit = OrderStep::find($request->id);
            //return $faq_edit;
            
            
        }
        if(isset($request->save_faq)){
            $faq_edit = Faq::find($request->id);
            $faq_edit->question = $request->question;
            $faq_edit->answer = $request->answer;
            $faq_edit->save();
            return redirect()->route('admin.landingpage')->with('success', 'berhasil edit data');
        }
        if(isset($request->save_step)){
            $step_edit = OrderStep::find($request->id);
            $step_edit->name = $request->name;
            $step_edit->icon = $request->icon;
            $step_edit->description = $request->description;
            $step_edit->save();
            return redirect()->route('admin.landingpage')->with('success', 'berhasil edit data');
        }
        $row = $about_us->get()->first();
        $location = Location::get()->first();
        $about_us_media = $media->where('media_type_of', 'carousel_about_us')->get(); 
        $header_banner_media = $media->where('media_type_of', 'header_banner')->get(); 
        $logo_media = $media->where('media_type_of', 'logo')->get(); 
        $order_step = OrderStep::get();
        $location_carousel = $media->where('media_type_of', 'location_carousel')->get(); 
        $client_carousel = $media->where('media_type_of', 'client')->get(); 
        $footer_image = $media->where('media_type_of', 'footer_image')->get(); 
        return View('admin.landingpage', [
            'pages' => 'Landing Page', 
            'about_us' => $row,
            'about_us_media' => $about_us_media,
            'header_banner_media' => $header_banner_media,
            'logo' => $logo_media,
            'order_step' => $order_step,
            'faq'=> $faq,
            'location_carousel' => $location_carousel,
            'client_carousel' => $client_carousel,
            'location' => $location,
            'link_web_section_1' => $link_web_1,
            'link_web_section_2' => $link_web_2,
            'footer_image' => $footer_image,
            'faq_edit' => $faq_edit,
            'step_edit' => $step_edit,
        ]);
    }
    public function landingpage_about_us(Request $input){
        $name = $input->name;
        $tagline = $input->tagline;
        $description = $input->description;

        $about_us = new AboutUs();
        $row = $about_us->get()->first();
        $row->name = $name;
        $row->tagline = $tagline;
        $row->description = $description;
        $row->save();

        return redirect()->back()->with('success', 'berhasil add data');
    }
    public function landingpage_location_add(Request $input){
        $name = $input->name;
        $address = $input->address;
        $maps = $input->iframe;

        $location = new Location();
        $row = $location->get()->first();
        if($row == null){
            $location->name = $name;
            $location->address = $address;
            $location->iframe_maps = $maps;
            $location->save();
        }else{

            $row->name = $name;
            $row->address = $address;
            $row->iframe_maps = $maps;
            $row->save();
        }

        return redirect()->back()->with('success', 'berhasil add data');
    }
    public function landingpage_media_upload(Request $input){
        $filename = time().'.'.$input->file('file')->getClientOriginalExtension();
        $type = null;
        $media_type = $input->media_type_of;
        if (str_starts_with($input->file('file')->getMimeType(), 'image')) {
            // File adalah gambar
            // Proses gambar di sini
            $type = 'image';
        } else {
            // File bukan gambar atau video
            return redirect()->back()->with('error', 'File harus berupa gambar');
        }

        $about_us = new Media();
        $about_us->filename = $filename;
        $about_us->alt = $filename;
        $about_us->type = $type;
        $about_us->media_type_of = $media_type;
        $about_us->save();
        $input->file('file')->move('uploads', $filename);



        return redirect()->back()->with('success', 'berhasil upload data');
    }
    public function landingpage_linkweb_add(Request $input){
        $filename = time().'.'.$input->file('file')->getClientOriginalExtension();
        $type = null;
        $media_type = $input->media_type_of;
        if (str_starts_with($input->file('file')->getMimeType(), 'image')) {
            // File adalah gambar
            // Proses gambar di sini
            $type = 'image';
        } elseif (str_starts_with($input->file('file')->getMimeType(), 'video')) {
            // File adalah video
            // Proses video di sini
            $type = 'video';
        } else {
            // File bukan gambar atau video
            return redirect()->back()->with('error', 'File harus berupa gambar atau video.');
        }

        $media = new Media();
        $media->filename = $filename;
        $media->alt = $filename;
        $media->type = $type;
        $media->media_type_of = $media_type;
        $media->save();
        $input->file('file')->move('uploads', $filename);

        $linkWeb = new LinkWeb();
        $linkWeb->link = $input->link;
        $linkWeb->name = $input->name;
        $linkWeb->id_media = $media->id; 
        $linkWeb->save();



        return redirect()->back()->with('success', 'berhasil add data');
    }
    
    public function landingpage_linkweb_delete($id){
        $linkWeb = LinkWeb::find($id);
        if(!$linkWeb){
            return redirect()->back()->with('error', 'data tidak ditemukan.');
        }
            $linkWeb->delete();
            $media = Media::find($linkWeb->id_media);

            if (File::exists(public_path("/uploads/$media->filename"))) {
                // Hapus file dari direktori public
                File::delete(public_path("/uploads/$media->filename"));
                $media->delete();
                return redirect()->back()->with('success', 'berhasil delete data');
            } else {
                return redirect()->back()->with('error', 'gagal delete data');
        }
    }
    public function landingpage_file_delete($id){
        $media = Media::find($id);
        if(!$media){
            return redirect()->back()->with('error', 'data tidak ditemukan.');
        }
        if (File::exists(public_path("/uploads/$media->filename"))) {
            // Hapus file dari direktori public
            File::delete(public_path("/uploads/$media->filename"));
            $media->delete();
            return redirect()->back()->with('success', 'berhasil delete data');
        } else {
            return redirect()->back()->with('error', 'gagal delete data');
        }
    }
    public function  landingpage_how_to_order_add(Request $input){
        $order_step = new OrderStep;
        $order_step->name = $input->name;
        $order_step->icon = $input->icon;
        $order_step->description = $input->description;
        $order_step->save();
        return redirect()->back()->with('success', 'berhasil add data');
    }
    public function landingpage_faq_add(Request $input){
        $faq = new Faq();
        $faq->question = $input->question;
        $faq->answer = $input->answer;
        $faq->save();
        return redirect()->back()->with('success', 'berhasil add data');
    }
    public function importExcel(Request $request)
    {
        $file = $request->file('import');



        Excel::import(new FinanceImport, $file);

        return redirect()->back()->with('success', 'Data berhasil diimpor.');
    }

}
