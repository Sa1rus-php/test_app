<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HammingController extends Controller
{
    public function index(){
        return view('hamming');
    }

    public function distance(Request $request) {
        $source = $request->input('first_hamming');
        $dest = $request->input('second_hamming');
        if ($source == $dest) {
            return 0;
        }

        list($slen, $dlen) = [strlen($source), strlen($dest)];

        if ($slen == 0 || $dlen == 0) {
            return $dlen ? $dlen : $slen;
        }

        $dist = range(0, $dlen);

        for ($i = 0; $i < $slen; $i++) {
            $_dist = [$i + 1];
            for ($j = 0; $j < $dlen; $j++) {
                $cost = ($source[$i] == $dest[$j]) ? 0 : 1;
                $_dist[$j + 1] = min(
                    $dist[$j + 1] + 1,   // deletion
                    $dist[$j] + $cost    // substitution
                );
            }
            $dist = $_dist;
        }
        return response()->json([$dist[$dlen]]);
    }
}
