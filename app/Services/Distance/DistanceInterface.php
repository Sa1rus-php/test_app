<?php

namespace App\Services\Distance;

use Illuminate\Http\Request;

interface DistanceInterface
{
    public function distance_hamming($source, $dest);

    public function distance_levenshtein($source, $dest);
}
