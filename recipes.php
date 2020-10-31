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
    <link rel="shortcut icon" href="./favicon.ico">
  </head>
  <body>
    <!------Header------>
    <?php include "./html/header.html"?>
    <!------Content------>
    <div class="main">
      <div class="content">
      <a href="./recipes.php?order=hungerAsc">Fome Asc</a>
      <a href="./recipes.php?order=hungerDes">Fome Des</a>
      <a href="./recipes.php?order=healthAsc">Vida Asc</a>
      <a href="./recipes.php?order=healthDes">Vida Des</a>
      <a href="./recipes.php?order=sanityAsc">Sanidade Asc</a>
      <a href="./recipes.php?order=sanityDes">Sanidade Des</a>
      <a href="./recipes.php?order=nameAsc">Nome Asc</a>
      <a href="./recipes.php?order=nameDes">Nome Des</a>
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
    </div>
    <!------Footer------>
    <?php include "./html/footer.html" ?>
  </body>
</html>