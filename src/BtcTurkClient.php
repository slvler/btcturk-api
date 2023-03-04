<?php

declare(strict_types=1);

namespace slvler\BtcTurkApi;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use slvler\BtcTurkApi\Api\Balance;
use slvler\BtcTurkApi\Api\Exchange;
use slvler\BtcTurkApi\Api\Ohlcs;
use slvler\BtcTurkApi\Api\OrderBook;
use slvler\BtcTurkApi\Api\Orders;
use slvler\BtcTurkApi\Api\Ticker;
use slvler\BtcTurkApi\Api\Trades;
use slvler\BtcTurkApi\Api\Transaction;
use slvler\BtcTurkApi\Log\Record;

class BtcTurkClient
{

    private $httpClient;

    protected $logged;

    public function __construct(?Client $client = null)
    {
        $this->logged = new Record();
        $this->httpClient = $client ?: new Client(
            [
                'handler' => $this->logged->loggered()
            ]);
    }

    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }
    public function exchange(): Exchange
    {
        return new Exchange($this);
    }
    public function ticker(): Ticker
    {
        return new Ticker($this);
    }
    public function orderBook(): OrderBook
    {
        return new OrderBook($this);
    }
    public function trades(): Trades
    {
        return new Trades($this);
    }
    public function ohlcs(): Ohlcs
    {
        return new Ohlcs($this);
    }
    public function balance(): Balance
    {
        return new Balance($this);
    }
    public function transaction(): Transaction
    {
        return new Transaction($this);
    }
    public function orders(): Orders
    {
        return new Orders($this);
    }

}