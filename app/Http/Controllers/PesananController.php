<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function form_1(Request $request)
    {
        return view('landing_page.form-order');
    }
    public function form_2(Request $request)
    {
        return view('landing_page.form-2');
    }
    public function form_3(Request $request)
    {
        return view('landing_page.form-3');
    }
    public function form_4(Request $request)
    {
        $data = DB::table('tbl_data_pesanan')->get('*');


        return view('landing_page.form-4', [
            'pesanan' => $data,
        ]);
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
