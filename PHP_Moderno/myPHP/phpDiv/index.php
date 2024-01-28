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
      $dividendo = $_GET["divdd"] ?? 0;
      $divisor = $_GET["divsr"] ?? 1;
    ?>
    
    <main>
      <h3> ANATOMIA DE UMA DIVISÃO </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_divdd"> DIVIDENDO </label>
        <input type="number" name="divdd" id="id_divdd" min="0" value="<?=$dividendo?>"> 

        <label for="id_divsr"> DIVISOR </label>
        <input type="number" name="divsr" id="id_divsr" min="1" value="<?=$divisor?>">
        
        <input type="submit" value="ANALISAR">       
      </form>
    </main>

    <section>
      <h4> ESTRUTURA DE UMA DIVISÃO </h4>
      <?php 
        $cosciente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
      ?>
        <table class="divisao">
           <tr>
             <td> <?=$dividendo?> </td>
             <td> <?=$divisor?> </td>
           </tr>
           <tr>
             <td> <?=$resto?> </td>
             <td> <?=$cosciente?> </td>
           </tr>
         </table
    </section>
  </body>
</html>
  
  