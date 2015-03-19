<?php

namespace Picoss\SMoney;

use Picoss\SMoney\Api\ApiUser;

class SMoneyApi
{
    protected $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function user()
    {
        return new ApiUser($this);
    }
}