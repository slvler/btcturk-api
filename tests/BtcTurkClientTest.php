<?php

declare(strict_types=1);

namespace slvler\BtcTurkApi\Tests;

use PHPUnit\Framework\TestCase;
use slvler\BtcTurkApi\BtcTurkClient;

class BtcTurkClientTest extends TestCase
{
    public function testGetList()
    {
        $client = new BtcTurkClient();
        $variable = $client->exchange()->getList();
        $this->assertIsArray($variable);
    }
    public function testGetCurreyn()
    {
        $client = new BtcTurkClient();
        $variable = $client->ticker()->getCurrency('usdt');
        $this->assertIsArray($variable);
    }
    public function testGetPair()
    {
        $client = new BtcTurkClient();
        $variable = $client->ticker()->getPair('BTCUSDT');
        $this->assertIsArray($variable);
    }
    public function testOrderBook()
    {
        $client = new BtcTurkClient();
        $variable = $client->orderBook()->getOrderBook('BTCUSDT', ['limit' => 10]);
        $this->assertIsArray($variable);
    }
    public function testGetTrades()
    {
        $client = new BtcTurkClient();
        $variable =  $client->trades()->getTrades('BTCUSDT', ['last' => 10]);
        $this->assertIsArray($variable);
    }
    public function testGetOhlcs()
    {
        $client = new BtcTurkClient();
        $variable = $client->ohlcs()->getOhlcs('BTCUSDT', ['from' => 1638316800, 'to' => 1639526400]);
        $this->assertIsArray($variable);
    }
    public function testGetBalances()
    {
        $client = new BtcTurkClient();
        $variable = $client->balance()->getBalances();
        $this->assertIsArray($variable);
    }
    public function testGetTransaction()
    {
        $client = new BtcTurkClient();
        $variable = $client->transaction()->getTransaction(['type' => 'buy', 'symbol' => 'btc', 'symbol' => 'usdt']);
        $this->assertIsArray($variable);
    }
    public function testGetFiatTransactions()
    {
        $client = new BtcTurkClient();
        $variable = $client->transaction()->getFiatTransactions(['symbol' => 'try']);
        $this->assertIsArray($variable);
    }
    public function testGetCryptoTransactions()
    {
        $client = new BtcTurkClient();
        $variable = $client->transaction()->getCryptoTransactions(['symbol' => ['btc','etc']]);
        $this->assertIsArray($variable);
    }
    public function testGetOpenOrders()
    {
        $client = new BtcTurkClient();
        $variable = $client->orders()->getOpenOrders('BTCTRY');
        $this->assertIsArray($variable);
    }
    public function testGetAllOrders()
    {
        $client = new BtcTurkClient();
        $variable = $client->orders()->getAllOrders(['pairSymbol' => 'BTCTRY', 'limit' => "1", 'page' => '10']);
        $this->assertIsArray($variable);
    }
    public function testGetSingleOrder()
    {
        $client = new BtcTurkClient();
        $variable = $client->orders()->getSingleOrder('61912740');
        $this->assertIsArray($variable);
    }

}