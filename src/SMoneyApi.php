<?php

namespace Picoss\SMoney;

use Picoss\SMoney\Api\ApiBankAccount;
use Picoss\SMoney\Api\ApiCardPayment;
use Picoss\SMoney\Api\ApiMoneyOut;
use Picoss\SMoney\Api\ApiPayment;
use Picoss\SMoney\Api\ApiSubAccount;
use Picoss\SMoney\Api\ApiUser;

class SMoneyApi
{
    /**
     * The http client instance
     *
     * @var HttpClient
     */
    protected $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * Get new ApiUser instance
     *
     * @return ApiUser
     */
    public function user()
    {
        return new ApiUser($this);
    }

    /**
     * Get new ApiSubAccount instance
     *
     * @return ApiSubAccount
     */
    public function subAccount()
    {
        return new ApiSubAccount($this);
    }

    /**
     * Get new ApiBankAccount instance
     *
     * @return ApiBankAccount
     */
    public function bankAccount()
    {
        return new ApiBankAccount($this);
    }

    /**
     * Get new ApiCardPayment instance
     *
     * @return ApiCardPayment
     */
    public function cardPayment()
    {
        return new ApiCardPayment($this);
    }

    /**
     * Get new ApiPayment instance
     *
     * @return ApiPayment
     */
    public function payment()
    {
        return new ApiPayment($this);
    }

    /**
     * Get new ApiMoneyOut instance
     *
     * @return ApiMoneyOut
     */
    public function moneyOut()
    {
        return new ApiMoneyOut($this);
    }
}