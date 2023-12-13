<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelOrder extends Model
{
    use HasFactory;
    protected $quarded = [];
    protected $table = 'user_order';
    protected $primaryKey = 'kd_order';
    protected $fillable = [
        'kd_order',
        'kd_step1', 
        'kd_step2',
        'kd_step3',
        'status_order',
        'no_order', 
    ];
}
