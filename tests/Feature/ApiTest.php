<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function getAllTours()
    {
        $response = $this->get('/api/v1/tours');

        $response->assertStatus(200);
    }

    public function ErrorgetAllTours()
    {
        $response = $this->get('/api/v1/tour');

        return $response->assertStatus(404);
    }
}
