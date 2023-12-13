<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeStep2 extends Model
{
    use HasFactory;
    protected $table = 'tbl_step2';
    protected $primaryKey = 'kd_step2';
    protected $fillable = [ 
        'kd_step2',
        'design_jersey_pemain',
        'design_jersey_kiper',
        'logo_tim',
        'sponsor_dada_tulisan1baris',
        'sponsor_dada_logodantulisan',
        'extra_tulisan1baris',
        'extra_logodantulisan',
        'logo_dilengan_kanan',
        'logo_dilengan_kiri',
        'sponsor_belakang_tulisan1baris',
        'sponsor_belakang_logodantulisan',
    ];
}
