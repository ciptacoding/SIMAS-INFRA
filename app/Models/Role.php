<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relationship 1 to many between table roles and users
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
