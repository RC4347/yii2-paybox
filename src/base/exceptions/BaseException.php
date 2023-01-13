<?php

namespace base\exceptions;

use base\enums\PayboxCodeEnum;
use Exception;

class BaseException extends Exception
{
    protected $statusCode = PayboxCodeEnum::GENERAL_ERROR;

    protected $errorMessage = [
        "uz" => PayboxCodeEnum::LABELS[PayboxCodeEnum::GENERAL_ERROR],
        "ru" => PayboxCodeEnum::LABELS[PayboxCodeEnum::GENERAL_ERROR],
        "en" => PayboxCodeEnum::LABELS[PayboxCodeEnum::GENERAL_ERROR]
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