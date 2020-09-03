<?php 
    require 'config.php';

    
    $editnute= $database->delete('items',
        ['id' => $_POST['id'] ]
    );

    if($editnute){
        header("Location: $stranka/index.php ");
        die();
    }