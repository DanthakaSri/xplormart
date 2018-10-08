<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\RatingController;

class rateMarketTest extends TestCase
{

    protected function setUp()
    {
        parent::setUp();
    
        $this->withoutExceptionHandling();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAddingRatings()
    {
        $response = $this->call('POST', '/rating', [
            'market_id' => '37',
            'username' => 'Test user',
            'email' => 'testuser@test.com',
            'rating' => '3',
            'image' => '/img/uploads/user/user.jpg',
            'verify' => '0',
            'comment' => 'Test comment'
        ]);


        $this->assertEquals(200, $response->status());
    }

    public function testShowAverageRatings(){
        $rating = RatingController::getRatingNumber('13');

        $this->assertEquals('3.0000', $rating);
    }

    public function testShowVerifiedMarkets(){
        $verifyCount = RatingController::getMarketVerifyStatus('13');

        $this->assertEquals('3', $verifyCount);
    }
}
