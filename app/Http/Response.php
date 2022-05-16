<?php

namespace App\Http;

class Response 
{

    //Code of HTTP status
    //@var interger
    private $httpCode = 200;

    //Response's headers
    //@var array
    private $headers =[];

    //content type that is being returned
    //@var string
    private $contentType ='text/html';

    //response content
    //@var mixed

    private $content;

    //its responsible for begin class and define its values
    //@param interger $httpCode
    //@param mixed $content
    //@param string $contentType
    public function __construct($httpCode, $content, $contentType = 'text/html'){
        $this->$httpCode = $httpCode;
        $this->$content = $content;
        $this->setContentType($contentType);
    }
    //method responsible for change the content of response
    //param string $contentType
    public function setContentType($contentType){
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    //method responsible for add a register of header response
    //@param [type] $key
    //@param [type] $value
    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }

    //method responsible for sending headers to the browser
    private function sendHeaders(){
        //status
        http_response_code($this->httpCode);
        //send headers
        foreach($this->headers as $key=>$value){
            header($key.': '.$value);
        }
    }

    //this method sends the response for user
    public function sendResponse(){
        $this->sendHeaders();
        switch ($this->contentType){
            case 'text/html':
                echo $this->content;
                exit;
        }
    }

}