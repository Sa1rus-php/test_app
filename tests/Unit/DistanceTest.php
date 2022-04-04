<?php

namespace Tests\Unit;

use App\Services\Distance\Distance;
use Tests\TestCase;

class DistanceTest extends TestCase
{
    /**
     * Testing service - distance
     *
     * @return void
     */
    public function testServiceLevenshtein()
    {
        $service = new Distance();
        $service->setStrings('this is a test','this is test');
        $result = $service->distanceLevenshtein();
        $this->assertEquals(2, $result);
    }

    /**
     * Testing levenshtein , if result 0 its error
     */
    public function testErrorLevenshteinSame()
    {
        $service = new Distance();
        $service->setStrings('this is a test','this is a test');
        $result = $service->distanceLevenshtein();
        $this->assertEquals(null, $result);
    }

    /**
     * Testing service - distance
     *
     * @return void
     */
    public function testServiceHamming()
    {
         $service = new Distance();
         $service->setStrings('this is test','the is test');
         $result = $service->distanceHamming();
         $this->assertEquals(2, $result);
    }

    /**
     * Testing hamming , if result 0 its error
     */
    public function testErrorHammingSame()
    {
        $service = new Distance();
        $service->setStrings('this is a test','this is a test');
        $result = $service->distanceHamming();
        $this->assertEquals(null, $result);
    }

}
