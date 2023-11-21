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
}
