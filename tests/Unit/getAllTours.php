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
    public function test_single_product_no_taxes()
    {
    	$tours = Tour::factory()->create(); // generate a fake product
    	$getTours = (new TourService())->getAllTours(2, 1);
        $this->assertEquals(true, $getTours);
    }
}
