<?php
namespace Ads;
/**
 * Base class for Ads test cases, provides some utility methods for creating
 * objects.
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    const API_KEY = 'OTEwMDA6a1I2UkFTelJhUS1lcWNZSkw1blE=';
    const API_BASE = 'http://localhost:3000/wl';
    private $mock;
    protected static function authorizeFromEnv()
    {
        $apiKey = getenv('ADS_API_KEY');
        if (!$apiKey) {
            $apiKey = self::API_KEY;
        }

        Ads::setApiKey($apiKey);
        Ads::setApiBase(self::API_BASE);
    }
    protected function setUp()
    {
        ApiRequestor::setHttpClient(HttpClient\CurlClient::instance());
        $this->mock = null;
        $this->call = 0;
    }
    protected function mockRequest($method, $path, $params = array(), $return = array('id' => 'myId'), $rcode = 200)
    {
        $mock = $this->setUpMockRequest();
        $mock->expects($this->at($this->call++))
             ->method('request')
             ->with(strtolower($method), 'https://api.atgames.net' . $path, $this->anything(), $params, false)
             ->willReturn(array(json_encode($return), $rcode, array()));
    }
    private function setUpMockRequest()
    {
        if (!$this->mock) {
            self::authorizeFromEnv();
            $this->mock = $this->getMock('\Ads\HttpClient\ClientInterface');
            ApiRequestor::setHttpClient($this->mock);
        }
        return $this->mock;
    }

    /**
     * Genereate a semi-random string
     */
    protected static function generateRandomString($length = 24)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTU';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    /**
     * Generate a semi-random email.
     */
    protected static function generateRandomEmail($domain = 'bar.com')
    {
        return self::generateRandomString().'@'.$domain;
    }

}
