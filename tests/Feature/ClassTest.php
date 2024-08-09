<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    public function testClass() {
        $this->view("class", ["hobbies" => [
            [
                "name" => "Hobby 1",
                "love" => true
            ],
            [
                "name" => "Hobby 2",
                "love" => false
            ],
        ]])->assertSee("<li class='bold colorful'>1. Hobby 1</li>", false)
        ->assertSee("<li class='bold'>2. Hobby 2</li>", false)
        ;
    }
}
