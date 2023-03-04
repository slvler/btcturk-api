<?php

declare(strict_types=1);

namespace slvler\BtcTurkApi\Api;

class Exchange extends Api
{
    public function getList(): array
    {
        return $this->get('server/exchangeinfo','v2/', ['base_uri' => 'https://api.btcturk.com/api/']);
    }
}