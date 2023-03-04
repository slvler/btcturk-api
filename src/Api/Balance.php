<?php

namespace slvler\BtcTurkApi\Api;

class Balance extends Api
{
    use Setting;

    public function getBalances(): array
    {
        $headers = [
            "X-PCK" => Setting::$API_KEY,
            "X-Stamp" => Setting::getNonce(),
            "X-Signature" => Setting::getBase64(),
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];

        return $this->get('/users/balances','v1', [
            'base_uri' => 'https://api.btcturk.com/api/',
            'headers' => $headers
        ]);
    }

}