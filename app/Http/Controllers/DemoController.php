<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){ //index function to route 
        return view('home'); //calling home page in blade 
    }
}
