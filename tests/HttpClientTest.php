<?php

use Mockery as M;

class HttpClientTest extends PHPUnit_Framework_TestCase
{
    public function testHttpClient()
    {
        $httpClient = new Picoss\SMoney\HttpClient(null, null);

        $this->assertInstanceOf('GuzzleHttp\Client', $httpClient->getClient());
    }
}