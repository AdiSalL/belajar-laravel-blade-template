<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ifTest extends TestCase
{
    public function testIfNone() {
        $this->view("if", ["hobbies" => []])
        ->assertSeeText("I Dont have any hobbies", false);

        $this->view("if", ["hobbies" => ["makan"]])
        ->assertSeeText("I Have one hobbies");

        $this->view("if", ["hobbies" => ["makan", "gaming"]])
        ->assertSeeText("I Have multiple hobbies");
    }


}
