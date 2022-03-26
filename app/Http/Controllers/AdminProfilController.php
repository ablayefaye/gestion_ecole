<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfilController extends Controller
{
    public function admin_profil(){
        $admin = auth()->user();
        $title = "Mon Profil";
        return view('admin.admin_profil',compact('admin','title'));
    }

    public function admin_update_profil(Request $request){
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'old_password' => 'required|string|max:255',
            'new_password' => 'required|string|max:255|min:8',
        ]);

        // récupèration de admin
        $admin = User::find($request->id);

        // recupération des attributs de admin
        $prenom = $request->prenom;
        $nom = $request->nom;
        $adresse = $request->adresse;
        $telephone = $request->telephone;
        $old_password = $request->old_password;
        $new_password = $request->new_password;

        // vérification de l'ancien mot de passe
        $real_password = $admin->password;
        if (Hash::check($old_password, $real_password)) {
            $admin->prenom = $prenom;
            $admin->nom = $nom;
            $admin->telephone = $telephone;
            $admin->adresse = $adresse;
            $admin->password = Hash::make($new_password);
            $admin->save();
        }

        return back()->with('update_profile','Profil mis à jours avec succes.');
    }
}
