<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testEnv extends TestCase
{
    public function testEnv() :void {
        $this->view("env", [])
        ->assertSeeText("This is testing environment");
    }
}
