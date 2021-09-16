<?php

    require_once "casti_php/inc/config.php";

    if (isset($_GET['id'])){
        $idecko = $_GET['id'];
    } else {
        $idecko = 0;
    //nejaka cybova hlaska o tom ze ani nevies co chces natahovat z db
    }

    $uloha = $database->get("items", "text", [
        "id" => $idecko
    ]); 

    if(! $uloha) {
        show_404();
    }
    
     include "casti_php/partials/header.php"; 

    ?>

    <div class="list"> 
        <h1 class="header"> TODO APP | EDIT </h1> <br>


   
    
    <form id="edit" action="casti_php/inc/edit-item.php" class="item-add" method="post">
        <div class="form-group">
            
        <p>
            <textarea name="message" id="text" class="input" autocomplete="off" rows="3" required><?php echo $uloha ?></textarea>
        </p>
        
        <p>    
            <input name="id" type="hidden" value= "<?php echo $_GET['id'] ?>" > 
            <input class="submit" type="submit" value="edituj">
            
            <span class="controls">
                <a href="<?php echo $stranka ?>" class="domov-link"> Domov </a>
            </span>
        </p>

        </div>
    </form>
    </div>
    
<?php include "casti_php/partials/footer.php"; ?>