<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function a()
    {
        $jsonData = [
            'menu1' => [
                'g1' => 'asset/images/price-list/detail/Nonprint-1.jpg',
                'g2' => 'asset/images/price-list/detail/Nonprint-2.jpg',
                'g3' => 'asset/images/price-list/detail/Nonprint-3.jpg',
                'g4' => 'asset/images/price-list/detail/Nonprint-4.jpg',
                'g5' => 'asset/images/price-list/detail/Nonprint-5.jpg',
                'g6' => 'asset/images/price-list/detail/Nonprint-6.jpg',
                'g7' => 'asset/images/price-list/detail/Nonprint-7.jpg',
                'g8' => 'asset/images/price-list/detail/Nonprint-8.jpg',
                'content' => 'Ini adalah konten untuk Menu 1.'
            ],
            
            'menu2' => [
                'g1' => 'Menu 1',
                'content' => 'Ini adalah konten untuk Menu 1.'
            ],
            // Tambahkan data untuk menu lainnya
        ];

        // Mengembalikan view dan meneruskan data JSON

        // return view('data-view', compact('jsonData'));
        return view('landing_page.part-pricelist', compact('jsonData'));

    }
    public function priceList($kd_part){
        $data = DB::table('tbl_part')->where('kd_part', $kd_part)->get();
        // dd($data);
        foreach ($data as $key) {
            return view ('landing_page.part-pricelist',[
                'data' =>$key,
            ]);

        }

    }
}
