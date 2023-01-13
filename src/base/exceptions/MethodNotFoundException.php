<?php

namespace base\exceptions;

use base\enums\PayboxCodeEnum;

class MethodNotFoundException extends \Exception
{
    protected $statusCode = PayboxCodeEnum::NOT_ACTIVE_METHOD;

    protected $errorMessage = [
        "uz" => PayboxCodeEnum::LABELS[PayboxCodeEnum::NOT_ACTIVE_METHOD],
        "ru" => PayboxCodeEnum::LABELS[PayboxCodeEnum::NOT_ACTIVE_METHOD],
        "en" => PayboxCodeEnum::LABELS[PayboxCodeEnum::NOT_ACTIVE_METHOD]
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