<?php

namespace App\Http\Controllers;

use App\Services\Distance\Distance;
use Illuminate\Http\Request;

class LevenshteinController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/levenshtein/submit",
     *     description="Levenshtein distance calculation",
     *     @OA\Parameter(
     *         name="first_string",
     *         in="query",
     *         description="First string",
     *         required=true,
     *     ),
     *     @OA\Parameter(
     *         name="second_string",
     *          in="query",
     *         description="First string",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Success",
     *     ),
     * )
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
