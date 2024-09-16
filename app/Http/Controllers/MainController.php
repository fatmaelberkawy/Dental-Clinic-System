<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }
    
    public function doctors(){
        return view('doctors');
    }

    public function faq(){
        return view('faq');
    }

    public function review(){
        return view('review');
    }

    public function contact(){
        return view('contact');
    }

    public function appointment(){
        return view('appointment');
    }


}
