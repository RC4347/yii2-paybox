<?php

namespace migrations;

use yii\db\Migration;

class m17301_142927_create_paybox_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('paybox', [
            'id' => $this->primaryKey()->unsigned(),
            'model_type' => $this->string()->notNull(),
            'model_id' => $this->integer()->unsigned()->notNull(),
            'amount' => $this->integer()->notNull(),
            'payment_id' => $this->integer()->notNull(),
            'payment_date' => $this->dateTime(),
            'currency' => $this->string(5),
            'status' => $this->boolean()->defaultValue(0),
            'can_reject' => $this->boolean()->defaultValue(0),
            'captured' => $this->boolean()->defaultValue(0),
            'payment_method' => $this->string(),
            'card_pan' => $this->string(),
            'card_exp' => $this->string(),
            'card_owner' => $this->string(),
            'card_brand' => $this->string(),
            'salt' => $this->string(),
            'sig' => $this->string(),
            'description' => $this->text()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('paybox');
    }
}