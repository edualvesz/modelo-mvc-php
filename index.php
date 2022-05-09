<?php

require __DIR__ . '/vendor/autoload.php';

//use \App\Controller\Pages\Home;
use App\Controller\Pages\HomeController;

$obResponse = new \App\Http\Response(200, 'Ola mundo');

$obResponse->sendResponse();

exit;

echo HomeController::getHome();