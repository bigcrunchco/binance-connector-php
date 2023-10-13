<?php

namespace Binance;

use Binance\APIClient;

class Broker extends APIClient
{
    use Broker\SubAccount;

    public function __construct(array $args = [])
    {
        $args['baseURL'] = $args['baseURL'] ?? 'https://api.binance.com';
        parent::__construct($args);
    }
}
