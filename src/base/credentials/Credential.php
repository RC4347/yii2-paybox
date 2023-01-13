<?php

namespace base\credentials;

abstract class Credential
{
    abstract public function getMerchantId(): string;

    abstract public function getMerchantSecret(): string;

    abstract public function getMerchantSecretPayout(): string;

    public function getBaseUrl(): string
    {
        return 'https://api.paybox.money';
    }
}