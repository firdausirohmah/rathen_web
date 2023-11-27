<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function form_1(Request $request)
    {
        $data = DB::table('tbl_step1')->get('*');


        return view('landing_page.form-4', [
            'pesanan' => $data,
        ]);
    }
    public function form_2(Request $request)
    {
        $data = DB::table('step2')->get('*');


        return view('landing_page.form-4', [
            'pesanan' => $data,
        ]);
    }
    public function form_3(Request $request)
    {
        $data = DB::table('tbl_step3')->get('*');


        return view('landing_page.form-4', [
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
}
