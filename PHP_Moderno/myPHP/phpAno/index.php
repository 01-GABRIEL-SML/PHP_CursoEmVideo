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

    <?php date_default_timezone_set("America/Sao_Paulo");
      $anoAtual = date("Y");
      $anoNasc = $_GET["anoNasc"] ?? $anoAtual;
      $anoPost = $_GET["anoPost"] ?? $anoAtual;
    ?>
    
    <main>
      <h3> CALCULANDO IDADE </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_anoNasc"> Ano em que você nasceu ... </label>
        <input type="number" name="anoNasc" id="id_anoNasc" min="1900" max="<?=$anoAtual?>" required value="<?=$anoNasc?>"> 

        <label for="id_anoPost">Sua idade no ano de ... <?="(o ano atual é <strong> $anoAtual </strong>)"?> </label>
        <input type="number" name="anoPost" id="id_anoPost" min="1900" required value="<?=$anoPost?>">
        
        <input type="submit" value="DESCOBRIR IDADE">       
      </form>
    </main>

    <section>
      <h4> RESULTADO </h4>
      <?php 
         $idade = $anoPost - $anoNasc;
         if ($idade!=1)
           $frase = "anos";
         else
           $frase = "ano";
         echo "Quem nasceu em <strong> $anoNasc </strong> terá <strong> $idade $frase </strong> em <strong> $anoPost </strong>!";
      ?>
    </section>
  </body>
</html>
  
  