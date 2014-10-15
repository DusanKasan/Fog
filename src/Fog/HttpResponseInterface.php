<?php

namespace Fog;

interface HttpResponseInterface
{
    /**
     * @return int
     */
    public function getStatusCode();

    /**
     * @return string
     */
    public function getBody();
} 