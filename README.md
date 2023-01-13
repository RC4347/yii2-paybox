# Package for Paybox Payment

[![Latest Stable Version](https://img.shields.io/packagist/v/rc4347/yii2-paybox.svg)](https://packagist.org/packages/rc4347/yii2-paybox)
[![Total Downloads](https://img.shields.io/packagist/dt/rc4347/yii2-paybox.svg)](https://packagist.org/packages/rc4347/yii2-paybox)

## Getting Started

### Installation

The PHP Service can be installed via [Composer](http://getcomposer.org) by requiring the
`rc4347/yii2-paybox` package in your project's `composer.json`.

```json
{
    "require": {
        "rc4347/yii2-paybox": "^0.0.3"
    }
}
```

## Usage

### Create credentials

```php
<?php

class ExampleCredentials extends RC4347\Yii2Paybox\base\credentials\Credential
{
    public function getMerchantId(): string
    {
        return "XXXXXX";
    }

    public function getMerchantSecret(): string
    {
        return "XXXXXXXXXXXXXXXX";
    }

    public function getMerchantSecretPayout(): string
    {
        return "XXXXXXXXXXXXXXXX";
    }
}
```
### Create Initialization Page Config
```php
use RC4347\Yii2Paybox\base\config\InitializationPageConfig;

$config = new InitializationPageConfig(1, 100, 'https://example.com/result');
```
### Initialization Page Service 
```php
use RC4347\Yii2Paybox\services\InitializationPageService;

$service = InitializationPageService($config, new ExampleCredentials());
$result = $service->run();
# get redirect url
$redirect_url = $service->getRedirectUrl($result);
return $redirect_url;
```
## Resources

For more information:

* [Paybox API docs](https://docs.freedompay.money/?lang=en#/)