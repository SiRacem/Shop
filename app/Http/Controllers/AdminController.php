<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // fonction qui permet d'afficher le dashboard admin
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function update_profile(Request $request){

        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if ($request->password){ // if mot de passe fiha valeur
            Auth::user()->password = Hash::make($request->password);
        }
        Auth::user()->update();

        return redirect('/admin/profile')->with('success', 'Admin Modifie avec success  ..!');
    }

    public function liste(){

        $clients = User::where('role', 'user')->get();
        return view('admin.clients.index')->with('clients' , $clients);
    }
    
}
