<?php

namespace Fog;

use Guzzle\Http\Client;

class Fog
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client = null)
    {
        if ($client == null) {
            $client = new Client();
        }

        $this->client = $client;
    }

    /**
     * Sends generic requests
     *
     * @param RequestInterface $request
     * @return mixed
     */
    public function sendRequest(RequestInterface $request)
    {

        $guzzle_request = $this->client->createRequest(
            $request->getMethod(),
            $request->getUri(),
            $request->getHeaders(),
            $request->getBody()
        );

        $guzzle_response = $this->client->send($guzzle_request);

        $http_response = new HttpResponse(
            $guzzle_response->getBody(TRUE),
            $guzzle_response->getStatusCode()
        );

        return $request->buildResponse($http_response);
    }
} 