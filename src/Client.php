<?php

namespace AwesomeManager\ProjectService\Client;

use Illuminate\Support\Arr;
use Awesome\Connector\Request;
use Awesome\Connector\Contracts\Method;
use Awesome\Connector\Contracts\Request as RequestContract;
use AwesomeManager\ProjectService\Client\Contracts\Client as ClientContract;

class Client implements ClientContract
{
    public function projects(array $ids = [], bool $activeOnly = true): RequestContract
    {
        return $this->makeRequest()
            ->url('projects/')
            ->query([
                'ids' => $ids,
                'active_only' => $activeOnly
            ]);
    }

    public function createProject(array $data): RequestContract
    {
        return $this->makeRequest()
            ->method(Method::POST)
            ->url('projects/')
            ->formData($data);
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

    public function customers(array $filter = [], bool $withAvailableGroups = false): RequestContract
    {
        return $this->makeRequest()
            ->url('customers/')
            ->query(
                array_merge(['with_available' => $withAvailableGroups], Arr::only($filter, ['ids'])
            ));
    }

    protected function makeRequest(): RequestContract
    {
        return new Request();
    }
}
