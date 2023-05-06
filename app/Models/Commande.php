<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function ligne_commandes(){
        return $this->hasMany(LigneCommande::class , 'commande_id' , 'id');
    }

    public function client(){
        return $this->belongsTo(User::class , 'client_id' , 'id'); //client_id mawjouda fi el migration
    }

    public function getTotal(){
        $total = 0;
        // liste des lignes
        foreach ($this->ligne_commandes as $lc) { //ligne_commandes isem el function
            $total += $lc->product->price * $lc->qte;
        }
        return $total;
    }

}
