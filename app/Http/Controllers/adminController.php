<?php

namespace App\Http\Controllers;

use App\Models\ModelStep1;
use App\Models\pemesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function dashboard()
    {
        $data = DB::table('tbl_step1')->orderBy('created_at', 'asc')->take(30)->get();
        return view('auth.dashboard', [
            'pages' => "Dashboard",
            'data' => $data,

        ]);
    }
    public function vieworder()
    {
        $data = DB::table('tbl_step1')
            ->select('*')
            ->get();
        // dd($data); 
        return view('auth.tables', [
            'pages' => "View Order",
            'order' => $data,
        ]);
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
}
