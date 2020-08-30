<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserDetailsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->json('GET', 'ticekt/{id}', ['id' => '2'])
             ->seeJson([
                 'id' => 2,
             ]);
        $response->assertStatus(200);
    }
}
