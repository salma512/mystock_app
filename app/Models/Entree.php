<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_produit',
        'quantite',
        'categorie_produit',
        'date_entree',
    ];
    Public function stock(){
        return $this->belongsTo(Stock::class);
        }
    Public function produit(){
        return $this->belongsToMany(Produit::class);
        }
}
