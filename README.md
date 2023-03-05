# PHP API client for btcturk.com

[![tests](https://github.com/slvler/btcturk-api/actions/workflows/php.yml/badge.svg)](https://github.com/slvler/btcturk-api/actions/workflows/php.yml)
[![Latest Stable Version](http://poser.pugx.org/slvler/btcturk-api/v)](https://packagist.org/packages/slvler/btcturk-api)
[![License](http://poser.pugx.org/slvler/btcturk-api/license)](https://packagist.org/packages/slvler/btcturk-api)


![image info](./btcturk-logo.png)

A simple API client, written with PHP for [btcturk.com](https://btckturk.com).

BtcTurk is a cryptocurrency exchange operating in Turkey. Offers crypto trading service. There are various crypto services available.

For additional information about API visit [https://docs.btcturk.com/](https://docs.btcturk.com/)

BtcTurk API [Terms of Service](https://pro.btcturk.com/en/legal-information/terms-of-use)

## Requirements

* PHP >= 7.2
* ext-json


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require slvler/btckturk-api
```
or add

```json
"slvler/btckturk-api": "^1.0"
```


## Basic usage


### Example
```php
use slvler\BtcTurkApi\BtcTurkClient;

$client = new BtcTurkClient();
```

## Available methods

### Exchange

#### [exchange-info](https://docs.btcturk.com/public-endpoints/exchange-info)

You can use exchangeinfo endpoint for all tradable pairs and their quantity or price scales.

```php
$data = $client->exchange()->getList();
```


### Tickers

#### [Pair](https://docs.btcturk.com/public-endpoints/ticker#pair)

Using the pairSymbol parameter, you can send a request for a single pair.

```php
$data = $client->ticker()->getPair('BTCUSDT');
```

#### [currency](https://docs.btcturk.com/public-endpoints/ticker#currency)

currency parameter can be used for all symbol pairs.

```php
$data = $client->ticker()->getCurrency('usdt');
```

### OrderBook

#### [orderbook](https://docs.btcturk.com/public-endpoints/orderbook)

Get a list of all open orders for a product.

```php
$data = $client->orderBook()->getOrderBook('BTCUSDT', ['limit' => 10]);
```


### Trades

#### [trades](https://docs.btcturk.com/public-endpoints/trades)

Gets a list the latest trades for a product.

```php
$data = $client->trades()->getTrades('BTCUSDT', ['last' => 10]);
```


### OHLC Data

#### [OHLC](https://docs.btcturk.com/public-endpoints/ohcl-data#ohlc-data)

open, high, low, close, volume, total and average information can be viewed with OHLC enpoint.

```php
$data = $client->ohlcs()->getOhlcs('BTCUSDT', ['from' => 1638316800, 'to' => 1639526400]);
```

### Account Balance

#### [Balance](https://docs.btcturk.com/private-endpoints/account-balance)

For more information you can check our Authentication V1 article. All asset information can be viewed with the Account Balance endpoint.

```php
$data = $client->balance()->getBalances();
```


### Transactions

#### [Transactions](https://docs.btcturk.com/private-endpoints/user-transactions)

For more information you can check our Authentication V1 article. 6 parameters can be used to access user transactions.

```php
$data = $client->transaction()->getTransaction(['type' => 'buy', 'symbol' => 'btc', 'symbol' => 'usdt']);
```

#### [Fiat Transactions](https://docs.btcturk.com/private-endpoints/get-fiat-transactions)

For more information you can check our Authentication V1 article. 4 parameters can be used to access user fiat transactions.
```php
$data = $client->transaction()->getFiatTransactions(['symbol' => 'try']);
```

#### [Crypto Transactions](https://docs.btcturk.com/private-endpoints/get-crypto-transactions)

For more information you can check our Authentication V1 article. 4 parameters can be used to access user fiat transactions.
```php
$data = $client->transaction()->getCryptoTransactions(['symbol' => ['btc','etc']]);
```


### Orders

#### [Open Orders](https://docs.btcturk.com/private-endpoints/open-orders)

List your current open orders. Only open or un-settled orders are returned by default. As soon as an order is no longer open and settled, it will no longer appear in the default request.

```php
$data = $client->orders()->getOpenOrders('BTCTRY');
```


#### [All Orders](https://docs.btcturk.com/private-endpoints/all-orders)

Retrieve all orders of any status.

```php
$data = $client->orders()->getAllOrders(['pairSymbol' => 'BTCTRY', 'limit' => "1", 'page' => '10']);
```

#### [Single Order](https://docs.btcturk.com/private-endpoints/get-single-order)

Get a single order by orderId.  For all transactions related to the private endpoint, you must authorize before sending your request.

```php
$data = $client->orders()->getSingleOrder('61912740');
```


### Testing

```bash
    composer test
```

## Credits

-   [slvler](https://github.com/slvler)


## License

The MIT License (MIT). Please see [License File](https://github.com/slvler/btcturk-api/blob/main/LICENSE) for more information.

