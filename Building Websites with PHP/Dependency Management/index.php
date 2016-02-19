<?php 
require 'vendor/autoload.php';
date_default_timezone_set('America/New_York');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//$log = new Monolog\Logger('name');
//$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

    //after use statements
$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

$log->addWarning('New Foo');
echo "Hello World!";
?>