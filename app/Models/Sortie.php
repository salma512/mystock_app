<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_produit',
        'quantite',
        'nom_client',
        'date_sortie',
        'note',
    ];
    Public function stock(){
        return $this->belongsTo(Stock::class);
        }
    Public function produit(){
        return $this->belongsToMany(Produit::class);
        }
    Public function client(){
            return $this->belongsTo(Client::class);
            }
}
