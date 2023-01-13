<?php

namespace base\requests;

class Request
{
    protected $data;

    public static function load()
    {
        $post = \Yii::$app->request->post();

        $request = new self();
        $request->data = $post;

        return $request;
    }

    public function getParams(): RequestParams
    {
        return new RequestParams($this->data);
    }
}