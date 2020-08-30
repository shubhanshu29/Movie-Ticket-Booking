<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteTicket extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('DELETE', 'ticekt/{ticket}', ['id' => '7'])
        ->seeJson([
            1
        ]);;

        $response->assertStatus(204);
    }
}
