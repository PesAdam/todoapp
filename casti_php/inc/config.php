<?php

//ukaz vsetky errory
ini_set('display_startup_errors', 'On');
ini_set('display_errors', 'On');
//prepisat na -1
error_reporting(-1);
  
//vytahovanie
require 'vendor/autoload.php';


use Medoo\Medoo;

//pripojenie db
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'mojatoddo',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);

/* echo '<pre>';
print_r( $database-> info()) ;
echo '</pre>';
*/