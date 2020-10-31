<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
    <!----Links---->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./favicon.ico">

  </head>
  <body>
    <div class="main">
      <!------Header------>
      <?php include "./html/header.html"?>
      <!------Content------>
      <div class="content">
            <section>
                <h2>Bem Vindo!</h2>
                <p>Com <i>CrockPot</i> é possível ter acesso de todas as informações sobre os alimentos de Don't  Starve Together de forma rápida e dinâmica. Na aba <a href="./recipes.php">Receitas</a> é possível ver todas as receitas disponíveis e suas informações, como valores, efeitos e modo de preparo. Se precisar saber quais receitas são possíveis serem feitas com um ingrediente específico, apenas entre em <a href="#">Ingredientes</a> e busque pelo ingrediente desejado, mostrando assim todas as possibilidades de receitas de maneira fácil. Por acaso deseja fazer o prato preferido do seu personagem? Em <a href="#">Personagens</a> é possível ver além disso, dicas interessantes e interações especiais com as diferentes comidas de Don't  Starve.</p>
            </section>
            <section>
                <h2>Em Breve...</h2>
                <p>Em breve estaremos trazendo todo o site e suas funcionalidades para os dispositivos móveis de forma gratuita, com versões para Android e iOS. Também disponibilizaremos uma maneira para os usuários contribuírem com o site s2. </p>
            </section>
            <div id="donate">
                <button>DONATE</button>
                <p>Ajude a manter o site!!!</p>
            </div>
          </div>
          <!------Footer------>
          <?php include "./html/footer.html" ?>
      </div>
  </body>
</html>
