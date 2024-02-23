<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LinkWeb extends Model
{
    use HasFactory;

    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'id_media', 'id');
    }
}
