<?php

namespace resources;

use models\Paybox;

class PayboxResources extends Paybox
{
    public function fields()
    {
        return [
            'id',
            'payment_date',
            'status',
            'captured',
            'payment_id',
            'payment_method'
        ];
    }
}