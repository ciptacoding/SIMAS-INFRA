<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penugasan extends Model
{
    use HasFactory;

    // Reverse relationship between table penugasans and teams
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
