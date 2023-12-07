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
        $jsonData = [
            'menu1' => [
                'non-print' => "TYPE KUALITAS : STADIUM Version
                Kategori : Non - Print
                Harga : IDR 149,900 / pcs
                Minimum Order : 12 pcs
                
                Deksripsi:
                - Bahan warna solid non-printing
                  (bisa kombinasi warna)
                - Logo R polyflex
                - Logo tim Printable / DTF
                - FREE tulisan dada 1 baris
                - Authentic R DTF
                - Name + number polyflex
                - Bahan Celana solid
                - Nomor celana polyflex\n.",
                
                'half-print' => "TYPE KUALITAS : STADIUM Version
                Kategori : Half - Print
                Harga : IDR 174,900 / pcs
                Minimum Order : 12 pcs
                
                Deksripsi:
                - Badan depan motif printing
                - Lengan dan badan belakang bahan solid
                - Logo dan sponsor depan printing
                - Logo tim printing/ DTF
                - Authentic R DTF
                - Name + number polyflex
                - Bahan Celana solid
                - Nomor celana polyflex\n",
               
                'full-print' => "TYPE KUALITAS : STADIUM Version
                Kategori : Full - Print
                Harga : IDR 199,900 / pcs
                Minimum Order : 12 pcs
                
                Deksripsi:
                - Badan depan, belakang, dan tangan motif printing
                - Logo R printing / polyflex
                - Logo tim printing / DTF
                - Sponsor set printing
                - Authentic R DTF
                - Name + number printing
                - Bahan Celana solid
                - Nomor celana polyflex\n",
                
                'pro' =>  "TYPE KUALITAS : PRO Version
                Harga : IDR 299,900 / pcs
                Minimum Order : 24 pcs
                
                Deksripsi:
                - Bahan : VAPORKNIT
                  (jacquard fabric)
                - Badan depan, belakang, dan
                  tangan motif printing
                - Logo R 3D Screen print
                - Logo tim 3D TPU
                  (>50 pcs 3D rubber)
                - Authentic R 3D Screen print
                - Sponsor set depan printing
                - Name + number bisa printing
                - Bahan Celana solid
                - Nomor celana polyflex
                - FREE nama tim di celana\n",
                
                'pro-plus' => "TYPE KUALITAS : PRO+ Version
                Harga : IDR 399,900 / pcs
                Minimum Order : 24 pcs
                
                Deksripsi:
                - Bahan : MOVINGKNIT
                  (single knit jacquard tech)
                - Badan depan, belakang, dan
                  tangan motif printing
                - Logo R 3D Shape
                - Logo tim 3D Rubber
                  (>50 pcs 3D rubber on tatami)
                - Premium authentic R
                  (3D Rubber on tatami)
                - Fitur LASER-CUT air circulation - Sponsor set depan printing
                - Name + number bisa printing /
                  polyflex 1 layer warna
                - Bahan Celana solid
                - Nomor celana polyflex
                - FREE nama tim di celana
                - FREE logo tim 3D di celana\n",
            ],
            // Tambahkan data untuk menu lainnya
        ];
        // dd($jsonData);
        // dd($jsonData['menu1']['desc-1']);
        $data = DB::table('tbl_part')->where('kd_part', $kd_part)->get();
        // dd($data);
        foreach ($data as $key) {
            return view ('landing_page.part-pricelist',[
                'data' =>$key,
                'jsonData' => $jsonData,
            ]);

        }

    }
}
