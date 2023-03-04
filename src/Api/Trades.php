<?php

declare(strict_types=1);

namespace slvler\BtcTurkApi\Api;

class Trades extends Api
{
    public function getTrades(string $pairSymbol, array $params = []): array
    {
        $params['pairSymbol'] = $pairSymbol;
        return $this->get('/trades','v2/', ['base_uri' => 'https://api.btcturk.com/api/', 'query' => $params]);
    }

}