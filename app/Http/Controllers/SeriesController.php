<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SeriesController extends Controller
{
    public function index(Request $request){

        $series = [
            'Punisher',
            'Lost',
            'Geys\'s anatomy'
        ];

       return view('listar-series', ['series' => $series]);
    }
}
