<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class PagesController extends Controller
{

    public function home(){
        return view('home', ['cars' => Car::all()]);
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

    public function reviews($slug){
        $car = Car::where('slug', $slug)->first();
    	return view('reviews', ['car' => $car]);
    }

    public function checkout(){
    	return view('checkout');
    }
}

