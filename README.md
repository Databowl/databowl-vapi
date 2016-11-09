# Databowl VAPI PHP Client

## Introduction

This package contains a PHP library to communicate with the Databowls VAPI service.

## Installation

The recommended way to install php-scheduler is through [Composer](http://getcomposer.org).

```bash
composer require databowl/databowl-vapi
```

## Example

First create your client:

```php
$configArray = [
    'privateKey' => '',
    'publicKey' => '',
];
 
$config = \Databowl\Vapi\ClientConfig::createFromArray($configArray);
$client = new \Databowl\Vapi\Client($config);
```

Then create your request and send it using the client:

```php
$request = new \Databowl\Vapi\Validators\Hlr();
$request->setMobile('your-mobile-number');
 
$result = $client->sendRequest($request);
```

Further examples are available in the `./examples` folder.

Version History
---------------

This library has not yet been tagged for release.