<?php 
    require 'config.php';

    $id = $database->insert('items',[
        'uloha' => $_POST['message']

    ]);

    if($id){
        //header('Location: '. $stranka .'/index.php');
        die('funguje');
    }