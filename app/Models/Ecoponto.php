<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecoponto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'latitude',
        'longitude',
        'funcionamento',
        'descricao',
        'lixos',
        'ecoponto_id',
    ];

    public function fotos(){
        return $this->hasMany(Foto::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }



}
