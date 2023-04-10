<?php

declare(strict_types=1);

namespace Netzkollektiv\EasyCreditApi\Client;

use Laminas\Http\Client;

class HttpClientFactory
{
    /**
     * @param string $url
     * @param array|null $params
     * @return Client
     */
    public function getClient(string $url, ?array $params = null): Client
    {
        return new Client($url, $params);
    }
}