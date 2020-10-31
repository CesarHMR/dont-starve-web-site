<?php

function createButtons($array){
    foreach($array as $value){
        echo "<a href='./food-page.php?chosen_food=$value->id' class='food-icon' title='$value->name'><img src='./files/images/food-icons/$value->name.png'></img></a>";
    }
}

?>