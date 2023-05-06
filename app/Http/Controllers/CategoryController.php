<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Fonction Afficher Listes Categories
    public function liste(){
        $categories = Category::all();
        return view('admin.categories.liste')->with('categories',$categories);
    }

    // Fonction Ajouter Les Categories
    public function add_categorie(Request $request){
        
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        if ( $category->save() )
        {
            return redirect()->back();
        }else{
            echo"error";
        }

        
    }

    // Fonction Supprimer Les Categories
    public function delete_categorie($id){
        $categorie = Category::find($id);
        if ( $categorie->delete() )
        {
            return redirect()->back();
        }else{
            echo"error";
        }
    }

    // Fonction Modifier Les Categories
    public function update_categorie(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $id = $request->id_category;
        $categorie = Category::find($id);

        $categorie->name = $request->name;
        $categorie->description = $request->description;

        if ( $categorie->update() )
        {
            return redirect()->back();
        }else{
            echo"error";
        }
    }

}