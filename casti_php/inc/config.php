<?php

//ukaz vsetky errory
ini_set('display_startup_errors', 'On');
ini_set('display_errors', 'On');
//prepisat na -1
error_reporting(-1);
  
//vytahovanie
require 'vendor/autoload.php';


use Medoo\Medoo;

//presmerovanie a ine premene
$stranka = 'http://localhost/php/toddoappka/';

//pripojenie db
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'mojatoddo',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);


//funckia
   function show_404 (){
    
        header("HTTP/1.0 404 Not Found");
        include_once "404.php";
        die();

   } 
   
   
   function is_ajax(){
        return  (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
                strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
   }

/* echo '<pre>';
print_r( $database-> info()) ;
echo '</pre>';
*/