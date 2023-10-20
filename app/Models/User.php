<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Reverse relationship between table users and roles
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    // Relationship 1 to many between table users and notifications
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    // Relationship 1 to 1 between table users and teams
    public function team(): HasOne
    {
        return $this->hasOne(Team::class, 'ketua_tim');
    }

    // Relationship 1 to many between table users and laporans
    public function laporans(): HasMany
    {
        return $this->hasMany(Laporan::class);
    }
}
