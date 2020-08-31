<?php

    include "casti_php/inc/config.php";

    $uloha = $database->get("items", "text",[
       "id" => $_GET['id']
    ]); 


     include "casti_php/partials/header.php"; 
?>

    <div class="list"> 
        <h1 class="header"> TODO APP | EDIT </h1> <br>


    <?php
    
    $data = $database->select('items' , 'uloha');

    ?>
    
    <form id="edit" action="casti_php/inc/edit-new.php" class="item-add" method="post">
        <div class="form-group">
            
        <p>
            <textarea name="message" id="text" class="input" autocomplete="off" rows="3" required> </textarea>
        </p>
        
        <p>    
            <input class="submit" type="submit" value="edituj">
        </p>

        </div>
    </form>
    </div>
    
<?php include "casti_php/partials/footer.php"; ?>