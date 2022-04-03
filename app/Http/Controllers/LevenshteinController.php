<?php

namespace App\Http\Controllers;

use App\Services\Distance\Distance;
use Illuminate\Http\Request;

class LevenshteinController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('levenshtein');
    }

    /**
     * @param Request $request
     * @param Distance $distance
     * @return \Illuminate\Http\JsonResponse
     */
    public function distance(Request $request, Distance $distance)
    {
        $distance->setStrings($request->first_string, $request->second_string);

        return response()->json([
            'value' => $distance->distanceLevenshtein()
        ]);
    }

}
