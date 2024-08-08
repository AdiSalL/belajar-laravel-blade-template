<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class forTest extends TestCase
{
    public function testFor() {
    $this->get("for-loop", ["limit" => 10])
    ->assertSeeText("1")
    ->assertSeeText("2")
    ->assertSeeText("3")
    ->assertSeeText("4")
    ->assertSeeText("5")
    ->assertSeeText("6")
    ->assertSeeText("7")
    ->assertSeeText("8")
    ->assertSeeText("9")
    ->assertSeeText("10");
    }

    public function testForEach() {
        $this->view("forEach", ["hobbies" => ["Gaming", "Coding"]])->assertSeeText("Gaming")->assertSeeText("Coding");
    }

    public function testForElse() {
        $this->view("forElse", ["hobbies" => ["Gaming", "Coding"]])->assertSeeText("Gaming");
        $this->view("forElse", ["hobbies" => []])->assertSeeText("No Hobbies");
        
    }
}
