<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view ('childhome');
    }
    public function profilepage(){
        return view ('childprofile');
    }
}
