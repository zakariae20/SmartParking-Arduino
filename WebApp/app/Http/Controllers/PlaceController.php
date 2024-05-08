<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Facades\DB;


class PlaceController extends Controller
{
    public function liste(){
        $places  = Place::all();
        return view('place.placeav',['places' => $places],compact('places'));
    }
}
