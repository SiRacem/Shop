<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //

    public function home(){
        $produits = Product::all(); // recuperer tout les produits
        $categories = Category::all(); // recuperer tout les categories
        return view('guest.home')->with('produits' , $produits)->with('categories' , $categories);
    }

    public function productDetails($id){
        $product = Product::find($id);
        $produits = Product::where('id','!=',$id)->get(); // afficher toutes produits sans image produit selectioner
        $categories = Category::all(); // recuperer tout les categories
        return view('guest.product-details')->with('categories' , $categories)->with('product' , $product)->with('produits' , $produits);
    }

    public function shop($id_category){
        $products = Product::where('category_id',$id_category)->get();
        $category = Category::find($id_category);
        $categories = Category::all(); // recuperer tout les categories
        return view('guest.shop')->with('categories' , $categories)->with('products' , $products);
    }

    public function search(Request $request){
        $products = Product::where('name', 'LIKE' , '%' . $request->keywords .'%' )->get(); // recuperer tout les produits
        $categories = Category::all();
        return view('guest.shop')->with('products' , $products)->with('categories' , $categories);
    }
}
