<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
  public function testGetEnv(){
    $youtube = env('YOUTUBE');

    self::assertEquals('Raihan AM', $youtube);
  }
    

  public function testDefaultEnv(){
    $author = env('AUTHOR','raihan');

    self::assertEquals('raihan', $author);
  }
}
