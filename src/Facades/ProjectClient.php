<?php

namespace AwesomeManager\ProjectService\Client\Facades;

use Illuminate\Support\Facades\Facade;
use Awesome\Connector\Contracts\Request;
use AwesomeManager\ProjectService\Client\Contracts\Client as ClientContract;

/**
 * @method static Request projects()
 */
class ProjectClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ClientContract::class;
    }
}
