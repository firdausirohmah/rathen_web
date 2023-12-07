<?php 
// app/Models/Quotation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
        'nama_tim', 
        'domisili', 
        'nama_pemesan', 
        'kontak', 
        'alamat_pengiriman', 
        'tipe_kualitas', 
        'harga', 
        'jumlah_pesanan', 
        'kategori_harga', 
        'badan_bawah_melengkung', 
        'pola_lengan_raglan', 
        'up_logo_3d', 
        'logotim_dicelana', 
        'lengan_panjang', 
        'size_xxl', 'size_xxxl', 
        'sise_xxxxxl', 'celana_panjang', 
        'kaoskaki' ];
}

?>