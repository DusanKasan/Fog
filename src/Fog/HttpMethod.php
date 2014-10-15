<?php

namespace Fog;

use SplEnum;

class HttpMethod extends SplEnum
{
    const PUT = 'PUT';
    const DELETE = 'DELETE';
    const POST = 'POST';
    const GET = 'GET';

    /**
     * @param string $value HttpMethod const
     */
    public function __construct($value)
    {
        parent::__construct($value, $strict = true);
    }
}