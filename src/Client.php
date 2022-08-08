<?php

namespace AwesomeManager\ProjectService\Client;

use Illuminate\Support\Arr;
use Awesome\Connector\Request;
use Awesome\Connector\Contracts\Request as RequestContract;
use AwesomeManager\ProjectService\Client\Contracts\Client as ClientContract;

class Client implements ClientContract
{
    public function projects(): RequestContract
    {
        return $this->makeRequest()->url('projects/');
    }

    public function statuses(array $filter = []): RequestContract
    {
        return $this->makeRequest()
            ->url('statuses/')
            ->query(Arr::only($filter, ['ids']));
    }

    public function groups(array $filter = [], bool $withAvailableCustomers = false): RequestContract
    {
        return $this->makeRequest()
            ->url('groups/')
            ->query(
                array_merge(['with_available' => $withAvailableCustomers], Arr::only($filter, ['ids'])
            ));
    }

    public function customers(array $filter = [], bool $withAvailableCustomers = false): RequestContract
    {
        return $this->makeRequest()
            ->url('customers/')
            ->query(
                array_merge(['with_available' => $withAvailableCustomers], Arr::only($filter, ['ids'])
            ));
    }

    protected function makeRequest(): RequestContract
    {
        return new Request();
    }
}
