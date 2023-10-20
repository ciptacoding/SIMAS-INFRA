<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laporan extends Model
{
    use HasFactory;

    // Reverse relationship between table laporans and users
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
