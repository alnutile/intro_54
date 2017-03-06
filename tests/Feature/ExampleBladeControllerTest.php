<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleBladeControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testViewHasContent()
    {
        $this->get('/example/controller/bar')->assertSee('bar');
    }
}
