<?php

namespace base\exceptions;

use base\enums\PayboxCodeEnum;
use Exception;

class CantPerformPaymentException extends Exception
{
    protected $statusCode = PayboxCodeEnum::PAYMENT_ERROR;

    protected $errorMessage = [
        "uz" => PayboxCodeEnum::LABELS[PayboxCodeEnum::PAYMENT_ERROR],
        "ru" => PayboxCodeEnum::LABELS[PayboxCodeEnum::PAYMENT_ERROR],
        "en" => PayboxCodeEnum::LABELS[PayboxCodeEnum::PAYMENT_ERROR]
    ];

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getErrorMessages()
    {
        return $this->errorMessage;
    }
}