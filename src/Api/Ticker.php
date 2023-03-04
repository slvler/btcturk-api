<?php

declare(strict_types=1);

namespace slvler\BtcTurkApi\Api;

class Ticker extends Api
{

    public function getPair(string $pairSymbol, array $params = []): array
    {
        $params['pairSymbol'] = $pairSymbol;
        return $this->get('/ticker','v2', ['base_uri' => 'https://api.btcturk.com/api/', 'query' => $params ]);
    }

    public function getCurrency(string $vsCurrency, array $params = []): array
    {
        $params['symbol'] = $vsCurrency;
        return $this->get('/ticker/currency','v2', ['base_uri' => 'https://api.btcturk.com/api/', 'query' => $params ]);
    }

}