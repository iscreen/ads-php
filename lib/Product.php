<?php
namespace Ads;
class Product extends ApiResource
{
  /**
   * @param string $id The ID of the customer to retrieve.
   * @param array|string|null $opts
   *
   * @return Customer
   */
  public static function retrieve($id, $opts = null)
  {
      return self::_retrieve($id, $opts);
  }
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