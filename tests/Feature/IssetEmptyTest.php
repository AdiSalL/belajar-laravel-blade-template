<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty() {
        $this->view("isset-empty", [])
        ->assertDontSeeText("Hello")
        ->assertDontSeeText("I don't have any hobbies.", true);
        
        $this->view("isset-empty", ["name" => "Adi"])
        ->assertSeeText("Hello, my name is Adi")
        ->assertDontSeeText("I don't have any hobbies.", true);
        
        $this->view("isset-empty", ["name" => "Adi", "hobbies" => ["Coding"]])
        ->assertSeeText("Hello, my name is Adi")
        ->assertDontSeeText("I don't have any hobbies.", false);
    
    }
}
