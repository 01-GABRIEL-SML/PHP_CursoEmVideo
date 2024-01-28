<!DOCTYPE html>
<html lang = "pt-br">
  <head>
    <meta charset = utf-8>
    <meta http-equiv = "X-UA-compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Form Resultado</title>
  </head>
  <body>
    <header>
      <h1> FORMULÁRIO </h1>
    </header>

    <?php
      $num = $_GET["num"] ?? 0;
    ?>
    
    <main>
      <h3> INFORME UM NÚMERO </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_num"> NÚMERO </label>
        <input type="number" name="num" id="id_num" step="0.0001" value="<?=$num?>"> 
        
        <input type="submit" value="CALCULAR RAÍZES">       
      </form>
    </main>

    <section>
      <h4> RESULTADO FINAL </h4>
      <?php 
         $rQuad = sqrt($num);
         $rCubic = $num**(1/3);
         echo  "<p> Analisando o número <strong>".number_format($num, 4, ",", ".")."</strong> temos: </p> <ul> <li> Raiz Quadrada de <strong>".number_format($rQuad, 4, ",", ".")."</strong> </li> <li> Raiz Cúbica de <strong>".number_format($rCubic, 4, ",", ".")."</strong> </li> </ul>";
      ?>
    </section>
  </body>
</html>
  
  