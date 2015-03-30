<?php

namespace Picoss\SMoney;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class HttpClient
{
    /**
     * The API access token
     *
     * @var string $accessToken
     */
    protected $accessToken;

    /**
     * The API base url
     *
     * @var string $baseUrl
     */
    protected $baseUrl;

    /**
     * The HTTP client
     *
     * @var Client $client
     */
    private $client;

    /**
     * Create a new http client instance
     *
     * @param string $accessToken
     * @param string $baseUrl
     * @return void
     */
    public function __construct($accessToken, $baseUrl)
    {
        $this->accessToken = $accessToken;
        $this->baseUrl = $baseUrl;
    }

    /**
     * Return an HTTP client instance
     *
     * @return Client
     */
    public function getClient(array $options = [])
    {
        if ($this->client) {
            return $this->client;
        }

        $this->client = new Client(
            [
                'base_url' => $this->baseUrl,
                'defaults' => [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->accessToken,
                    ]
                ]
            ]
        );

        return $this->client;
    }

    /**
     * Send a GET request
     *
     * @param string $url
     * @param array $params
     * @param array $headers
     * @return Guzzle\Http\Message\Response
     */
    public function get($url, array $params = [], array $headers = [])
    {
        $request = $this->getClient()->createRequest('GET', $url);
        $request->addHeaders($headers);

        $query = $request->getQuery();

        foreach ($params as $key => $value) {
            $query->set($key, $value);
        }

        return $this->sendRequest($request);
    }

    /**
     * Send a POST request
     *
     * @param string $url
     * @param string $body
     * @param array $headers
     * @return Guzzle\Http\Message\Response
     */
    public function post($url, $body, array $headers = [])
    {
        $request = $this->getClient()->createRequest('POST', $url, ['body' => $body]);
        $request->addHeaders($headers);

        return $this->sendRequest($request);
    }

    /**
     * Send a PUT request
     *
     * @param string $url
     * @param string $body
     * @param array $headers
     * @return Guzzle\Http\Message\Response
     */
    public function put($url, $body, array $headers = [])
    {
        $request = $this->getClient()->createRequest('PUT', $url, ['body' => $body]);
        $request->addHeaders($headers);

        return $this->sendRequest($request);
    }

    /**
     * Send a DELETE request
     *
     * @param string $url
     * @param array $headers
     * @return Guzzle\Http\Message\Response
     */
    public function delete($url, array $headers = [])
    {
        $request = $this->getClient()->createRequest('DELETE', $url);
        $request->addHeaders($headers);

        return $this->sendRequest($request);
    }

    private function sendRequest($request)
    {
            return $this->getClient()->send($request);
//        try {
//            return $this->getClient()->send($request);
//        }
//        catch(ClientException $e) {
//            var_dump(get_class($e));
//            var_dump($e->getRe);
//        }
//        catch (RequestException $e) {
//            echo 'Request: ' . $e->getRequest() . "\n";
//            if ($e->hasResponse()) {
//                echo 'Response: ' . $e->getResponse() . "\n";
//            }
//        }
    }
}