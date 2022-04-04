<?php

namespace App\Http\Controllers;

use App\Services\Distance\Distance;
use Illuminate\Http\Request;

class LevenshteinController extends Controller
{
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
