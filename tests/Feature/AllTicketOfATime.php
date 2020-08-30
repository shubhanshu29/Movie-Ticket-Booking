<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AllTicketOfATime extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('GET', 'ticekt/{time}', ['time'=>'2020-10-18 22:00:00',])
            ->seeJson([
                'id' => 3,
                'name' => 'Nothing',
                'number'=>'1234567890', 
                'time'=>'2020-10-18 22:00:00',
            ]);

        $response->assertStatus(200);
    }
}
