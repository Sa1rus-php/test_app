<?php

namespace App\Http\Controllers;

use App\Services\Distance\Distance;
use Illuminate\Http\Request;

class HammingController extends Controller
{
    public function index()
    {
        return view('hamming');
    }

    public function distance(Request $request, Distance $distance)
    {
        $source = $request->input('first_hamming');
        $dest = $request->input('second_hamming');
        return $distance->distance_hamming($source,$dest);
    }
}
