<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello() 
    {
        $this->get("/hello")
        ->assertSeeText("adi");
    }

    public function testHelloWorld() 
    {
        $this->get("/world")
        ->assertSeeText("laravel");
    }

    public function testHelloView() 
    {
        $this->view("/hello", ["name" => "adi"])
        ->assertSeeText("adi");
    }

}
