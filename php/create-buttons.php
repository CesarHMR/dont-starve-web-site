<?php

function createButtons($array){
    foreach($array as $value){
        echo "<div class='food-icon $value->exclusive'><a href='./food-page.php?chosen_food=$value->id' title='$value->name'><img src='./files/images/food-icons/$value->name.png' class='image'></img><div class='mask'><div class='mini'>
        <div class='element'>
        <img src='./files/images/status-icons/Hunger.svg' alt='Fome'>
        <p>$value->hunger</p>
          </div>
          <div class='element'>
          <img src='./files/images/status-icons/Health.svg' alt='Vida'>
          <p>$value->health</p>
          </div>
          <div class='element'>
          <img src='./files/images/status-icons/Sanity.svg' alt='Sanidade'>
          <p>$value->sanity</p>
          </div>
  </div></div></a></div>";
    }
}

?>