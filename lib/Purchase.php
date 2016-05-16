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
   * @return Collection of Purchase
   */
  public static function all($params = null, $opts = null)
  {
    return self::_all($params, $opts);
  }
  /**
   * @param array|null $params
   * @param array|string|null $opts
   *
   * @return Purchase The created purchase.
   */
  public static function create($params = null, $opts = null)
  {
    return self::_create($params, $opts);
  }

  /**
   * @param array|null $params
   * @param array|string|null $opts
   *
   * @return Purchase The reserve gamekey.
   */
  public static function reserve($params = null, $opts = null)
  {
    return self::_post('/reserve', $params, $opts);
  }

  /**
   * @param array|null $params
   * @param array|string|null $opts
   *
   * @return Purchase The refund gamekey.
   */
  public static function refund($params = null, $opts = null)
  {
    return self::_post('/refund', $params, $opts);
  }


}