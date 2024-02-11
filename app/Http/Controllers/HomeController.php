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
                'non-print' => "
                <h5>STADIUM Version - Non Print
                IDR 149,900 / pcs
                Minimum Order 12 pcs</h5>
                <h6 style='margin:0;color:#3884db;line-height:0'>Deksripsi:</h6>
                - Bahan RATHEN-TECH warna solid non-printing (boleh kombinasi warna bahan)
                - Logo brand RATHEN : polyflex- Logo tim : DTF
                - Authentic R : DTF
                - <span style='color:red;'>FREE</span> Sponsor dada 1 baris
                - Nameset polyflex 1 layer warna
                - Bahan Celana solid- Nomor celana : polyflex
                - <span style='color:red;'>FREE</span> : nama tim di celana\n",
                
                'half-print' => "
                <h5>STADIUM Version - Half Print
                IDR 174,900 / pcs
                Minimum Order 12 pcs</h5>
                <h6 style='margin:0;color:#3884db;line-height:0'>Deksripsi:</h6>
                - Bahan RATHEN-TECH
                - Badan depan motif printing
                - Lengan dan badan belakang bahan solid non printing
                - Logo brand RATHEN : printing
                - Logo tim : DTF / printing
                - Authentic R : DTF
                - Sponsor dada : printing
                - Nameset polyflex 1 layer warna
                - Bahan Celana solid
                - Nomor celana : polyflex
                - <span style='color:red;'>FREE</span> : nama tim di celana\n",
               
                'full-print' => "
                <h5>STADIUM Version - Full Print
                IDR 199,900 / pcs
                Minimum Order 12 pcs</h5>
                <h6 style='margin:0;color:#3884db;line-height:0'>Deksripsi:</h6>
                - Bahan RATHEN-TECH
                - Badan depan, tangan, dan belakang motif printing
                - Logo brand RATHEN : printing / polyflex
                - Logo tim : DTF / printing
                - Authentic R : DTF
                - Sponsor set logo : printing
                - Nameset : printing
                - Bahan Celana solid
                - Nomor celana : polyflex
                - <span style='color:red;'>FREE</span> : nama tim di celana\n",
                
                'pro' =>  "
                <h5>PRO Version
                IDR 299,900 / pcs
                Minimum Order 24 pcs</h5>
                <h6 style='margin:0;color:#3884db;line-height:0'>Deksripsi:</h6>
                - Bahan VAPORKNIT (jacquard technology)
                - Badan depan, belakang, dan tangan motif printing
                - Logo brand RATHEN : 3D screen print
                - Logo tim : 3D TPU (>50 pcs 3D rubber)
                - Authentic R : 3D screen print
                - Sponsor set depan printing
                - Name + number bisa printing / polyflex 1 layer warna
                - Bahan Celana solid
                - Nomor celana : polyflex
                - <span style='color:red;'>FREE</span> : nama tim di celana\n",
                
                'pro-plus' => "
                <h5>PRO+ Version
                IDR 399,900 / pcs
                Minimum Order 24 pcs</h5>
                <h6 style='margin:0;color:#3884db;line-height:0'>Deksripsi:</h6>
                - Bahan MOVINGKNIT (single-knit jacquard technology)
                - Badan depan, belakang, dan tangan motif printing
                - Logo brand RATHEN : 3D Shape
                - Logo tim : 3D Rubber (>50 pcs 3D rubber on tatami)
                - Authentic R : 3D Rubber on tatami exclusive edition
                - Fitur LASER-CUT air circulation
                - Sponsor set depan printing
                - Name + number bisa printing / polyflex 1 layer warna
                - Bahan Celana solid
                - Nomor celana : polyflex
                - <span style='color:red;'>FREE</span> : nama tim di celana
                - <span style='color:red;'>FREE</span> : logo tim 3D di celana\n",
                
                'jacket-anthem' => "
                <h5>Jacket Anthem Pro
                IDR 249,900 / pcs
                Minimum Order 12 pcs</h5>
                <h6 style='margin:0;color:#3884db;line-height:0'>Deksripsi:</h6>
                - Bahan : RATHEN-STRETCH (80% polyester, 20% spandex)
                - Logo brand RATHEN : 3D screen print / polyflex
                - Logo tim : 3D
                - Authentic R : 3D screen print
                - Tulisan : polyflex
                - Exclusive waterproof zipper\n",
            ],
            'menu2' => [
                'non-print' => 
                "
                <h6 class='card-subtitle text-black-50'>Add Cost</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Kerah pakai kancing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_kancing' name='kerah_kancing' value='10000'>
                      <label class='label_harga' class='label_harga' for='kerah_kancing'>(+10,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Badan bawah melengkung</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bb_melengkung' name='bb_melengkung' value='15000'>
                      <label class='label_harga' for='bb_lengkung'>(+15,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Lengan pola raglan</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='lengan_raglan' name='lengan_raglan' value='15000'>
                      <label class='label_harga' for='lengan_raglan'>(+15,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Lengan Panjang</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='lengan_panjang'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+30,000)</span>
                  </div>

                  <div class='title pt-3'>Big Size</div>
                  <div class='field small pt-0'>
                    <div class='title'>- Size 2XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s2xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+20,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size 3XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s3xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+35,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size >4XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s4xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana printing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='celana_printing' name='celana_printing' value='50000'>
                      <label class='label_harga' for='celana_printing'>(+50,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana panjang PRO</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='celana_pro'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+150,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kaoskaki</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='kaoskaki'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>
                </div>
                
                <h6 class='card-subtitle text-black-50 mt-4'>Upgrade Fitur</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Bahan embos</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bahan_embos' name='bahan_embos' value='20000'>
                      <label class='label_harga' for='bahan_embos'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Logo 3D</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='logo_3d' name='logo_3d' value='30000'>
                      <label class='label_harga' for='logo_3d'>(+30,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kerah elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_rib' name='kerah_rib' value='20000'>
                      <label class='label_harga' for='kerah_rib'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Ujung tangan elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='tangan_rib' name='tangan_rib' value='20000'>
                      <label class='label_harga' for='tangan_rib'>(+20,000)</label>
                    </div>
                  </div>
                  
                </div>
                ",

                
                'half-print' => 
                "
                <h6 class='card-subtitle text-black-50'>Add Cost</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Kerah pakai kancing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_kancing' name='kerah_kancing' value='10000'>
                      <label class='label_harga' class='label_harga' for='kerah_kancing'>(+10,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Badan bawah melengkung</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bb_melengkung' name='bb_melengkung' value='15000'>
                      <label class='label_harga' for='bb_lengkung'>(+15,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Lengan pola raglan</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='lengan_raglan' name='lengan_raglan' value='15000'>
                      <label class='label_harga' for='lengan_raglan'>(+15,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Lengan Panjang</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='lengan_panjang'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+30,000)</span>
                  </div>

                  <div class='title pt-3'>Big Size</div>
                  <div class='field small pt-0'>
                    <div class='title'>- Size 2XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s2xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+20,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size 3XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s3xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+35,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size >4XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s4xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana printing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='celana_printing' name='celana_printing' value='50000'>
                      <label class='label_harga' for='celana_printing'>(+50,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana panjang PRO</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='celana_pro'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+150,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kaoskaki</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='kaoskaki'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>
                </div>
                
                <h6 class='card-subtitle text-black-50 mt-4'>Upgrade Fitur</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Bahan embos</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bahan_embos' name='bahan_embos' value='20000'>
                      <label class='label_harga' for='bahan_embos'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Logo 3D</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='logo_3d' name='logo_3d' value='30000'>
                      <label class='label_harga' for='logo_3d'>(+30,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kerah elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_rib' name='kerah_rib' value='20000'>
                      <label class='label_harga' for='kerah_rib'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Ujung tangan elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='tangan_rib' name='tangan_rib' value='20000'>
                      <label class='label_harga' for='tangan_rib'>(+20,000)</label>
                    </div>
                  </div>
                  
                </div>
                ",

               
                'full-print' => 
                "
                <h6 class='card-subtitle text-black-50'>Add Cost</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Kerah pakai kancing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_kancing' name='kerah_kancing' value='10000'>
                      <label class='label_harga' class='label_harga' for='kerah_kancing'>(+10,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Badan bawah melengkung</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bb_melengkung' name='bb_melengkung' value='15000'>
                      <label class='label_harga' for='bb_lengkung'>(+15,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Lengan pola raglan</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='lengan_raglan' name='lengan_raglan' value='15000'>
                      <label class='label_harga' for='lengan_raglan'>(+15,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Lengan Panjang</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='lengan_panjang'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+30,000)</span>
                  </div>

                  <div class='title pt-3'>Big Size</div>
                  <div class='field small pt-0'>
                    <div class='title'>- Size 2XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s2xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+20,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size 3XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s3xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+35,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size >4XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s4xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana printing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='celana_printing' name='celana_printing' value='50000'>
                      <label class='label_harga' for='celana_printing'>(+50,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana panjang PRO</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='celana_pro'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+150,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kaoskaki</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='kaoskaki'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>
                </div>
                
                <h6 class='card-subtitle text-black-50 mt-4'>Upgrade Fitur</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Bahan embos</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bahan_embos' name='bahan_embos' value='20000'>
                      <label class='label_harga' for='bahan_embos'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Logo 3D</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='logo_3d' name='logo_3d' value='30000'>
                      <label class='label_harga' for='logo_3d'>(+30,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kerah elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_rib' name='kerah_rib' value='20000'>
                      <label class='label_harga' for='kerah_rib'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Ujung tangan elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='tangan_rib' name='tangan_rib' value='20000'>
                      <label class='label_harga' for='tangan_rib'>(+20,000)</label>
                    </div>
                  </div>
                  
                </div>
                ",
                

                'pro' =>  
                "
                <h6 class='card-subtitle text-black-50'>Add Cost</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Kerah pakai kancing</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='kerah_kancing' name='kerah_kancing' value='10000'>
                      <label class='label_harga' for='kerah_kancing'>(Free)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Badan bawah melengkung</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='bb_melengkung' name='bb_melengkung' value='15000'>
                      <label class='label_harga' for='bb_lengkung'>(Free)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Lengan pola raglan</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='lengan_raglan' name='lengan_raglan' value='15000'>
                      <label class='label_harga' for='lengan_raglan'>(Free)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Lengan Panjang</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='lengan_panjang'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+30,000)</span>
                  </div>

                  <div class='title pt-3'>Big Size</div>
                  <div class='field small pt-0'>
                    <div class='title'>- Size 2XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s2xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+20,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size 3XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s3xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+35,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size >4XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s4xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana printing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='celana_printing' name='celana_printing' value='50000'>
                      <label class='label_harga' for='celana_printing'>(+50,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana panjang PRO</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='celana_pro'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+150,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kaoskaki</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='kaoskaki'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>
                </div>
                
                <h6 class='card-subtitle text-black-50 mt-4'>Upgrade Fitur</h6>
                <div class='payment__shipping'>

                  <div class='field small visually-hidden'>
                    <div class='title'>Bahan embos</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bahan_embos' name='upgrade' value='20000'>
                      <label class='label_harga' for='bahan_embos'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small visually-hidden'>
                    <div class='title'>Logo 3D</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='logo_3d' name='upgrade' value='30000'>
                      <label class='label_harga' for='logo_3d'>(+30,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kerah elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_rib' name='kerah_rib' value='20000'>
                      <label class='label_harga' for='kerah_rib'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Ujung tangan elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='tangan_rib' name='tangan_rib' value='20000'>
                      <label class='label_harga' for='tangan_rib'>(+20,000)</label>
                    </div>
                  </div>
                  
                </div>
                ",
                
                'pro-plus' => 
                "
                <h6 class='card-subtitle text-black-50'>Add Cost</h6>
                <div class='payment__shipping'>

                  <div class='field small'>
                    <div class='title'>Kerah pakai kancing</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='kerah_kancing' name='kerah_kancing' value='10000'>
                      <label class='label_harga' for='kerah_kancing'>(Free)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Badan bawah melengkung</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='bb_melengkung' name='bb_melengkung' value='15000'>
                      <label class='label_harga' for='bb_lengkung'>(Free)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Lengan pola raglan</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='lengan_raglan' name='lengan_raglan' value='15000'>
                      <label class='label_harga' for='lengan_raglan'>(Free)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Lengan Panjang</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='lengan_panjang'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+30,000)</span>
                  </div>

                  <div class='title pt-3'>Big Size</div>
                  <div class='field small pt-0'>
                    <div class='title'>- Size 2XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s2xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+20,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size 3XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s3xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+35,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size >4XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s4xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana printing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='celana_printing' name='celana_printing' value='50000'>
                      <label class='label_harga' for='celana_printing'>(+50,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana panjang PRO</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='celana_pro'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+150,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kaoskaki</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='kaoskaki'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>
                </div>
                
                <h6 class='card-subtitle text-black-50 mt-4'>Upgrade Fitur</h6>
                <div class='payment__shipping'>

                  <div class='field small visually-hidden'>
                    <div class='title'>Bahan embos</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bahan_embos' name='upgrade' value='20000'>
                      <label class='label_harga' for='bahan_embos'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small visually-hidden'>
                    <div class='title'>Logo 3D</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='logo_3d' name='upgrade' value='30000'>
                      <label class='label_harga' for='logo_3d'>(+30,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kerah elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_rib' name='kerah_rib' value='20000'>
                      <label class='label_harga' for='kerah_rib'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Ujung tangan elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='tangan_rib' name='tangan_rib' value='20000'>
                      <label class='label_harga' for='tangan_rib'>(+20,000)</label>
                    </div>
                  </div>
                  
                </div>
                ",
                
                'jacket-anthem' => 
                "
                <h6 class='card-subtitle text-black-50'>Add Cost</h6>
                <div class='payment__shipping'>

                  <div class='field small visually-hidden'>
                    <div class='title'>Kerah pakai kancing</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='kerah_kancing' name='kerah_kancing' value='10000'>
                      <label class='label_harga' for='kerah_kancing'>(Free)</label>
                    </div>
                  </div>
                  <div class='field small visually-hidden'>
                    <div class='title'>Badan bawah melengkung</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='bb_melengkung' name='bb_melengkung' value='15000'>
                      <label class='label_harga' for='bb_lengkung'>(Free)</label>
                    </div>
                  </div>
                  <div class='field small visually-hidden'>
                    <div class='title'>Lengan pola raglan</div>
                    <div class='ms-auto'>
                      <input class='visually-hidden' type='checkbox' id='lengan_raglan' name='lengan_raglan' value='15000'>
                      <label class='label_harga' for='lengan_raglan'>(Free)</label>
                    </div>
                  </div>

                  <div class='field small visually-hidden'>
                    <div class='title'>Lengan Panjang</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='lengan_panjang'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+30,000)</span>
                  </div>

                  <div class='title pt-3'>Big Size</div>
                  <div class='field small pt-0'>
                    <div class='title'>- Size 2XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s2xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+20,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size 3XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s3xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+35,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>- Size >4XL</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='s4xl'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>

                  <div class='field small visually-hidden'>
                    <div class='title'>Celana printing</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='celana_printing' name='celana_printing' value='50000'>
                      <label class='label_harga' for='celana_printing'>(+50,000)</label>
                    </div>
                  </div>

                  <div class='field small'>
                    <div class='title'>Celana panjang PRO</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='celana_pro'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+150,000)</span>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kaoskaki</div>
                    <div>
                      <input type='text' class='input txt2' placeholder='Jumlah' name='kaoskaki' pattern='\d+' title='Inputan harus berupa angka'/>
                      <span class='title'>PCS</span><br>
                    </div>
                    <span>(+50,000)</span>
                  </div>
                </div>
                
                <h6 class='card-subtitle text-black-50 mt-4 visually-hidden'>Upgrade Fitur</h6>
                <div class='payment__shipping visually-hidden'>

                  <div class='field small visually-hidden'>
                    <div class='title'>Bahan embos</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='bahan_embos' name='upgrade' value='20000'>
                      <label class='label_harga' for='bahan_embos'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small visually-hidden'>
                    <div class='title'>Logo 3D</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='logo_3d' name='upgrade' value='30000'>
                      <label class='label_harga' for='logo_3d'>(+30,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Kerah elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='kerah_rib' name='kerah_rib' value='20000'>
                      <label class='label_harga' for='kerah_rib'>(+20,000)</label>
                    </div>
                  </div>
                  <div class='field small'>
                    <div class='title'>Ujung tangan elastic rib</div>
                    <div class='ms-auto'>
                      <input type='checkbox' id='tangan_rib' name='tangan_rib' value='20000'>
                      <label class='label_harga' for='tangan_rib'>(+20,000)</label>
                    </div>
                  </div>
                  
                </div>
                
                ",
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
