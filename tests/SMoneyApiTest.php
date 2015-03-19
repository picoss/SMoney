<?php

use Mockery as M;

class SMoneyApiTest extends PHPUnit_Framework_TestCase
{
    private $smoneyApi;

    public function setUp()
    {
        $httpClient = new \Picoss\SMoney\HttpClient(null, null);
        $mock = new \GuzzleHttp\Subscriber\Mock(
            [
                new \GuzzleHttp\Message\Response(200),
                'HTTP/1.1 200 OK\r\nContent-Length: 0\r\n\r\n'
            ]
        );
//        $httpClient->getClient()->getEmitter()->attach($mock);

        $this->smoneyApi = new Picoss\SMoney\SMoneyApi($httpClient);
    }

    public function testSMoneyApiRequiresHttpClient()
    {
        $this->setExpectedException('PHPUnit_Framework_Error');

        $c = new Picoss\SMoney\SMoneyApi(null);
    }

    public function testGetUserApi()
    {
        $userApi = $this->smoneyApi->user();
        $this->assertInstanceOf('Picoss\SMoney\Api\ApiUser', $userApi);

    }
}