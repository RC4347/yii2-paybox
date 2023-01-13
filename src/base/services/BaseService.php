<?php

namespace base\services;

use base\credentials\Credential;
use base\exceptions\BaseException;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use SimpleXMLElement;

abstract class BaseService
{
    public Credential $credential;

    public function __construct(Credential $credential)
    {
        $this->credential = $credential;
    }

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function run(): SimpleXMLElement
    {
        $client = new Client();
        $res = $client->request('POST', $this->getRequestUrl(), [
            'form_params' => $this->getRequestBody(),
        ]);
        if ($res->getStatusCode() == '200') {
            return new SimpleXMLElement($res->getBody());
        }
        throw new BaseException();
    }

    protected function generateSig(array $array): string
    {
        ksort($array);
        array_unshift($array, $this->getMethod());
        array_push($array, $this->credential->getMerchantSecret());
        $sig = md5(implode(';', $array));
        unset($array[0], $array[1]);

        return $sig;
    }

    private function getRequestUrl(): string
    {
        return $this->credential->getBaseUrl() . $this->getUrl();
    }

    abstract public function getMethod(): string;

    abstract public function getUrl(): string;

    abstract public function getRequestBody(): array;
}