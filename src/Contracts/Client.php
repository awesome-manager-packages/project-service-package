<?php

namespace AwesomeManager\ProjectService\Client\Contracts;

use Awesome\Connector\Contracts\Request;

interface Client
{
    public function projects(): Request;
}
