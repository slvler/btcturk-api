<?php

namespace slvler\BtcTurkApi\Api;

class Orders extends Api
{
    use Setting;

    public function getOpenOrders(string $pairSymbol): array
    {
        $params['pairSymbol'] = $pairSymbol;

        $headers = [
            "X-PCK" => Setting::$API_KEY,
            "X-Stamp" => Setting::getNonce(),
            "X-Signature" => Setting::getBase64(),
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];

        return $this->get('/openOrders','v1', [
            'base_uri' => 'https://api.btcturk.com/api/',
            'headers' => $headers,
            'query' => $params
        ]);
    }

    public function getAllOrders(array $params = []): array
    {
        $headers = [
            "X-PCK" => Setting::$API_KEY,
            "X-Stamp" => Setting::getNonce(),
            "X-Signature" => Setting::getBase64(),
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];

        return $this->get('/allOrders','v1', [
            'base_uri' => 'https://api.btcturk.com/api/',
            'headers' => $headers,
            'query' => $params
        ]);
    }

    public function getSingleOrder(string $orderId): array
    {

        $headers = [
            "X-PCK" => Setting::$API_KEY,
            "X-Stamp" => Setting::getNonce(),
            "X-Signature" => Setting::getBase64(),
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];

        return $this->get('/order/'. $orderId,'v1', [
            'base_uri' => 'https://api.btcturk.com/api/',
            'headers' => $headers,
        ]);
    }
}

