<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testEchoHandler extends TestCase
{
    public function testEcho() {
        $person = new Person;
        $person->name = "Adi";
        $person->age = "18";
        $this->view("echo", ["person" => $person])
        ->assertSeeText("Adi : 18");
    }
}
