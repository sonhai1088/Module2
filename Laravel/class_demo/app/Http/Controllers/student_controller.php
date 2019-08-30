<?php

namespace App\Http\Controllers;

use App\student_model;
//use Illuminate\Http\Request;

class student_controller extends Controller
{
    public function all(){
        $student = student_model::all();
        return view('list', compact(['student']));
    }
}
