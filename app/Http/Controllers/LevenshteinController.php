<?php

namespace App\Http\Controllers;

use App\Services\Distance\Distance;
use Illuminate\Http\Request;

class LevenshteinController extends Controller
{
    public function index()
    {
        return view('levenshtein');
    }

    public function distance(Request $request, Distance $distance)
    {
        $source = $request->input('first_levenshtein');
        $dest = $request->input('second_levenshtein');
        return $distance->distance_levenshtein($source,$dest);
    }

}
