<?php
namespace Ads;
class GenreTest extends TestCase
{
  public function testNameAttribute()
  {
    self::authorizeFromEnv();
    $all = Genre::all();
  }
}