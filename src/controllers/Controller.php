<?php

namespace controllers;

use base\controllers\BaseController;
use base\credentials\Credential;
use base\exceptions\BaseException;
use base\exceptions\CantPerformPaymentException;
use base\exceptions\WrongAmountException;
use base\requests\Request;
use resources\PayboxResources;
use Yii;
use yii\db\ActiveRecord;
use yii\web\Response;

abstract class Controller extends BaseController
{
    protected Request $request;

    /**
     * @return Credential
     */
    abstract public function getCredentials(): Credential;

    public function init()
    {
        $request = Request::load();
        $this->request = $request;
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->request->parsers['application/json'] = 'yii\web\JsonParser';
        $this->enableCsrfValidation = false;
        parent::init();
    }

    /**
     * @throws BaseException
     * @throws WrongAmountException
     * @throws CantPerformPaymentException
     */
    public function actionCreateTransaction()
    {
        $paymentId = $this->request->getParams()->getId();
        $amount = $this->request->getParams()->getAmount();
        $model = $this->getModelById($this->request->getParams()->getOrderId());
        if (!$this->checkTransaction($model, $amount)) {
            throw new WrongAmountException();
        }

        $payment = PayboxResources::findOne(['payment_id' => $paymentId]);

        if (!empty($payment)) {
            if ($payment->captured) {
                throw new CantPerformPaymentException();
            }
        } else {
            $payment = new PayboxResources();
            $payment->payment_id = (int)$paymentId;
            $payment->payment_method = $this->request->getParams()->getPaymentMethod();
            $payment->payment_date = $this->request->getParams()->getDate();
            $payment->amount = $amount;
            $payment->model_id = $model->id;
            $payment->model_type = get_class($model);
            $payment->captured = $this->request->getParams()->getCaptured();
            $payment->status = $this->request->getParams()->getResult();
            $payment->sig = $this->request->getParams()->getSig();
            $payment->salt = $this->request->getParams()->getSalt();
            $payment->card_pan = $this->request->getParams()->getCardPan();
            $payment->card_pan = $this->request->getParams()->getCardPan();
            $payment->card_owner = $this->request->getParams()->getCardOwner();
            $payment->card_pan = $this->request->getParams()->getCardPan();
            $payment->card_brand = $this->request->getParams()->getCardBrand();
            $payment->card_exp = $this->request->getParams()->getCardExp();
            $payment->can_reject = $this->request->getParams()->getCanReject();
            $payment->currency = $this->request->getParams()->getCurrency();
            $payment->description = $this->request->getParams()->getDescription();

            $payment->save();
        }

        if ($payment->status) {
            $this->performTransaction($model);
        }

        return $payment;
    }

    /**
     * @param $id
     * @return mixed
     */
    abstract public function getModelById($id): ActiveRecord;

    /**
     * @param $model
     * @param $amount
     * @return bool
     */
    abstract protected function checkTransaction($model, $amount): bool;

    /**
     * @param $model
     * @return void
     */
    abstract protected function performTransaction($model);
}