<?php include "casti_php/partials/header.php"; ?>

    <div class="list"> 
        <h1 class="header"> TODO APP </h1> <br>


    <?php
    
    $data = $database->select('items' , 'uloha');

    ?>
    
    <ul class="items">
        <?php 
        
            foreach ($data as $item){
                echo '<li class="list-group-item">'.$item.'</li>';
            }

        ?>
    </ul>

    <form id="pridavanie" action="casti_php/inc/add-new.php" class="item-add" method="post">
        <div class="form-group">
            
        <p>
            <textarea name="message" id="text" placeholder="Pridaj úlohu" class="input" autocomplete="off" rows="3" required> </textarea>
        </p>
        
        <p>    
            <input class="submit" type="submit" value="add new thing">
        </p>
        </div>
    </form>
    </div>
    
<?php include "casti_php/partials/footer.php"; ?>