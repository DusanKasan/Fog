<?php

namespace Fog;

interface RequestInterface
{
    /**
     * @return string
     */
    public function getUri();

    /**
     * @return HttpMethod
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getBody();

    /**
     * @return array
     */
    public function getHeaders(); //@todo: should be separate object

    /**
     * @param HttpResponseInterface $http_response
     *
     * @return mixed
     */
    public function buildResponse(HttpResponseInterface $http_response);
}