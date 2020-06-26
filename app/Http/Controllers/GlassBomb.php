<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlassBomb extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function boom($peace){
        return view("welcome");
    }
}
