<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
    <!----Links---->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="stylesheet" href="./css/recipes.css">
    <link rel="shortcut icon" href="./favicon.ico">
  </head>
  <body>
    <div class="main">
    <!------Header------>
    <?php include "./html/header.html"?>
    <!------Content------>
      <div class="content">
        <div class="order-container">
      <a href="./recipes.php?order=hungerAsc" class="order">+Fome</a>
      <a href="./recipes.php?order=hungerDes" class="order">-Fome</a>
      <a href="./recipes.php?order=healthAsc" class="order">+Vida</a>
      <a href="./recipes.php?order=healthDes" class="order">-Vida</a>
      <a href="./recipes.php?order=sanityAsc" class="order">+Sanidade</a>
      <a href="./recipes.php?order=sanityDes" class="order">-Sanidade</a>
      <a href="./recipes.php?order=nameAsc" class="order">Alfabética</a>
        </div>
        <div class="grid-content">
      <?php
      include "./php/csv-reader.php";
      include "./php/create-buttons.php";
      $order = $_GET["order"];
      usort($foods, $order);
      createButtons($foods);
      ?>
        </div>
      </div>
    <!------Footer------>
    <?php include "./html/footer.html" ?>
    </div>
  </body>
</html>