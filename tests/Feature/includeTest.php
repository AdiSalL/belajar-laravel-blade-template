<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class includeTest extends TestCase
{
    public function testInclude() {
        $this->view("include", [])
        ->assertSeeText("adisalafudin")
        ->assertSeeText("Selamat Datang Di Web");

        $this->view("include", ["title" => "eko"])
        ->assertSeeText("eko")
        ->assertSeeText("Selamat Datang Di Web");
    }

    public function testLayout() {
        $this->view("include", [])
        ->assertSeeText("adisalafudin")
        ->assertSeeText("Selamat datang di website kami")
        ->assertSeeText("Selamat Datang Di Web");

        $this->view("include", ["title" => "eko"])
        ->assertSeeText("eko")
        ->assertSeeText("Selamat datang di website kami")
        ->assertSeeText("Selamat Datang Di Web");
    }

}
