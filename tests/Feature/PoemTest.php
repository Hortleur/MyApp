<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PoemTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_poem_get_all_route()
    {
        $response = $this->get('/api/poem');

        $response->assertStatus(200);

        $response->assertJsonStructure();
    }

    public function test_poem_get_one_route()
    {
        $response = $this->get('/api/poem/id');

        $response->assertStatus(200);

        $response->assertJsonStructure();

    }
}
