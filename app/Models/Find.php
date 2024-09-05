<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Find as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Find extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = "usuarios";
    protected $fillable = [
        'nome',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
