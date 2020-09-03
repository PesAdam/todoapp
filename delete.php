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

    if(! $uloha) {

        header("HTTP/1.0 404 Not Found");
        include_once "404.php";
        die();

    }
    
     include "casti_php/partials/header.php"; 

    ?>

    <div class="list"> 
        <h1 class="header"> TODO APP | DELETE </h1> <br>


   
    
    <form id="delete-form" action="casti_php/inc/delete-item.php" class="item-add" method="post">
        <div class="form-group">
            
        <p>
            <textarea disabled name="message" id="text" class="input" autocomplete="off" rows="3" required><?php echo $uloha ?></textarea>
        </p>
        
        <p>    
            <input name="id" type="hidden" value= "<?php echo $_GET['id'] ?>" > 
            <input class="submit" type="submit" value="vymaz">
            
            <span class="controls">
                <a href="<?php echo $stranka ?>" class="domov-link"> Domov </a>
            </span>
        </p>

        </div>
    </form>
    </div>
    
<?php include "casti_php/partials/footer.php"; ?>