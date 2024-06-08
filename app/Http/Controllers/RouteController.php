<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function home(){
        return view('welcome');
   }
   function form() {
     $url = url('/register');
     $title = 'Registration'; 
     $btn = 'Registration';
     $data = compact('url' , 'title' , 'btn');
     return view('form')->with($data);
   }
}
