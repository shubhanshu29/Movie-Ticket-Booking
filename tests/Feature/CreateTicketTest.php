<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTicketTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->json('POST', 'ticekt/create', ['name' => 'Himanshu', 'number'=>'1919191919', 'time'=>'2020-10-19 12:00:00',])
             ->seeJson([
                 'id' => 7,
                 'name' => 'Himanshu',
                 'number'=>'1919191919', 
                 'time'=>'2020-10-19 12:00:00',
             ]);
        $response->assertStatus(201);
    }
}
