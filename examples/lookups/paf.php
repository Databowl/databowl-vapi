<?php
/** @var \Databowl\Vapi\Client $client */
$client = require dirname(__FILE__) . '/../bootstrap.php';

$request = new \Databowl\Vapi\Lookups\Paf();
$request->setPostcode('S6 3AF');

$result = $client->sendRequest($request);

var_dump($result);