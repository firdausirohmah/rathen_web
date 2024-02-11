<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelStep1 extends Model
{
    use HasFactory;
    protected $quarded = [];
    protected $table = 'tbl_step1';
    protected $primaryKey = 'kd_pembelian';
    protected $fillable = [
        'kd_pembelian',
        'product',
        'nama_tim',
        'domisili',
        'nama_pemesanan',
        'kontak',
        'alamat_pengirim',
        'jumlah_pemesanan',
        'kategori_harga',
        'tipe_kualitas',
        'harga',
        'kerah_kancing',
        'badan_bawah',
        'pola_lengan',
        'upgrade_logo_3d',
        'logo_tim_dicelana',
        'lengan_panjang',
        'size_2xl',
        'size_3xl',
        'size_4xl',
        'celana_panjang',
        'celana_printing',
        'kaoskaki',
        'bahan_embos',
        'kerah_rib',
        'tangan_rib',
        'total_harga',
        'kd_step2',
        'kd_step3',
        'kd_step4',
        'biaya_desain',
        'biaya_dp',
        'biaya_pelunasan',
        'biaya_pengiriman',
    ];
}
