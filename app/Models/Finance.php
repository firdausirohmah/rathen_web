<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'media',
        // Daftar semua kolom lainnya di sini
    ];

    public function file():BelongsTo
    {
        return $this->belongsTo(Media::class, 'media');
    }
}
