<?php

declare(strict_types=1);


namespace slvler\BtcTurkApi\Api;

class OrderBook extends Api
{
    public function getOrderBook(string $pairSymbol, array $params = []): array
    {
        $params['pairSymbol'] = $pairSymbol;
        return $this->get('/orderbook','v2/', ['base_uri' => 'https://api.btcturk.com/api/', 'query' => $params]);
    }


}