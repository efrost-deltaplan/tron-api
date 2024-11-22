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

$tron->setAddress('address');
$tron->setPrivateKey('privateKey');

try {
    $transfer = $tron->send( 'ToAddress', 1);
} catch (\EFrostDeltaplan\TronAPI\Exception\TronException $e) {
    die($e->getMessage());
}

var_dump($transfer);