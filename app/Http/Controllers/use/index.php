<?php

namespace App\Http\Controllers\use;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function home()
    {
           

        return view('home');
    }
}
