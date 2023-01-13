<?php

namespace example;

class ExampleCredentials extends \base\credentials\Credential
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