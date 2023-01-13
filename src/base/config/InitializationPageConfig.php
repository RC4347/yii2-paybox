<?php

namespace base\config;

class InitializationPageConfig
{
    public $order_id;
    public $amount;
    public string $description;
    public string $salt;
    public ?string $result_url;

    /**
     * @param $order_id
     * @param $amount
     * @param string|null $result_url
     * @param string $description
     * @param string $salt
     */
    public function __construct($order_id, $amount, string $result_url = null, string $description = 'Описание платежа', string $salt = 'molbulak')
    {
        $this->order_id = $order_id;
        $this->amount = $amount;
        $this->result_url = $result_url;
        $this->description = $description;
        $this->salt = $salt;
    }
}