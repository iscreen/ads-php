<?php
namespace Ads\Error;
class InvalidRequest extends Base
{
  public function __construct(
    $message,
    $adsParam,
    $httpStatus = null,
    $httpBody = null,
    $jsonBody = null,
    $httpHeaders = null
  ) {
    parent::__construct($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders);
    $this->adsParam = $adsParam;
  }
  public function getAdsParam()
  {
    return $this->adsParam;
  }
}
