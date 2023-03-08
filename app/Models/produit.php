<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_produit',
        'prix_produit',
        'categorie_produit',
    ];
    Public function stock(){
        return $this->belongsTo(Stock::class);
        }
    Public function entree(){
        return $this->belongsToMany(Entree::class);
        }
    Public function sortie(){
        return $this->belongsToMany(Sortie::class);
        }
}
