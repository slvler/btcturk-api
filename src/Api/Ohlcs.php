<?php

declare(strict_types=1);

namespace slvler\BtcTurkApi\Api;

class Ohlcs extends Api
{
    public function getOhlcs(string $pair, array $params = []): array
    {
        $params['pair'] = $pair;
        return $this->get('/ohlcs','v1', ['base_uri' => 'https://graph-api.btcturk.com', 'query' => $params]);
    }


}
