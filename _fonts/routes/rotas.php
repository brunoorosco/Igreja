<?php

$app = new \Slim\App;

$app->get('/',function(Request $request, Response $response){
    include "home.php";
   });