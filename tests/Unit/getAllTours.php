<?php

namespace Tests\Unit;

use App\Models\Tour;
use App\Services\TourService;
use PHPUnit\Framework\TestCase;

class getAllTours extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getAllTours()
    {
    	$tours = Tour::factory()->create();
    	$getTours = (new TourService())->getAllTours(2, 1);
        $this->assertEquals(true, $getTours);
    }
}
