<?php

namespace Fog;

use Garoevans\PhpEnum\Reflection\Enum;

class HttpMethod extends Enum
{
    const PUT = 'PUT';
    const DELETE = 'DELETE';
    const POST = 'POST';
    const GET = 'GET';
}