<?php

require 'vendor/autoload.php';
date_default_timezone_set('America/New_York');


//Create Slim Object
$app = new \Slim\App();

$app->get('/hello/:name', function($name){
  echo "Hello, $name";
});  

          
$app->run();          
?>