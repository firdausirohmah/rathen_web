<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registerModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'username';
    protected $fillable = [
        'username',
        'password',
        'email',
        'role',
        'updated_at',
        'created_at'
    ];
}
