<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class addMarketTest extends TestCase
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
    public function testDatabaseConnection()
    {
        $this->assertDatabaseHas('markets', [
            'name' => 'Sri Lanka Market'
        ]);
    }
    public function testAddMarket()
    {
        $response = $this->call('POST', '/shop', [
            'name' => "TDD Test Name",
            'type' => "TDD Test Type",
            'description' => "TDD Test description",
            'country' => "TDD Test country",
            'phone_num' => "61455503013",
            'email' => "tddtest@test.com",
            'website' => "TDD Test Web",
            'street_address' => "TDD Test Street",
            'postcode' => "01235",
            'suburb' => "testsuburb",
            'city' => "TDD Test City",
            'image' => '/img/uploads/market/test.jpg',
            'fb_url' => "TDD Test FB url",
            'youtube_url' => "TDD youte_url",
            'twitter_url' => "TDD twitter",
            'monday' => "TDD Test monday",
            'tuesday' => "TDD Test tuesday",
            'wednesday' => "TDD Test wednesday",
            'thursday' => "TDD Test thursday",
            'friday' => "TDD Test friday",
            'saturday' =>"TDD Test saturday",
            'sunday' => "TDD Test sunday",
            'avg_rating' => '0',
            'verify_count' => '0'

        ]);

        $this->assertEquals(200, $response->status());
    }

}
