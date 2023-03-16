<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages_controller extends Controller
{
    public function show_about_us(){
        return view('aboutus');
    }
    public function show_dashboard(){
        return view('dashboard');
    }
}
