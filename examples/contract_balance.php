<?php
$fullNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \EFrostDeltaplan\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \EFrostDeltaplan\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\EFrostDeltaplan\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


$balance=$tron->getTransactionBuilder()->contractbalance($tron->getAddress);
foreach($balance as $key =>$item)
{
	echo $item["name"]. " (".$item["symbol"].") => " . $item["balance"] . "\n";
}

