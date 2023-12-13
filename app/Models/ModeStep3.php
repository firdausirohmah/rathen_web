<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeStep3 extends Model
{
    use HasFactory;
    protected $table = 'tbl_step3';
    protected $primaryKey = 'kd_step3';
    protected $fillable = [ 
        'kd_step3',
        'pola_lengan',
        'model_kerah',
        'bahan_baju',
        'bahan_celana',
    ];
}
