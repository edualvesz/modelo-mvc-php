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

    //variables received in post of page ($_POST)
    //@var array
    private $postVars = [];

    //header's request
    //@var array
    private $headers = [];

    //class constructor
    public function __construct() {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST URI'] ?? '';
    }

    //this method is responsible for return the http method from request
    //@return string
    public function getHttpMethod(){
        return $this->httpMethod;
    }

    //this method is responsible for return the URI from request
    //@return string
    public function getUri(){
        return $this->uri;
    }

    //this method is responsible for return the headers from request
    //@return array
    public function getHeaders(){
        return $this->headers;
    }

    //this method is responsible for return the url parameters from request
    //@return array
    public function getQueryParams(){
        return $this->queryParams;
    }

    //this method is responsible for return POST variables from request
    //@return array
    public function getPostVars(){
        return $this->postVars;
    }
}