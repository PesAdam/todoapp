<?php include "casti_php/partials/header.php"; ?>

    <div class="list"> 
        <h1 class="header"> TODO APP </h1> <br>


    <?php
    
    $data = $database->select('items' , ['id', 'uloha'] );
    
    ?>

    <ul id="item-list" class="items">
        <?php 
        
            foreach ($data as $item){
                echo '<li id="item-'. $item['id'] .'" class="list-group-item">';
                echo $item['uloha'] ;
                echo ' <div class= "controls" > ';
            
                echo '<a href="edit.php?id=' . $item['id'] .'"  class="edit-link"> edit </a>';
                echo '<a href="delete.php?id=' . $item['id'] .'" class="delete-link"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';

                echo '</div>';
                echo  '</li>';
            }

        ?>
    </ul>

    <form id="pridavanie" action="casti_php/inc/add-item.php" class="item-add" method="post">
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