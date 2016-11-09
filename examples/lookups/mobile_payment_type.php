<?php
/** @var \Databowl\Vapi\Client $client */
$client = require dirname(__FILE__) . '/../bootstrap.php';

$request = new \Databowl\Vapi\Lookups\MobilePaymentType();
$request->setMobile('your-mobile-number');
$request->setNetwork('optionally-set-mobile-network');

$result = $client->sendRequest($request);

var_dump($result);