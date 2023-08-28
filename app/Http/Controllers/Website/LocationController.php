<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductReviews;
use App\Entity\Product\Product;
use App\Country;
use App\State;
use App\City;



class LocationController extends Controller
{ 
   
    public function index()
    {
        $countries = Country::all();
        return view('dropdown', compact('countries'));
    }
     public function getStates(Request $request,$id)
    {
        $states = State::where('country_id', $request->id)->get();
        // return "ok";
        // die;
        return response()->json($states);
    }
     public function getCities(Request $request,$id)
    {
        // return "ok";
        //  die;
        $cities = City::where('state_id', $request->state_id)->get();
        return response()->json($cities);
    }
    

  

}