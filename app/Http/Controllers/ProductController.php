<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fonction Afficher Listes Produits
    public function liste(){
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.liste')->with('products',$products)->with('categories',$categories);
    }

    // Fonction Ajouter Les Produits
    public function add_product(Request $request){


        $produit = new Product();
        $produit->name = $request->name;
        $produit->category_id = $request->categorie;
        $produit->description = $request->description;
        $produit->price = $request->price;
        $produit->qte = $request->qte;

        // Upload Images
        $newname = uniqid();
        $image = $request->file('photo') ;
        $newname.="." . $image->getClientOriginalExtension(); // .jpg
        //echo $image->getSize();
        $destinationPath = 'uploads';

        $image->move($destinationPath , $newname);


        $produit->photo = $newname;


        if ( $produit->save() )
        {
            return redirect()->back();
        }else{
            echo"error";
        }


    }

    // Fonction Supprimer Les Produits
    public function delete_product($id){
        $product = Product::find($id);

        $file_path = public_path().'/uploads/'.$product->photo;

        //dd($file_path);

        unlink($file_path);
        if ( $product->delete() )
        {
            return redirect()->back();
        }else{
            echo"error";
        }
    }

    // Fonction Update Les Produits
    public function update_product(Request $request){

        // dd($request);
        $produit = Product::find($request->id_produit);
        $produit->name = $request->name;
        $produit->description = $request->description;
        $produit->price = $request->price;
        $produit->qte = $request->qte;

        // // Upload Images

        if( $request->file('photo')){

            //supprimer ancienne photo

            $file_path = public_path().'/uploads/'.$produit->photo;

            unlink($file_path);
        }

            // upload nv photo

        $newname = uniqid();
        $image = $request->file('photo') ;
        $newname.="." . $image->getClientOriginalExtension(); // .jpg
         //echo $image->getSize();
        $destinationPath = 'uploads';

        $image->move($destinationPath , $newname);


        $produit->photo = $newname;


        if ( $produit->update() )
        {
            return redirect()->back();
        }else{
            echo"error";
        }


    }
}
