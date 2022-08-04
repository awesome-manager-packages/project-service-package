<?php

namespace AwesomeManager\ProjectService\Client;

use Awesome\Connector\Request;
use Awesome\Connector\Contracts\Request as RequestContract;
use AwesomeManager\ProjectService\Client\Contracts\Client as ClientContract;

class Client implements ClientContract
{
    public function projects(): RequestContract
    {
        return $this->makeRequest()->url('projects/');
    }

    protected function makeRequest(): RequestContract
    {
        return new Request();
    }
}
