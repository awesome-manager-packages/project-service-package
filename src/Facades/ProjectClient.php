<?php

namespace AwesomeManager\ProjectService\Client\Facades;

use Illuminate\Support\Facades\Facade;
use Awesome\Connector\Contracts\Request;
use AwesomeManager\ProjectService\Client\Contracts\Client as ClientContract;

/**
 * @method static Request projects()
 * @method static Request statuses(array $filter = [])
 * @method static Request groups(array $filter = [], bool $withAvailableCustomers = false)
 * @method static Request customers(array $filter = [], bool $withAvailableCustomers = false)
 */
class ProjectClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ClientContract::class;
    }
}
