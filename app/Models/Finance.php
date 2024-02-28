<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_date',
        'transactions',
        'type',
        'status',
        'money_status',
        'nominal',
        'note',
        // Daftar semua kolom lainnya di sini
    ];
}
