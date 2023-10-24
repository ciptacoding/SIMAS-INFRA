<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AsetTower extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Reverse relationship between table aset_towers and tower
    public function tower(): BelongsTo
    {
        return $this->belongsTo(Tower::class);
    }
}
