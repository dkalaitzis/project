<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
    	return view('home');
    }

    public function redirect(){
    	return redirect('home');
    }

    public function login(){
    	return view('login');
    }

    public function faq(){
    	return view('faq');
    }

    public function reviews(){
    	return view('reviews');
    }

    public function checkout(){
    	return view('checkout');
    }
}

