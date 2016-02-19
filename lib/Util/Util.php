<?php
namespace Ads\Util;
use Ads\AdsObject;
abstract class Util
{
  /**
   * Whether the provided array (or other) is a list rather than a dictionary.
   *
   * @param array|mixed $array
   * @return boolean True if the given object is a list.
   */
  public static function isList($array)
  {
    if (!is_array($array)) {
      return false;
    }
    // TODO: generally incorrect, but it's correct given Ads's response
    foreach (array_keys($array) as $k) {
      if (!is_numeric($k)) {
        return false;
      }
    }
    return true;
  }
  /**
   * Recursively converts the PHP Ads object to an array.
   *
   * @param array $values The PHP Ads object to convert.
   * @return array
   */
  public static function convertAdsObjectToArray($values)
  {
    $results = array();
    foreach ($values as $k => $v) {
      // FIXME: this is an encapsulation violation
      if ($k[0] == '_') {
        continue;
      }
      if ($v instanceof AdsObject) {
        $results[$k] = $v->__toArray(true);
      } elseif (is_array($v)) {
        $results[$k] = self::convertAdsObjectToArray($v);
      } else {
        $results[$k] = $v;
      }
    }
    return $results;
  }
  /**
   * Converts a response from the Ads API to the corresponding PHP object.
   *
   * @param array $resp The response from the Ads API.
   * @param array $opts
   * @return AdsObject|array
   */
  public static function convertToAdsObject($resp, $opts)
  {
    $types = array(
      'list' => 'Ads\\Collection',
      'product' => 'Ads\\Product',
    );
    echo "dump resp\n";
    var_dump($resp);
    echo "\n";
    if (self::isList($resp)) {
      echo "convertToAdsObject => self::isList\n";
      $mapped = array();
      foreach ($resp as $i) {
        array_push($mapped, self::convertToAdsObject($i, $opts));
      }
      return $mapped;
    } elseif (is_array($resp)) {
      $class = 'Ads\\Collection';
      return $class::constructFrom($resp, $opts);
    } else {
      return $resp;
    }
  }
  /**
   * @param string|mixed $value A string to UTF8-encode.
   *
   * @return string|mixed The UTF8-encoded string, or the object passed in if
   *  it wasn't a string.
   */
  public static function utf8($value)
  {
    if (is_string($value) && mb_detect_encoding($value, "UTF-8", true) != "UTF-8") {
      return utf8_encode($value);
    } else {
      return $value;
    }
  }
}