<?php

require __DIR__ . '/vendor/autoload.php';

//use \App\Controller\Pages\Home;
use App\Controller\Pages\HomeController;

echo HomeController::getHome();