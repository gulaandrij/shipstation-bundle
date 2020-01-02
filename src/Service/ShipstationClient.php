<?php

namespace ShipstationBundle\Service;

use MichaelB\ShipStation\ShipStationApi;

class ShipstationClient
{
    /**
     * @var ShipStationApi
     */
    private $client;

    public function __construct(string $apiKey, string $apiSecret)
    {
        $this->client = new ShipStationApi($apiKey, $apiSecret);
    }

    public function getClient(): ShipStationApi
    {
        return $this->client;
    }


}
