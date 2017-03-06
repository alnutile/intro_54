<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleApiControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAPIExample()
    {

        $response = $this->json('GET', '/api/example/foo');

        //@NOTE quick way to see what is going on
        //dd($response->getContent());

        $response
            ->assertStatus(200)
            ->assertJson([
                'key' => 'foo',
            ]);
    }
}
