<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfilController extends Controller
{
    public function admin_profil(){
        return view('admin.admin_profil');
    }
}
