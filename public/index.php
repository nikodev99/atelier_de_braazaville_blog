<?php

use Whoops\Run;
use Framework\App;
use GuzzleHttp\Psr7\ServerRequest;
use Whoops\Handler\PrettyPageHandler;

require '../vendor/autoload.php';

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

$app = new App();

$response = $app->run(ServerRequest::fromGlobals());
Http\Response\send($response);
