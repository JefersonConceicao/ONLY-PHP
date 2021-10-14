<?php 

namespace App\Http;

class Request{
    private $httpMethod;
    private $uri;
    private $queryParams = [];
    private $postVars = [];
    private $headers = [];

    public function __construct(){
        $this->queryParams = !isset($_GET) ? $_GET : [];
        $this->postVars =  !isset($_POST) ? $_POST : [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    public function getHttpMethod(){

    }
}