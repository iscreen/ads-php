<?php
namespace Ads;
class Product extends ApiResource
{
  
  /**
   * @param array|null $params
   * @param array|string|null $opts
   *
   * @return Collection of Products
   */
  public static function all($params = null, $opts = null)
  {
    return self::_all($params, $opts);
  }
}