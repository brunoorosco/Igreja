<?php
require 'vendor/autoload.php';

//instancie o objeto
$app = new \Slim\Slim();

//defina a rota
$app->get('/', function () { 
  include 'home.php'; 
}); 

$app->get('/cadastro', function () { 
  include 'cadastro.php'; 
}); 


//rode a aplicação Slim 
$app->run();