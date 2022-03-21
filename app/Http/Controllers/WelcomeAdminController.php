<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeAdminController extends Controller
{
    public function welcome_admin(){
        return view('admin.welcome_admin');
    }
}
