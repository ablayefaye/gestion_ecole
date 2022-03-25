<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeAdminController extends Controller
{
    public function welcome_admin(){
        $admin = auth()->user();
        $title = 'Accueil Admin';
        $cours = Cours::all();
        $eleves =  User::where('profil','=','eleve')->get();
        $enseignants = User::where('profil','=','enseignant')->get();
        return view('admin.welcome_admin',
        compact('admin','title','enseignants','cours','eleves')
        );
    }
}
