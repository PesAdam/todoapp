<?php 
    require 'config.php';

    
    $editnute= $database->update('items',
        ['uloha' => $_POST['message'] ],
        ['id' => $_POST['id'] ]
    );

    if($editnute){
        header("Location: $stranka/index.php ");
        die();
    }