<?php

namespace Fog;

use Garoevans\PhpEnum\Reflection\Enum;

class HttpMethod extends Enum
{
    /**
     * A dummy default, value since constructor parameter is required.
     */
    const __default = self::GET;

    const PUT = 'PUT';
    const DELETE = 'DELETE';
    const POST = 'POST';
    const GET = 'GET';

    /**
     * @param string $enum constant of this class
     */
    public function __construct($enum)
    {
        parent::__construct($enum, TRUE);
    }
}