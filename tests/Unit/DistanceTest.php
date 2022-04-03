<?php

namespace Tests\Unit;

use Tests\TestCase;

class DistanceTest extends TestCase
{
    public function test_hamming()
    {
        $response = $this->post('/api/hamming/submit', [
            'first_hamming' => 'this is test',
            'second_hamming' => 'the is test'
        ]);
        $response
            ->assertStatus(200)
            ->assertJson([
                '0' => 2,
            ]);
    }
    public function test_levenshtein()
    {
        $response = $this->post('/api/levenshtein/submit', [
            'first_levenshtein' => 'this is a test',
            'second_levenshtein' => 'this is test'
        ]);
        $response
            ->assertStatus(200)
            ->assertJson([
                '0' => 2,
            ]);
    }
}
