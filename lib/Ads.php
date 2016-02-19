<?php
namespace Ads;
class Ads
{
  // @var string The ADS API key to be used for requests.
  public static $apiKey;
  // @var string The base URL for the ADS API.
  public static $apiBase = 'https://api.atgames.net';
  // @var string The base URL for the ADS API uploads endpoint.
  public static $apiUploadBase = 'https://uploads.atgames.net';
  // @var string|null The version of the ADS API to use for requests.
  public static $apiVersion = null;
  // @var string|null The account ID for connected accounts requests.
  public static $accountId = null;
  // @var boolean Defaults to true.
  public static $verifySslCerts = true;
  const VERSION = '1.0.1';
  /**
   * @return string The API key used for requests.
   */
  public static function getApiKey()
  {
    return self::$apiKey;
  }
  /**
   * Sets the API key to be used for requests.
   *
   * @param string $apiKey
   */
  public static function setApiKey($apiKey)
  {
    self::$apiKey = $apiKey;
  }
  
  /**
   * Sets The base URL for the ADS API.
   *
   * @param string $apiBase
   */
  public static function setApiBase($apiBase)
  {
    self::$apiBase = $apiBase;
  }
  /**
   * @return string The API version used for requests. null if we're using the
   *  latest version.
   */
  public static function getApiVersion()
  {
    return self::$apiVersion;
  }
  /**
   * @param string $apiVersion The API version to use for requests.
   */
  public static function setApiVersion($apiVersion)
  {
    self::$apiVersion = $apiVersion;
  }
  /**
   * @return boolean
   */
  public static function getVerifySslCerts()
  {
    return self::$verifySslCerts;
  }
  /**
   * @param boolean $verify
   */
  public static function setVerifySslCerts($verify)
  {
    self::$verifySslCerts = $verify;
  }
  /**
   * @return string | null The ADS account ID for connected account
   *   requests.
   */
  public static function getAccountId()
  {
    return self::$accountId;
  }
  /**
   * @param string $accountId The ADS account ID to set for connected
   *   account requests.
   */
  public static function setAccountId($accountId)
  {
    self::$accountId = $accountId;
  }
}