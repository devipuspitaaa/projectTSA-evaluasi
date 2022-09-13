<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function movie() {
        return view ('movie');
 
    }

    public function music() {
        return view ('music');
        
    }

   
}
