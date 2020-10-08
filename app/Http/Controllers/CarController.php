<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
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

    public function checkout($slug){
    	$car = Car::where('slug', $slug)->first();
        return view('checkout', ['car' => $car]);
    }

    public function createReview(Request $request, $slug) {

        $input = $request->validate(['review' => 'string|max:255']);

        $car->reviews()->create([
            'user_id' => \Auth::user()->id,
            'car_id' => $car->id,
            'review' => $input['review']
        ]);

        return redirect();
    }
}

