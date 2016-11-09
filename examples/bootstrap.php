<?php
require dirname(__FILE__) . '/../vendor/autoload.php';
if (!file_exists(dirname(__FILE__) . '/config.php')) {
    throw new \Exception('Create your config file at ' . dirname(__FILE__) . '/config.php');
}

$configArray = require dirname(__FILE__) . '/config.php';
$config = \Databowl\Vapi\ClientConfig::createFromArray($configArray);

return new \Databowl\Vapi\Client($config);
