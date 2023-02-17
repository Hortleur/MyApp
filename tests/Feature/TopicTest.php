<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TopicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_topic_get_all()
    {
        $response = $this->get('/api/topic');

        $response->assertStatus(200);

        $response->assertJsonStructure();
    }

    public function test_topic_get_one()
    {
        $response = $this->get('/api/topic/{id}');

        $response->assertStatus(200);

        $response->assertJsonStructure();
    }
}
