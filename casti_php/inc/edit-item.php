<?php 
    require 'config.php';

    
    $editnute= $database->update('items',
        ['text' => $_POST['message'] ],
        ['id' => $_POST['id'] ]
    );

    if($editnute){
        header("Location: $stranka/index.php ");
        die();
    }