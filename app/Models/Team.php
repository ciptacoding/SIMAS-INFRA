<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Reverse relationship between table teams and users
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship 1 to many between table teams and maintenances
    public function maintenances(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }

    // Relationship 1 to many between table towers and penugasans
    public function penugasans(): HasMany
    {
        return $this->hasMany(Penugasan::class);
    }
}
