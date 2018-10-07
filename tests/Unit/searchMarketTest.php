<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\SearchController;

class searchMarketTest extends TestCase
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
    public function testMarketSearch()
    {
       /* $search = SearchController::getKeywordAndType('Dragon food', 'Vietnamese');

        $this->assertEquals('Dragon', $search);*/

        $this->assertDatabaseHas('markets', [
            'name' => 'Dragon food'
        ]);
    }
}
