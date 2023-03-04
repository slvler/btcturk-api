<?php

namespace slvler\BtcTurkApi\Api;

class Transaction extends Api
{
    use Setting;

    public function getTransaction(array $params = []): array
    {
        $headers = [
            "X-PCK" => Setting::$API_KEY,
            "X-Stamp" => Setting::getNonce(),
            "X-Signature" => Setting::getBase64(),
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        return $this->get('/users/transactions/trade','v1', [
            'base_uri' => 'https://api.btcturk.com/api/',
            'headers' => $headers,
            'query' => $params
        ]);
    }

    public function getFiatTransactions(array $params = []): array
    {
        $headers = [
            "X-PCK" => Setting::$API_KEY,
            "X-Stamp" => Setting::getNonce(),
            "X-Signature" => Setting::getBase64(),
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        return $this->get('/users/transactions/fiat','v1', [
            'base_uri' => 'https://api.btcturk.com/api/',
            'headers' => $headers,
            'query' => $params
        ]);
    }

    public function getCryptoTransactions(array $params = []): array
    {
        $headers = [
            "X-PCK" => Setting::$API_KEY,
            "X-Stamp" => Setting::getNonce(),
            "X-Signature" => Setting::getBase64(),
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];

        return $this->get('/users/transactions/crypto','v1', [
            'base_uri' => 'https://api.btcturk.com/api/',
            'headers' => $headers,
            'query' => $params
        ]);
    }

}