<?php 
    require 'config.php';

    $id = $database->insert('items',[
        'uloha' => $_POST['message']

    ]);

    if($id){
        //header('Location:http://localhost/php/toddoappka/');
        die('funguje');
    }