<?php

namespace base\requests;

use base\exceptions\BaseException;
use Exception;
use yii\helpers\ArrayHelper;

class RequestParams
{
    protected $data;
    protected string $prefix = 'pg_';

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @throws BaseException
     */
    public function getOrderId()
    {
        return $this->get('order_id');
    }

    /**
     * @throws BaseException
     * @throws Exception
     */
    protected function get($key)
    {
        $value = ArrayHelper::getValue($this->data, $this->prefix . $key);

        if (null === $value) {
            throw new BaseException("$key not found in request");
        }

        return $value;
    }

    /**
     * @throws BaseException
     */
    public function getId()
    {
        return $this->get('payment_id');
    }

    /**
     * @throws BaseException
     */
    public function getAmount()
    {
        return $this->get('amount');
    }

    /**
     * @throws BaseException
     */
    public function getDate()
    {
        return $this->get('payment_date');
    }

    /**
     * @throws BaseException
     */
    public function getResult()
    {
        return $this->get('result');
    }

    /**
     * @throws BaseException
     */
    public function getDescription()
    {
        return $this->get('description');
    }

    /**
     * @throws BaseException
     */
    public function getCurrency()
    {
        return $this->get('currency');
    }

    /**
     * @throws BaseException
     */
    public function getCanReject()
    {
        return $this->get('can_reject');
    }

    /**
     * @throws BaseException
     */
    public function getCaptured()
    {
        return $this->get('captured');
    }

    /**
     * @throws BaseException
     */
    public function getPaymentMethod()
    {
        return $this->get('payment_method');
    }

    /**
     * @throws BaseException
     */
    public function getCardPan()
    {
        return $this->get('card_pan');
    }

    /**
     * @throws BaseException
     */
    public function getCardExp()
    {
        return $this->get('card_exp');
    }

    /**
     * @throws BaseException
     */
    public function getCardOwner()
    {
        return $this->get('card_owner');
    }

    /**
     * @throws BaseException
     */
    public function getCardBrand()
    {
        return $this->get('card_brand');
    }

    /**
     * @throws BaseException
     */
    public function getSalt()
    {
        return $this->get('salt');
    }

    /**
     * @throws BaseException
     */
    public function getSig()
    {
        return $this->get('sig');
    }
}