<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tower extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relationship 1 to many between table towers and maintenances
    public function maintenances(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }

    // Relationship 1 to many between table towers and aset_towers
    public function asetTowers(): HasMany
    {
        return $this->hasMany(AsetTower::class);
    }
}
