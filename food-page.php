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
    <link rel="stylesheet" href="./css/icon.css">
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
        echo "$chosenFood->name <br>";
        echo "$chosenFood->hunger <br>";
        echo "$chosenFood->health <br>";
        echo "$chosenFood->sanity <br>";
        echo "$chosenFood->exclusive <br>";

      ?>

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
