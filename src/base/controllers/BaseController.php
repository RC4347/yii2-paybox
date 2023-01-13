<?php

namespace base\controllers;

use base\credentials\Credential;
use yii\web\Controller;

/**
 *
 * @property-read Credential $credentials
 */
abstract class BaseController extends Controller
{
    abstract public function actionCreateTransaction();
}