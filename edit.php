<?php

    require_once "casti_php/inc/config.php";

if (isset($_GET['id'])){
    $idecko = $_GET['id'];
} else {
    $idecko = 0;
  //nejaka cybova hlaska o tom ze ani nevies co chces natahovat z db
}

    $uloha = $database->get("items", "uloha", [
        "id" => $idecko
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
            <textarea name="message" id="text" class="input" autocomplete="off" rows="3" required><?php echo $uloha ?></textarea>
        </p>
        
        <p>    
            <input class="submit" type="submit" value="edituj">
        </p>

        </div>
    </form>
    </div>
    
<?php include "casti_php/partials/footer.php"; ?>