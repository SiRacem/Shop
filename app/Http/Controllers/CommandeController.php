<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\LigneCommande;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    //


    public function store(Request $request){
        //dd($request);


        // verifier si une commande est en cours pour ce client

        $commande = Commande::where('client_id' , Auth::user()->id )->where('etat', 'Pending')->first();
        //dd($commande);

        if($commande){ // if commande exite en cours ajouter les produits dans meme panier
            //check if produit deja existe
            $existe = false;
            foreach($commande->ligne_commandes as $lignec){


                if($lignec->product_id == $request->product_id){
                    $existe = true;
                    $lignec->qte += $request->qte;
                    $lignec->update();
                }
            }

        if(!$existe){ // Produit mahwech mawjoud fi el panier
            $lc = new LigneCommande();
            $lc->qte = $request->qte;
            $lc->product_id = $request->product_id; // loula mta3 relation w thenya mta3 form
            $lc->commande_id = $commande->id;
            $lc->save();
            echo "Produit Ajouter";
        }


            // redirection panier
            return redirect('/client/cart')->with('success' , ' Produit Commandee ');
        }else{ // panier vide
            // creation commande
            $commande = new Commande();
            $commande->client_id = Auth::user()->id ;
            if( $commande->save() ){
                 // creation ligne de commande

                $lc = new LigneCommande();
                $lc->qte = $request->qte;
                $lc->product_id = $request->product_id;
                $lc->commande_id = $commande->id; // $commande ligne 37
                $lc->save();
                // echo "Produit Ajouter";
                // redirection panier
                return redirect('/client/cart')->with('success' , ' Produit Commandee ');

            }else{
                return redirect()->back()->with('error' , 'Impossible De commander Le Produit ');
            }
        }


    }


    public function commande_delete($idlc){

        $lc = LigneCommande::find($idlc);
        $lc->delete();
        return redirect()->back()->with('success' , 'Ligne Commande Is Deleted');

    }
}
