<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Maintenance extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Reverse relationship between table maintenances and teams
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    // Reverse relationship between table maintenances and towers
    public function tower(): BelongsTo
    {
        return $this->belongsTo(Tower::class);
    }
}
