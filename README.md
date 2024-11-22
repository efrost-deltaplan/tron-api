# TRON API (with web3p/web3.php)
A PHP API for interacting with the Tron Protocol using original web3.php

[![Latest Stable Version](https://poser.pugx.org/iexbase/tron-api/version)](https://packagist.org/packages/iexbase/tron-api)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://api.travis-ci.com/iexbase/tron-api.svg?branch=master)](https://travis-ci.com/iexbase/tron-api)
[![Contributors](https://img.shields.io/github/contributors/iexbase/tron-api.svg)](https://github.com/iexbase/tron-api/graphs/contributors)
[![Total Downloads](https://img.shields.io/packagist/dt/iexbase/tron-api.svg?style=flat-square)](https://packagist.org/packages/iexbase/tron-api)

## Install

```bash
> composer require efrost-deltaplan/tron-api --ignore-platform-reqs
```
## Requirements

The following versions of PHP are supported by this version.

* PHP 8.0

## Example Usage

```php
use EFrostDeltaplan\TronAPI\Tron;

$fullNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \EFrostDeltaplan\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\EFrostDeltaplan\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


$this->setAddress('..');
//Balance
$tron->getBalance(null, true);

// Transfer Trx
var_dump($tron->send('to', 1.5));

//Generate Address
var_dump($tron->createAccount());

//Get Last Blocks
var_dump($tron->getLatestBlocks(2));

//Change account name (only once)
var_dump($tron->changeAccountName('address', 'NewName'));


// Contract
$tron->contract('Contract Address');



```

## Testing

``` bash
$ vendor/bin/phpunit
```

## Donations
**Tron(TRX)**: TRWBqiqoFZysoAeyR1J35ibuyc8EvhUAoY
