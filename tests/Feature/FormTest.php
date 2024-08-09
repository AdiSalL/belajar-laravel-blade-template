<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm() {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "John Doe",
            "admin" => true
        ]])
        ->assertSee("checked")
        ->assertSee("John Doe")
        ->assertDontSee("readonly");
    }

    public function testFormFalse() {
        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "John Doe",
            "admin" => false
        ]])
        ->assertDontSee("checked")
        ->assertSee("John Doe")
        ->assertSee("readonly");
    }
}
