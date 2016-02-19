# ADS PHP bindings


## Requirements

PHP 5.3.3 and later.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require atgames/ads-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://gitlab.direct2drive.com/atgames/ads-php releases). Then, to use the bindings, include the `init.php` file.

```php
require_once('/path/to/ads-php/init.php');
```

## Getting Started

Simple usage looks like:

```php
\Ads\Ads::setApiKey('OTEwMDA6a1I2UkFTelJhUS1lcWNZSkw1blE=');
$data = \Ads\Product::all();
echo $data;
```

## Documentation

Please see https://api.atgames.net/docs/api for up-to-date documentation.

## Custom Request Timeouts

To modify request timeouts (connect or total, in seconds) you'll need to tell the API client to use a CurlClient other than its default. You'll set the timeouts in that CurlClient.

```php
// set up your tweaked Curl client
$curl = new \Ads\HttpClient\CurlClient();
$curl->setTimeout(10); // default is \Ads\HttpClient\CurlClient::DEFAULT_TIMEOUT
$curl->setConnectTimeout(5); // default is \Ads\HttpClient\CurlClient::DEFAULT_CONNECT_TIMEOUT

echo $curl->getTimeout(); // 10
echo $curl->getConnectTimeout(); // 5

// tell Ads to use the tweaked client
\Ads\ApiRequestor::setHttpClient($curl);

// use the Ads API client as you normally would
```

## Development

Install dependencies:

``` bash
composer install
```

## Tests

Install dependencies as mentioned above (which will resolve [PHPUnit](http://packagist.org/packages/phpunit/phpunit)), then you can run the test suite:

```bash
./vendor/bin/phpunit
```

Or to run an individual test file:

```bash
./vendor/bin/phpunit tests/UtilTest.php
```