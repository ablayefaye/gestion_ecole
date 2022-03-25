<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeAdminController extends Controller
{
    public function welcome_admin(){
        $admin = auth()->user();
        $title = 'Accueil Admin';
        return view('admin.welcome_admin',compact('admin','title'));
    }
}
