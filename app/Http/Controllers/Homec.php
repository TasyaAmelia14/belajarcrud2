<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homec extends Controller
{
    public function index(){
        return view('home');
    }
}
