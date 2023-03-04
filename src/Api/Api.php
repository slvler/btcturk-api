<?php
declare(strict_types=1);

namespace slvler\BtcTurkApi\Api;

use slvler\BtcTurkApi\BtcTurkClient;
use slvler\BtcTurkApi\Message\ResponseTransformer;
use Exception;

class Api
{

    protected $client;

    protected $transformer;

    public function __construct(BtcTurkClient $client)
    {
        $this->client = $client;
    }

    public function get(string $uri, string $version, array $option = [])
    {
        $response = $this->client->getHttpClient()->request("GET", $version . $uri , $option);
        $this->transformer = new ResponseTransformer($response);
        return $this->transformer->toArray();
    }


}