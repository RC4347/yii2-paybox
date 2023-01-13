<?php

namespace example;

use base\credentials\Credential;
use base\exceptions\ModelNotFoundException;
use controllers\Controller;
use example\models\Example;
use yii\db\ActiveRecord;

class PayboxController extends Controller
{
    /**
     * @inheritDoc
     */
    public function getCredentials(): Credential
    {
        return new ExampleCredentials();
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getModelById($id): ActiveRecord
    {
        if (!isset($id)) {
            throw new ModelNotFoundException();
        }

        return Example::findOne(['id' => $id]);
    }

    /**
     * @param Example $model
     * @param $amount
     * @return bool
     */
    protected function checkTransaction($model, $amount): bool
    {
        return $model->amount * 100 == $amount;
    }

    protected function performTransaction($model)
    {
        $model->status = Example::PAID;
        $model->save(false);
    }
}