<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->number = User::max('number') + 1;
            $model->userid = 'USR-'.str_pad($model->number, 6, 0, STR_PAD_LEFT);
        });
    }

    protected function password(): Attribute
    {
        return Attribute::make(
        get: fn ($value) => ucfirst($value),
        set: fn ($value) => Hash::make($value),
        );
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registrations()
    {
        return $this->hasMany(ModuleRegistration::class, 'userid', 'userid');
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'userid', 'userid');
    }
}
