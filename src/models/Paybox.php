<?php

namespace models;

use DateTime;
use yii\db\ActiveRecord;

/**
 * @property integer $id
 * @property string $model_type
 * @property integer $model_id
 * @property integer $amount
 * @property integer $payment_id
 * @property DateTime $payment_date
 * @property string $currency
 * @property integer $status
 * @property integer $can_reject
 * @property integer $captured
 * @property integer $payment_method
 * @property string $card_pan
 * @property string $card_exp
 * @property string $card_owner
 * @property string $card_brand
 * @property string $salt
 * @property string $sig
 * @property string $description
 */
class Paybox extends ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%paybox}}";
    }
}