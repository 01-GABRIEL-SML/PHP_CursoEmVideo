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
      $preco = $_GET["preco"] ?? 0.;
      $porc = $_GET["porc"] ?? 0;
    ?>
    
    <main>
      <h3> REAJUSTADOR DE PREÇOS </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_preco"> Preço do produto ... (R$) </label>
        <input type="number" name="preco" id="id_preco" min="0.10" step="0.10" required value="<?=$preco?>"> 

        <label for="id_porc"> Reajuste de <strong><span id="p">?</span>%</strong> </label>
        <input type="range" name="porc" id="id_porc" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $porc?>">

        <input type="submit" value="REAJUSTAR">       
      </form>
    </main>

    <section>
      <h4> RESULTADO </h4>
      <?php 
         $pNovo = $preco +(($preco * $porc)/100);

         echo "<ul> <li> Preço Antigo: <strong>".numfmt_format_currency($padrao, $preco, "BRL")."</strong> </li> <li> Aumentando em <strong> $porc%</strong> </li> <li> Preço Reajustado: <strong>".numfmt_format_currency($padrao, $pNovo, "BRL")."</strong> </li> </ul>";
      ?>
    </section>

    <script>
      mudaValor()
      function mudaValor(){
        p.innerText = id_porc.value;
      }
    </script>
  </body>
</html>
  
  