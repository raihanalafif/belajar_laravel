<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig(){
        $firstName=config("contoh.author.first");
        $lastName=config("contoh.author.last");
        $email=config("contoh.email");
        $web=config("contoh.web");

        self::assertEquals('Raihan', $firstName);
        self::assertEquals('Muyassar', $lastName);
        self::assertEquals('raihann.iann@gmail.com', $email);
        self::assertEquals('nothing', $web);
    }
}
