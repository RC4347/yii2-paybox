<?php

namespace example\models;

/**
 * @property integer $id
 * @property string $name
 * @property string $amount
 * @property string $status
 */
class Example extends \yii\db\ActiveRecord
{
    public const WAITING = 1;
    public const PAID = 2;

    public static function tableName()
    {
        return "{{%example}}";
    }
}