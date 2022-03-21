<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeStudentController extends Controller
{
    public function welcome_student(){
        return view('student.welcome_student');
    }
}
