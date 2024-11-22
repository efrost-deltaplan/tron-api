<?php
include_once '../vendor/autoload.php';

$fullNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \EFrostDeltaplan\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\EFrostDeltaplan\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}

//option 1
$tron->sendTransaction('to',0.1, 'hello');

//option 2
$tron->send('to',0.1);

//option 3
$tron->sendTrx('to',0.1);
