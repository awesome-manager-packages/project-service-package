<?php

namespace AwesomeManager\ProjectService\Client\Contracts;

use Awesome\Connector\Contracts\Request;

interface Client
{
    public function projects(array $ids = [], bool $activeOnly = true): Request;

    public function createProject(array $data): Request;

    public function statuses(array $filter = []): Request;

    public function groups(array $filter = [], bool $withAvailableCustomers = false): Request;

    public function customers(array $filter = [], bool $withAvailableGroups = false): Request;
}
