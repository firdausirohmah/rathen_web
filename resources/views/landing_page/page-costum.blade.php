@extends('layout.landingpage')

@section('content')
    
<section style="overflow: hidden;">
    <section class="main-banner">
        <div class="main-banner__logo">
            <img src="asset/cfind/source/images/rathen.png" alt="">
        </div>
{{--  --}}
        <div class="main-banner__cekresi">
            <div class="main-banner__cekresi--list cek-lacak">
                <a class="form"  href="https://www.jne.co.id/tracking-package">
                    <i><img src="asset/images/icon baju - biru.png"></i>
                    <div class="input-box" style="margin-top: 10px">
                        <h4 class="item-center mt-10">COSTUM JARSEY</h4>
                        {{-- <input type="text" placeholder="Masukkan nomor pesanan" name="pesanan" required> --}}
                        {{-- <input type="submit" class="button-search" placeholder="COSTUM JARSEY"> --}}
                        {{-- <small>*Beri tanda koma jika lebih dari 1 resi</small> --}}
                    </div>
                </a>
            </div>
            <div class="main-banner__cekresi--list cek-tarif">
                <div class="box-tarif">
                    <form action="https://www.jne.co.id/shipping-fee" id="formResi">
                        <div class="field field-from field-autocomplete">
                            <i class="ico">
                                <img src="asset/images/material/ico-cek-map.svg">
                            </i>
                            <input type="text" placeholder="Kota Awal" autocomplete="off" params="1" required>
                            <input type="hidden" name="origin">
                            <div class="autocomplete-box"></div>
                        </div>
                        <div class="field field-to field-autocomplete">
                            <i class="ico">
                                <img src="asset/images/material/ico-cek-to.svg">
                            </i>
                            <input type="text" placeholder="Kota Tujuan" autocomplete="off" params="2" required>
                            <input type="hidden" name="destination">
                            <div class="autocomplete-box"></div>
                        </div>
                        <div class="field field-weight">
                            <i class="ico">
                                <img src="asset/images/material/ico-cek-weight.svg">
                            </i>
                            <input type="text" placeholder="Berat barang" name="weight" required>
                            <span class="weight">kg</span>
                        </div>
                        <div class="field field-button">
                            <button href="shipping-fee.html" class="button button-outline btn-hitung" type="submit">Check</button>
                        </div>
                    </form>
                </div>
                <form class="form">
                    <i><img src="asset/images/material/ico-cek.svg"></i>
                    <div class="input-box">
                        <label>CEK HARGA</label>
                        <input type="text" placeholder="Masukan data pesanan">
                        <a class="button-search button-search-resi"></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="main-banner__video">
            <video muted="muted" loop="loop" id="videohome" autoplay="autoplay" playsinline>
                <source src="asset/cfind/source/files/video.mp4" type="video/mp4">
                {{-- <source src="asset/cfind/source/files/hugo-papua-15-website.mp4" type="video/mp4"> --}}
                {{-- <source src="asset/cfind/source/files/hugo-papua-15-website.webm" type="video/webm"> --}}
            </video>
        </div>
    </section>

    {{-- <section class="home-what-say">
        <div class="wrapper">
            <div class="wrapper-left">
                <figure class="">
                    <div class="cover">
                                                <img src="asset/cfind/source/thumb/images/cover_w500_h546_website.jpg" alt="">
                    </div>
                                    </figure>
                <figcaption><span></span></figcaption>
            </div> --}}


            {{-- <div class="what-say">
                <h1>Apa kata mereka</h1>

                <div class="what-say-slider">
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p>“Terima kasih JNE yang selama ini telah memberikan kontribusinya terhadap kegiatan sosial di Indonesia. Saya berharap JNE dapat menjadi inspirasi bagi perusahaan lain untuk terus memberikan kontribusi maksimalnya bagi Indonesia.”</p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/logo-testimonial/cover_w103_h45_benih-baik.png" alt="">
                                </div>
                                <div class="name"><b>Andy F. Noya</b> - Founder BenihBaik.com</div>
                            </div>
                        </figcaption>
                    </div>
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p>"Terima kasih kepada JNE yang selalu memberikan fasilitas terbaiknya, sehingga pendistribusian paket Bening’s sampai ke seluruh Indonesia dengan kualitas yang sangat baik sekali. Bening’s Group akan selalu mendukung kemajuan dari JNE."</p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/cover_w103_h45_bening.png" alt="">
                                </div>
                                <div class="name"><b>dr. Oky Pratama Dipl. AAAM</b> - Founder Bening's Indonesia Group</div>
                            </div>
                        </figcaption>
                    </div>
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p>“JNE memiliki cakupan yang luas dan telah membantu Pelapak kami menjual barangnya ke seluruh penjuru Indonesia. Terima kasih JNE sudah mendampingi Pelapak kami berkembang bersama dengan performa logistik yang baik.”</p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/cover_w103_h45_merchant-bukalapak.png" alt="">
                                </div>
                                <div class="name"><b>Mutia Imro Atussoleha</b> - Head of Logistics Bukalapak</div>
                            </div>
                        </figcaption>
                    </div>
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p>“Berkolaborasi dengan JNE merupakan suatu kehormatan tersendiri bagi saya. Perusahaan yang telah berdiri kokoh selama 33 tahun ini memperkuat tekad saya untuk terus mewujudkan cita-cita saya sebagai perancang busana kelas dunia, sejalan dengan visi JNE untuk mencapai standar internasional. Maju terus JNE!”</p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/cover_w103_h45_igun.png" alt="">
                                </div>
                                <div class="name"><b>Ivan Gunawan</b> - Fashion Designer</div>
                            </div>
                        </figcaption>
                    </div>
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p>“Rasanya, tidak ada dalam buku teori ekonomi mana pun, bahwasanya BERBAGI, MEMBERI, MENYANTUNI adalah kunci sukses sebuah perusahaan bisa bertahan hingga puluhan tahun dan menjadi yang terdepan di lini bisnisnya. Tapi itulah yang telah dibuktikan oleh JNE. Tidak semata "menumpuk" laba, tapi juga "menebar" bahagia hingga mampu bangkit, tegak dan tumbuh bersama.”</p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/logo-testimonial/cover_w103_h45_kang-maman.png" alt="">
                                </div>
                                <div class="name"><b>Maman Suherman</b> - Penulis/Pegiat Literasi</div>
                            </div>
                        </figcaption>
                    </div>
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p>“Kami memilih JNE karena merupakan perusahaan ekspedisi terbesar di Indonesia dengan jaringan luas yang menjangkau seluruh pelosok tanah air. Hal ini sejalan dengan misi kami untuk menjadikan produk Realfood dapat diakses oleh seluruh masyarakat Indonesia.”</p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/logo-testimonial/cover_w103_h45_untitled-1-01.jpg" alt="">
                                </div>
                                <div class="name"><b>Wiwik Sri Wilujeng</b> - Marketing Director Realfood</div>
                            </div>
                        </figcaption>
                    </div>
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p><span style="color:rgb(77,77,77);">“Terima kasih JNE yang telah mendukung member TDA dalam pengembangan usahanya. Kami harap kerjasama dengan komunitas TDA dapat berjalan lancar dan berkelanjutan”</span></p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/logo-testimonial/cover_w103_h45_untitled-1-03.jpg" alt="">
                                </div>
                                <div class="name"><b>Ibrahim M. Bafaghih</b> - TDA President 7.0</div>
                            </div>
                        </figcaption>
                    </div>
                                        <div class="what-say-slider__list">
                        <figcaption>
                            <p>“JNE telah memberikan layanan logistik yang unggul dan terjangkau kepada ratusan juta pengguna kami yang tersebar di 99% kabupaten di Indonesia.”</p>
                            <div class="box-name">
                                <div class="img">
                                    <img src="asset/cfind/source/thumb/images/logo-testimonial/cover_w103_h45_untitled-1-02.jpg" alt="">
                                </div>
                                <div class="name"><b>Edwin Mailoa</b> - VP of Logistics Tokopedia</div>
                            </div>
                        </figcaption>
                    </div>
                                    </div>
            </div>
        </div>
    </section>

    <section class="home-appreciation">
        <div class="wrapper">
            <figcaption>
                <div class="bg-line-start">
                    <div class="line-point">
                        <div class="circle-point"></div>
                    </div>
                    <div class="line-dashed"></div>
                </div>
                <h1>Apresiasi untuk Teman JNE yang selalu setia menemani</h1>
                <p>
                    Terima kasih karena telah memberikan kepercayaan kepada kami untuk mengantarkan dan membagikan kebahagiaan.
                </p>
            </figcaption>
            <figure>
                <img src="asset/cfind/source/thumb/images/cover_w800_h239_ap-rumah-adat.png" alt="">
            </figure>
            <div class="bg-line-middle"></div>
            <div class="bg-line-end"></div>
            <div class="graphicLeft">
                <img src="asset/images/content/ap-pesawat.png">
            </div>
        </div>
    </section>

    <section class="home-promo">
        <div class="wrapper">
            <div class="bg-line-start">
                <div class="line-point">
                    <div class="circle-point"></div>
                </div>
            </div>
            <div class="bg-line-end">
                <div class="line-point">
                    <div class="circle-point"></div>
                </div>
            </div>
            <div class="line-img-bottom">
                <img src="asset/images/material/line-motor-rh.png">
            </div>
            <div class="text-title">
                <div class="text-title__left">
                    <h3>Promo Terkini</h3>
                </div>
                <div class="text-title__right">
                                                                                                                                                                                                                                                                                                                                                    <a href="promo-id.html" class="link-arrow">Lihat Semua</a>
                                                                                                </div>
            </div>
            <div class="listing-promo">
                
                <a class="listing-promo__item" href="jne-bantu-wujudkan-kebahagiaan.html">
                    <figure>
                        <img src="asset/cfind/source/thumb/images/cover_w970_h577_website-banner-astra-x-jne-370x220px-01-1.jpg" alt="">
                    </figure>
                    <figcaption>
                        <h6>JNE Bantu Wujudkan Kebahagiaan</h6>
                        <span class="date">2023-12-31</span>
                    </figcaption>
                </a>
                
                <a class="listing-promo__item" href="jasa-layanan-jne-logistik.html">
                    <figure>
                        <img src="asset/cfind/source/thumb/images/cover_w970_h577_tw1149_th685_x1690_y10_truck-jtr-for-web-3.jpg" alt="">
                    </figure>
                    <figcaption>
                        <h6>Jasa Layanan JNE Logistik</h6>
                        <span class="date">2023-12-31</span>
                    </figcaption>
                </a>
                
                <a class="listing-promo__item" href="inklusi-keuangan-platform-penjualan-digital-berbasis-ai.html">
                    <figure>
                        <img src="asset/cfind/source/thumb/images/cover_w970_h577_web-banner-financial-ai-01-1.jpg" alt="">
                    </figure>
                    <figcaption>
                        <h6>Inklusi Keuangan, Platform Penjualan Digital Berbasis AI</h6>
                        <span class="date">2023-12-31</span>
                    </figcaption>
                </a>
                                <!--a class="listing-promo__item">
						<figure>
							<img src="https://www.jne.co.id/images/content/promo-2.jpg">
						</figure>
						<figcaption>
							<h6>Kirim Pakai JNE Express Gratis Ongkir se-Indonesia</h6>
							<span class="date">Promo berakhir 15 September 2022</span>
						</figcaption>
					</a>
					<a class="listing-promo__item">
						<figure>
							<img src="https://www.jne.co.id/images/content/promo-3.jpg">
						</figure>
						<figcaption>
							<h6>Nyaman Kirim Barang Via JNE Aman Tanpa Cash #PakeLinkAja</h6>
							<span class="date">Promo berakhir 15 September 2022</span>
						</figcaption>
					</a-->
            </div>
        </div>
    </section>

    <section class="home-product">
        <div class="wrapper">
            <div class="bg-line-start">
                <div class="line-point">
                    <div class="circle-point"></div>
                </div>
            </div>
            <div class="text-title">
                <div class="text-title__left">
                    <h3>Produk &amp; Layanan</h3>
                </div>

                                                                                <div class="text-title__right">
                    <a href="produk-dan-layanan.html" class="link-arrow">Lihat Semua</a>
                </div>
                                                                                                                                                                            </div>

            <div class="product-slider">
                <div class="product-list">
                                                            <a  href="produk.html#1"                          class="product-list__item ">
                        <figure><img src="asset/cfind/source/thumb/images/cover_w480_h280_jne-express.jpg" alt="">
                        </figure>
                        <figcaption style="--dataColor: #E11C22">
                            <i><img src="asset/cfind/source/images/jne-express-1.png"></i>
                            <p>
                                JNE Express
                            </p>
                        </figcaption>
                    </a>

                                                            <a  href="produk.html#2"                          class="product-list__item ">
                        <figure><img src="asset/cfind/source/thumb/images/cover_w480_h280_jne-logistics.jpg" alt="">
                        </figure>
                        <figcaption style="--dataColor: #f2982e">
                            <i><img src="asset/cfind/source/images/logistics-1-1.jpg"></i>
                            <p>
                                JNE Logistics
                            </p>
                        </figcaption>
                    </a>

                                                            <a  href="produk.html#3"                          class="product-list__item ">
                        <figure><img src="asset/cfind/source/thumb/images/cover_w480_h280_tw2000_th1167_x10_y1166_copy-of-dscf5715.jpg" alt="">
                        </figure>
                        <figcaption style="--dataColor: #01A551">
                            <i><img src="asset/cfind/source/images/freight-1.jpg"></i>
                            <p>
                                JNE Freight
                            </p>
                        </figcaption>
                    </a>

                                                            <a  href="produk.html#4"                          class="product-list__item ">
                        <figure><img src="asset/cfind/source/thumb/images/cover_w480_h280_web-banner-financial-ai-01-1.jpg" alt="">
                        </figure>
                        <figcaption style="--dataColor: #000000">
                            <i><img src="asset/cfind/source/thumb/images/cover_w100_h40_jne-inter--01.png"></i>
                            <p>
                                JNE International
                            </p>
                        </figcaption>
                    </a>

                    
                </div>
            </div>
        </div>

    </section>

    <section class="home-partner">
        <div class="wrapper">
                        <figure class="line-people">
                <img src="asset/cfind/source/thumb/images/cover_w180_h132_line-people.png" alt="">
            </figure>
            <h2>Terima kasih karena telah memberikan kepercayaan kepada kami untuk mengantarkan dan membagikan kebahagiaan.</h2>
            
            <div class="wrap-partner">
                <div class="wrap-partner__box">
                    <h4>Business Partner</h4>
                    <div class="listing-partner business">
                                                <a class="listing-partner__item"  href="https://www.asus.com/id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_asus-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.bca.co.id/id" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_bca-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://benings-clinic.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_benings.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.bni.co.id/id-id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_bni-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.blibli.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_blibli.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://bri.co.id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_bri-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://easy-shopping.co.id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_eazy-shopping-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.erajaya.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_erajaya-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://evermos.com/home/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_evermos-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.hitachiaircon.com/id/id" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_hitachi-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://jubelio.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_jubelio-resized.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://kiriminaja.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_kirimin-aja-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.lazada.co.id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_merchant-lazada.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.mengantar.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_mengantar-2-resized.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.optikseis.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_optik-resized.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://realfood.co.id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_realfood.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.reksointernational.com/home/index.php" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_rekso-resize.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://shopee.co.id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_merchant-shopee.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.telkomsel.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_telkomsel-png.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.tokopedia.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_tokopedia-180x127.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.zalora.co.id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_zalora-180x127.png">
                        </a>
                                                <!--a class="listing-partner__item">
								<img src="https://www.jne.co.id/images/content/merchant-tokopedia.png">
							</a>
							<a class="listing-partner__item">
								<img src="https://www.jne.co.id/images/content/merchant-blibli.png">
							</a>
							<a class="listing-partner__item">
								<img src="https://www.jne.co.id/images/content/merchant-bukalapak.png">
							</a>
							<a class="listing-partner__item">
								<img src="https://www.jne.co.id/images/content/merchant-lazada.png">
							</a-->
                    </div>
                </div>
                <div class="wrap-partner__box">
                    <h4>Corporate Value Partner</h4>
                    <div class="listing-partner corporate">
                                                <a class="listing-partner__item"  href="https://benihbaik.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/logo-business-partner/cover_w180_h127_benih-baik-resized.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://ctarsafoundation.org/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_ct-arsa.png">
                        </a>
                                                <a class="listing-partner__item"  href="http://foodbankindonesia.org/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_corporate-foodbank.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://forumtbm.or.id/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_untitled-32.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://www.instagram.com/rumahharapanmelanie/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_rumah-harapan-melanie.png">
                        </a>
                                                <a class="listing-partner__item"  href="https://saranapenghafalalquranindonesia.com/" target="_blank" >
                            <img src="asset/cfind/source/thumb/images/cover_w180_h127_untitled-3.png">
                        </a>
                                                <!--a class="listing-partner__item">
								<img src="https://www.jne.co.id/images/content/corporate-wahyoo.png">
							</a>
							<a class="listing-partner__item">
								<img src="https://www.jne.co.id/images/content/corporate-sahabat-desa.png">
							</a-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-collaboration">
        <div class="home-collaboration__people">
            <img src="asset/images/content/collaboration-abs.png">
        </div>
        <div class="home-collaboration__banner">
            <img src="asset/cfind/source/thumb/images/cover_w1296_h540_banner-web-jne_page-0001.jpg" alt="">
        </div>
        <div class="wrapper">
            <figure>
                <img src="asset/cfind/source/thumb/images/cover_w316_h120_jne-tab-space.png" alt="">
            </figure>
            <figcaption>
                <p><span style="background-color:rgb(255,255,255);color:rgb(0,0,0);">Tab Space merupakan supported studio berbasis di Bandung yang memproduksi karya-karya dari seniman disabilitas yang sangat berbakat.&nbsp;</span></p><p><span style="background-color:rgb(255,255,255);color:rgb(0,0,0);">JNE bersama Tab Space berkolaborasi untuk menyampaikan pesan kebahagiaan melalui karya-karya para seniman disabilitas tersebut.</span></p>
                <a class="link-arrow" href="https://www.instagram.com/tab____space/" target="_blank nofollow">Lihat Selengkapnya</a>
            </figcaption>
        </div>
    </section>
        <section class="home-organization">
        <div class="wrapper">
                        <img src="asset/cfind/source/thumb/images/cover_w70_h82_terakreditasi.png">
                        <img src="asset/cfind/source/thumb/images/cover_w70_h82_terdaftar.png">
                        <img src="asset/cfind/source/thumb/images/cover_w70_h82_iso-9001-resize.png">
                        <img src="asset/cfind/source/thumb/images/cover_w70_h82_iso-45001-resize.png">
                        <img src="asset/cfind/source/thumb/images/cover_w70_h82_iso-14001-resize.png">
                    </div>
    </section>
    </section>



    <div class="cookies-box" id="cookies">
    <div class="wrapper">
                <p> Kami menggunakan cookie untuk meningkatkan pengalaman Anda. Dengan mengklik 'Setuju', Anda menyetujui <a href="kebijakan-privasi-dan-pengamanan.html">Kebijakan Cookie</a>.</p>
        <button onclick="setCookie('jnecookies', 'jnec', 3);">Setuju</button>
    </div>
</div> --}}
@endsection

