<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeTeacherController extends Controller
{
    public function welcome_teacher(){
        return view('teacher.welcome_teacher');
    }
}
