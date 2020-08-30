<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class updateTicketTiming extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response= $this->json('PUT', 'ticekt/{id}', ['id' => '3', 'time'=>'2020-10-18 22:00:00',])
             ->seeJson([
                 'id' => 3,
                 'name' => 'Nothing',
                 'number'=>'1234567890', 
                 'time'=>'2020-10-18 22:00:00',
             ]);
        $response->assertStatus(200);
    }
}
