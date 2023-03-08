<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_client',
        'phone',
    ];

    Public function sortie(){
        return $this->hasMany(Sortie::class);
        }
}
