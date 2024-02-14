<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\ModelStep1;
use App\Models\pemesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ->select('tbl_step1.*','user_order.*')
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
    public function production_edit($request)
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
            ]);
        }
    }

    public function production_design($request)
    {
        
        $kode = $request;

        $data = DB::table('tbl_step1')
            ->join('tbl_step2', 'tbl_step2.kd_step2', '=', 'tbl_step1.kd_step2')
            ->join('tbl_step3', 'tbl_step3.kd_step3', '=', 'tbl_step1.kd_step2')
            ->join('user_order', 'user_order.kd_order', '=', 'tbl_step1.kd_step2')
            ->where('tbl_step1.kd_step2', $kode)
            ->select('tbl_step1.*', 'tbl_step2.*','tbl_step3.*','user_order.*')
            ->get();

            // Loop through each item in $pesanan to get kategori_harga
            foreach ($data as $item) {
                // Assign kategori_harga from each item to $kd_part
                $kd_part = $item->kategori_harga;
            }

        
        $part = DB::table('tbl_part')->where('kd_part', $kd_part)->get();

        foreach ($data as $key) { 
            return view('landing_page.productionStep2', [
                'data' =>$key,
                'pesanan' => $part,
                'kode' => $kode, 
            ]);
        }
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

    public function finance()
    {
        $data = DB::table('tbl_step1')
            ->select('*')
            ->get();
        return view('auth.finance', [
            'pages' => "Finance",
            'order' => $data,


        ]);
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
}
