<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Category;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    // fonction qui permet d'afficher le dashboard client
    public function dashboard(){
        return view('client.dashboard');
    }

    public function profile(){
        return view('client.profile');
    }

    public function update_profile(Request $request){

        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if ($request->password){ // if mot de passe fiha valeur
            Auth::user()->password = Hash::make($request->password);
        }
        Auth::user()->update();

        return redirect('/client/profile')->with('success', 'Client Modifie avec success  ..!');
    }

    public function add_review(Request $request){

        $review = new Review();
        $review->rate = $request->rate;
        $review->product_id = $request->product_id;
        $review->content = $request->content;
        $review->user_id = Auth::user()->id ;

        $review->save();

        return redirect()->back();

    }

    public function cart(){
        $categories = Category::all();
        $commande = Commande::where('client_id' , Auth::user()->id )->where('etat', 'Pending')->first();
        return view('guest.cart')->with('categories', $categories)->with('commande', $commande);
    }

    public function checkout(Request $request){
        //dd($request);

        $commande = Commande::find($request->commande);
        $commande->etat = "Approved";
        $commande->update();

        return redirect('/client/dashboard')->with('success', 'Commande Is Approved ..!');
        // dd($commande->getTotal() );
    }

    public function mescommandes(Request $request){

        return view('client.commandes');

    }

    public function dashboard2(){
        return view('client.dashboard2');
    }

    public function news(){

        return view('client.news');

    }

    public function ticket(){

        return view('client.ticket');

    }

    public function create(Request $request){

        return view('client.create_ticket');

    }

    public function mescommandes2(Request $request){

        return view('client.commande');

    }

    public function calculator(Request $request){

        return view('client.calculator');

    }

    public function wallet(Request $request){

        return view('client.wallet');

    }

    public function deposit(Request $request){

        return view('client.deposit');

    }

    public function withdraw(Request $request){

        return view('client.withdraw');

    }

    public function conversion(Request $request){

        return view('client.conversion');

    }

}
