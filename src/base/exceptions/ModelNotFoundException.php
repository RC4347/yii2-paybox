<?php

namespace base\exceptions;

use base\enums\PayboxCodeEnum;

class ModelNotFoundException extends \Exception
{
    protected $statusCode = PayboxCodeEnum::MODEL_NOT_FOUND;

    protected $errorMessage = [
        "uz" => PayboxCodeEnum::LABELS[PayboxCodeEnum::MODEL_NOT_FOUND],
        "ru" => PayboxCodeEnum::LABELS[PayboxCodeEnum::MODEL_NOT_FOUND],
        "en" => PayboxCodeEnum::LABELS[PayboxCodeEnum::MODEL_NOT_FOUND]
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