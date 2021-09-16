<?php 
    require 'config.php';

    $id = $database->insert('items',[
        'text' => $_POST['message']

    ]);

   // if($id) die('error');
    
    if (is_ajax()){

        die('funguje');
    }

    else{
        header("Location: $stranka/index.php");
        die();
    }