<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class connectionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConnection()
    {
        $response = $this->get('/http://localhost:8000/');
        $response->assertStatus(200);
    }
}
