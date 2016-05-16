<?php
namespace Ads;
class Purchase extends ApiResource
{
  /**
   * @param string $id The ID of the purchase to retrieve.
   * @param array|string|null $opts
   *
   * @return Purchase
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
  /**
   * @param array|null $params
   * @param array|string|null $opts
   *
   * @return Collection of GameKey
   */
  public static function create($params = null, $opts = null)
  {
    return self::_create($params, $opts);
  }
}