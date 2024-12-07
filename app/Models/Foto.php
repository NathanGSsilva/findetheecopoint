<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagem',
        'ecoponto_id'
    ];

  
    public function ecoponto(){
        return $this->belongsTo(Ecoponto::class);
    }
 
}
