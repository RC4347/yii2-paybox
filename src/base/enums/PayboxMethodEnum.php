<?php

namespace base\enums;

interface PayboxMethodEnum
{
    public const PAYMENT_PAGE_INITIALIZATION = 'init_payment.php';

    public const VALUES = [
        self::PAYMENT_PAGE_INITIALIZATION,
    ];
}