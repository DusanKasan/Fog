<?php

namespace Fog;

class HttpResponse implements HttpResponseInterface
{
    private $body;
    private $statusCode;

    /**
     * @param string $body
     * @param int $statusCode
     */
    function __construct($body, $statusCode)
    {
        $this->body = $body;
        $this->statusCode = $statusCode;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
} 