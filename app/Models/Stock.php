<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_produit',
        'date_entree',
        'date_sortie',
        'quantite',
    ];
    Public function produit(){
        return $this->hasOne(Produit::class);
        }
    Public function entree(){
        return $this->hasOne(Entree::class);
        }
    Public function sortie(){
        return $this->hasOne(Sortie::class);
        }
}
