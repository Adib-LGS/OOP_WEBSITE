<?php
require '../vendor/autoload.php';

use Framework\App;

use function Http\Response\send;

$app = new App;

$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
send($response);
