<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesananModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_pemesanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kategori',
        'kualitas',
        'nama_tim',
        'nama_pelanggan',
        'alamat',
        'no_hp',
        'jumlah_pesanan',
        'tgl_pesanan',
        'updated_at',
        'created_at'
    ];
}
