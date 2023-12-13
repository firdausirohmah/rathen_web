<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelStep4 extends Model
{
    use HasFactory;
    protected $table = 'tbl_step4';
    protected $primaryKey = 'kd_step4';
    protected $fillable = [  
        'namapunggung',
        'nomor',
        'ukuran', 
        'kd_step1',
    ];
}
