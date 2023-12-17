<?php

namespace App\Http\Controllers;

use App\Models\pemesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function dashboard()
    {
        return view('auth.dashboard',[
            'pages' => "Dashboard"
        ]);
    }
    public function vieworder()
    {
        $data = DB::table('tbl_pemesanan')
        ->select('*')
        ->get();
        // dd($data);
        foreach ($data as $pemesanan){
            return view('auth.tables',[
                'pages' => "View Order",
                'order' => $pemesanan,
            ]);

        }
        
    }
    public function finance()
    {
        return view('auth.billing',[
            'pages' => "Finance"
        ]);
    }
    public function master()
    {
        $harga = DB::table('tbl_harga')
        ->join('tbl_logo', 'tbl_harga.id', '=', 'tbl_logo.id_logo')
        ->select('tbl_harga.*', 'tbl_logo.*')
        ->get();
        foreach($harga as $data){

        
        return view('auth.master',[
            'pages' => "master",
            'data' => $data,

        ]);
    }
    }
}
