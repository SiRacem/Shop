<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{

    public function commande(){
        return $this->belongsTo(Commande::class , 'commande_id' , 'id'); //commande_id mawjouda fi el migration
    }

    public function product(){
        return $this->belongsTo(Product::class , 'product_id' , 'id'); //kol ligne fiha produit we7ed (hasOne)
    }

}
