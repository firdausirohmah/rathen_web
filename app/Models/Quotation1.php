<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation1 extends Model
{
    // add into tabel DB
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tbl_quotation'; // Set the table name
    protected $primaryKey = 'kd_quotation'; // Adjust the primary key if needed
    protected $fillable = [
        'kd_quotation',
        'nama_pelanggan',
        'no_hp',
        'email',
        'alamat',
        // Add other columns as needed
    ];
}
