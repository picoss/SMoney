<?php

class SMoneyApiTest extends PHPUnit_Framework_TestCase
{
    /**
     * smoneyApi
     *
     * @var \Picoss\SMoney\SMoneyApi
     */
    private $smoneyApi;

    public function setUp()
    {
        $httpClient = new \Picoss\SMoney\HttpClient(null, null);

        $this->smoneyApi = new Picoss\SMoney\SMoneyApi($httpClient);
    }

    public function testSMoneyApiRequiresHttpClient()
    {
        $this->setExpectedException('PHPUnit_Framework_Error');

        $c = new Picoss\SMoney\SMoneyApi(null);
    }

    public function testSMoneyApiUser()
    {
        $apiUser = $this->smoneyApi->user();
        $this->assertInstanceOf('Picoss\SMoney\Api\ApiUser', $apiUser);
    }
}