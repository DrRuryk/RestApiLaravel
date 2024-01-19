<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class People extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'imie',
        'nazwisko',
        'numer_telefonu',
        'ulica',
        'miasto',
        'kraj',
        'wzrost',
        'waga',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

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
    ];

    /**
     * Get the name of the column used to store the "created at" timestamp.
     *
     * @return string
     */
    public function getCreatedAtColumn()
    {
        return null;
    }

    /**
     * Get the name of the column used to store the "updated at" timestamp.
     *
     * @return string
     */
    public function getUpdatedAtColumn()
    {
        return null;
    }
}