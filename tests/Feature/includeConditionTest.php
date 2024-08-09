<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class includeConditionTest extends TestCase
{
    public function testIncludeCondition() {
        $this->view("include-header", [
            "user" => [
                "name" => "John Doe",
                "owner" => true,
            ]
        ])
        ->assertSeeText("Selamat Datang Owner")
        ->assertSeeText("Selamat datang John Doe");
    
        $this->view("include-header", [
            "user" => [
                "name" => "John Doe",
                "owner" => false,
            ]
        ])
        ->assertDontSeeText("Selamat Datang Owner")
        ->assertSeeText("Selamat datang John Doe");
    
    }
}
