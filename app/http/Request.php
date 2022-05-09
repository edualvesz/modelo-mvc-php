<?php 

namespace App\Http;

class Request 
{
    //http request method
    //@var string
    private $httpMethod;

    //page's URI (route)
    //@var string
    private $uri;

    //private description
    //@var [type]
    private $queryParams = [];
}