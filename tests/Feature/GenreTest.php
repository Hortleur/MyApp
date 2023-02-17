<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_genre_get_all()
    {
        $response = $this->get('/api/genre');

        $response->assertStatus(200);

        $response->assertJsonStructure();
    }

    public function test_genre_get_one()
    {
        $response = $this->get('/api/genre/id');

        $response->assertStatus(200);

        $response->assertJsonStructure();
    }
}
