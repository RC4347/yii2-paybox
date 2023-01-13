<?php

namespace base\exceptions;

use base\enums\PayboxCodeEnum;
use Exception;

class WrongAmountException extends Exception
{
    protected $statusCode = PayboxCodeEnum::INCORRECT_AMOUNT;

    protected $errorMessage = [
        "uz" => PayboxCodeEnum::LABELS[PayboxCodeEnum::INCORRECT_AMOUNT],
        "ru" => PayboxCodeEnum::LABELS[PayboxCodeEnum::INCORRECT_AMOUNT],
        "en" => PayboxCodeEnum::LABELS[PayboxCodeEnum::INCORRECT_AMOUNT]
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