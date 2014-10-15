<?php

namespace Fog;

/**
 * Helper method to ease creation of new requests.
 *
 * @package Fog
 */
abstract class AbstractRequest implements RequestInterface
{
    /** @var string */
    protected $uri;

    /** @var HttpMethod */
    protected $method;

    /** @var string */
    protected $body;

    /** @var array */
    protected $headers;

    /**
     * @param $uri
     * @param $method
     * @param string $body
     * @param array $headers
     */
    function __construct($uri, $method, $body = '', $headers = array())
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->body = $body;
        $this->headers = $headers;
    }

    /**
     * @param HttpResponseInterface $http_response
     *
     * @return mixed
     */
    public abstract function buildResponse(HttpResponseInterface $http_response);

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return \Fog\HttpMethod
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
}