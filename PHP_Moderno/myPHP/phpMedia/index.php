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
      $val1 = $_GET["val1"] ?? 0;
      $peso1 = $_GET["peso1"] ?? 1;
      $val2 = $_GET["val2"] ?? 0;
      $peso2 = $_GET["peso2"] ?? 1;
    ?>
    
    <main>
      <h3> MÉDIAS ARITMÉTICAS </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_val1"> 1° Valor </label>
        <input type="number" name="val1" id="id_val1" step="0.01" required value="<?=$val1?>"> 

        <label for="id_peso1"> 1° Peso </label>
        <input type="number" name="peso1" id="id_peso1" min="1" required value="<?=$peso1?>">

        <label for="id_val2"> 2° Valor </label>
        <input type="number" name="val2" id="id_val2" step="0.01" required value="<?=$val2?>"> 
     
       <label for="id_peso2"> 2° Peso </label>
        <input type="number" name="peso2" id="id_peso2" min="1" required value="<?=$peso2?>"> 
        
        <input type="submit" value="CALCULAR  MÉDIAS">       
      </form>
    </main>

    <section>
      <h4> CÁLCULO DAS MÉDIAS </h4>
      <?php 
         $medArS = ($val1 + $val2) / 2;
         $medArP = (($val1*$peso1)+($val2*$peso2)) / ($peso1 + $peso2);
         echo  "<p> Analisando os valores <strong>".number_format($val1, 2, ",", ".")."</strong> e <strong>".number_format($val2, 2, ",", ".")."</strong> temos: </p> 
<ul> 
<li> Média Aritmética Simples: <strong>".number_format($medArS, 2, ",", ".")."</strong> </li> 
<li> Média Aritmética Ponderada: <strong>".number_format($medArP, 2, ",", ".")."</strong> </li> 
</ul>";
      ?>
    </section>
  </body>
</html>
  
  