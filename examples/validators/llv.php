<?php
/** @var \Databowl\Vapi\Client $client */
$client = require dirname(__FILE__) . '/../bootstrap.php';

$request = new \Databowl\Vapi\Validators\Llv();
$request->setPhone('your-phone-number');

$result = $client->sendRequest($request);

var_dump($result);