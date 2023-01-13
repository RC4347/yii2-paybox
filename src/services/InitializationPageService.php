<?php

namespace services;

use base\config\InitializationPageConfig;
use base\credentials\Credential;
use base\enums\PayboxMethodEnum;
use base\exceptions\BaseException;
use base\services\BaseService;
use Exception;

class InitializationPageService extends BaseService
{
    public InitializationPageConfig $pageConfig;
    public string $initializationPageUrl = '/init_payment.php';
    public array $customParams;

    public function __construct(InitializationPageConfig $pageConfig, Credential $credential, array $customParams = [])
    {
        parent::__construct($credential);
        $this->pageConfig = $pageConfig;
        $this->customParams = $customParams;
    }

    public function getRequestBody(): array
    {
        $array = [
            'pg_merchant_id' => $this->credential->getMerchantId(),
            'pg_order_id' => $this->pageConfig->order_id,
            'pg_amount' => $this->pageConfig->amount,
            'pg_description' => $this->pageConfig->description,
            'pg_salt' => $this->pageConfig->salt,
            ...$this->customParams,
        ];
        if ($this->pageConfig->result_url) {
            $array['pg_result_url'] = $this->pageConfig->result_url;
        }
        $array['pg_sig'] = $this->generateSig($array);
        return $array;
    }

    /**
     * @throws BaseException
     * @throws Exception
     */
    public function getRedirectUrl($result): string
    {
        if ($result->pg_status == 'ok') {
            return strval($result->pg_redirect_url);
        }
        if ($result->pg_error_code) {
            if ($result->pg_error_description) {
                throw new Exception($result->pg_error_description);
            }
        }
        throw new BaseException();
    }

    public function getMethod(): string
    {
        return PayboxMethodEnum::PAYMENT_PAGE_INITIALIZATION;
    }

    public function getUrl(): string
    {
        return $this->initializationPageUrl;
    }
}