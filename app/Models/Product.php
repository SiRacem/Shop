<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // relation entre categories et produits
    public function category(){

        return $this->belongsTo(Category::class , 'category_id' , 'id' );

    }

    /**
     * Get all of the reviews for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    // relation entre ligneCommande et produits
    public function ligneCommande(){

        return $this->hasMany(LigneCommande::class , 'product_id' , 'id' ); // hasMany->barcha produit fi panier

    }
}
