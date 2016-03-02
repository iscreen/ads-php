<?php
namespace Ads;
class GameKey extends ApiResource
{
  /**
   * @param array|null $params
   * @param array|string|null $opts
   *
   * @return Collection of Reserver result
   */
  public static function reserve($params = null, $opts = null)
  {
      return self::_reserve($params);
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