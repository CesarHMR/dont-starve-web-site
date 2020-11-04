<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
    <!----Links---->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/food-page.css">
    <link rel="shortcut icon" href="./favicon.ico">

  </head>
  <body>
    <div class="main">
      <!------Header------>
      <?php include "./html/header.html";?>
      <!------Content------>
      <div class="content">

      <?php
        include "./php/csv-reader.php";
        $chosenFood = getFoodById($_GET["chosen_food"], $foods);
      ?>
      <!--Title-->
      <div class="title">
        <div class="food-image <?php echo "$chosenFood->exclusive"?>"><img src="./files/images/food-icons/<?php echo "$chosenFood->name"?>.png" width="60px"></div>
      <h1><?php echo "$chosenFood->name"?></h1>
      </div>
      <!--Status-->
      <div class="status">
      <div class="element">
          <img src="./files/images/status-icons/Hunger.svg" alt="Fome">
          <p><?php echo $chosenFood->hunger ?></p>
        </div>
        <div class="element">
          <img src="./files/images/status-icons/Health.svg" alt="Vida">
          <p><?php echo $chosenFood->health ?></p>
        </div>
        <div class="element">
          <img src="./files/images/status-icons/Sanity.svg" alt="Sanidade">
          <p><?php echo $chosenFood->sanity ?></p>
        </div>
      </div>
      <!--Recipe-->
      <section>
          <h2>Modo de Preparo</h2>
          <p>Em breve será adicionado essa informação...</p>
          <p></p>
      </section>
      </div>
      <!------Footer------>
      <?php include "./html/footer.html" ?>
    </div>
  </body>
</html>

<!--<php include "./php/csv-reader.php";
      $chosenFood = getFoodById($_GET["chosen_food"],$foods);
      //$pan = $chosenFood->getPanName();
      echo "<div class='title'>
      <div class='image'>
      <img src='./files/images/food-icons/$chosenFood->name.png' width='60px' title='Can be made with $chosenFood->name'>
      </div>
      <h1>$chosenFood->name</h1>
      </div>"-->
