<?php
namespace Ads;
class ProductTest extends TestCase
{
  public function testTitleAttribute()
  {
    self::authorizeFromEnv();
    $products = Product::all();
  }
}