<?php
/** @var \Databowl\Vapi\Client $client */
$client = require dirname(__FILE__) . '/../bootstrap.php';

$request = new \Databowl\Vapi\Validators\Email();
$request->setEmail('your-email-address');

$result = $client->sendRequest($request);

var_dump($result);