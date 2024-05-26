<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){

        $series = [
            'Punisher',
            'Lost',
            'Greys\'s anatomy'
        ];
        
       return view('series.index')->with('series', $series);
    }
}
