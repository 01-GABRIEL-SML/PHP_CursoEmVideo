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
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      $salMin = 1302.00;
      $salario = $_GET["sal"] ?? $salMin;
    ?>
    
    <main>
      <h3> INFORME SEU SALÁRIO </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_sal"> SALÁRIO </label>
        <input type="number" name="sal" id="id_sal" value="<?=$salario?>"> 

        <?="<p> Salário mínimo <strong>".numfmt_format_currency($padrao, $salMin, "BRL")."</strong> </p>"?>
        
        <input type="submit" value="CALCULAR">       
      </form>
    </main>

    <section>
      <h4> RESULTADO FINAL </h4>
      <?php 
        $qtdSalMin = intdiv($salario, $salMin);
        $sobra = $salario % $salMin;
        if ($qtdSalMin>1)
          $frase = "salários mínimos";
        else
          $frase = "salário mínimo";
         echo  " Quem recebe um salário de <strong>".numfmt_format_currency($padrao, $salario, "BRL")."</strong> ganha <strong> $qtdSalMin  $frase </strong> + <strong>".numfmt_format_currency($padrao, $sobra, "BRL")."</strong>";
      ?>
    </section>
  </body>
</html>
  
  