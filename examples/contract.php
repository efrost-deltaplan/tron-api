<?php

include_once '../vendor/autoload.php';

use EFrostDeltaplan\TronAPI\Tron;


try {
    $fullNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
    $solidityNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
    $eventServer = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
} catch (\EFrostDeltaplan\TronAPI\Exception\TronException $e) {
    echo $e->getMessage();
}


try {
    $tron = new Tron($fullNode, $solidityNode, $eventServer, null, true);
    $contract = $tron->contract('TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t');  // Tether USDT https://tronscan.org/#/token20/TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t

    // Data
    echo $contract->name();
    echo $contract->symbol();
    echo $contract->balanceOf();
    echo $contract->totalSupply();
    //echo  $contract->transfer('to', 'amount', 'from');


} catch (\EFrostDeltaplan\TronAPI\Exception\TronException $e) {
    echo $e->getMessage();
}