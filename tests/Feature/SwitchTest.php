<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testSwitch() {
        $this->view("switch", ["value" => "A"])->assertSeeText("Memuaskan");

        $this->view("switch", ["value" => "B"])->assertSeeText("Bagus");
        
        $this->view("switch", ["value" => "C"])->assertSeeText("Mengulang");
        
        $this->view("switch", ["value" => ""])->assertSeeText("Tidak Lulus");
  
    }
}
