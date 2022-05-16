<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use App\Http\Response;
use App\Controller\Pages\HomeController;

define('URL','http://localhost/modelo-mvc-php');

$obRouter = new Router(URL);

//HOME ROUTE
$obRouter->get('/',[
    function(){
        return new Response(200,HomeController::getHome());
    }
]);
