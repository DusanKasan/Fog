<?php

use Fog\AbstractRequest;
use Fog\HttpMethod;
use Fog\HttpResponseInterface;

class TestRequest extends AbstractRequest
{
    function __construct()
    {
        parent::__construct(
            'http://google.com',
            new HttpMethod(HttpMethod::GET)
        );
    }


    /**
     * @param HttpResponseInterface $http_response
     *
     * @return string
     */
    public function buildResponse(HttpResponseInterface $http_response)
    {
        return $http_response->getBody();
    }
}