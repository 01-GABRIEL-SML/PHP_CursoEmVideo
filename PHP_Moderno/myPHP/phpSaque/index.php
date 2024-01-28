<!DOCTYPE html>
 <html lang = "pt-br">
  <head>
    <meta charset = utf-8>
    <meta http-equiv = "X-UA-compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
      img.nota {
        height: 50px;
        margin: 5px;
      }
      img.moeda {
        height: 50px;
        margin: 5px;
      }
    </style>
    <title>PHP Form Resultado</title>
  </head>
  <body>
    <header>
      <h1> FORMULÁRIO </h1>
    </header>
    
    <?php
     /*ERRO NA BIBLIOTECA DO XAMPP
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);*/
      $grana = $_GET["grana"] ?? 0;
    ?>
    
    <main>
      <h3> CAIXA ELETRÔNICO </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_grana"> Saque desejado ... (R$)<sup>*</sup> </label>
        <input type="number" name="grana" id="id_grana" min="0" required value="<?=$grana?>"> 

        <p style="font-size: 0.7em"><sup>*</sup>Valores disponíveis: R$100 - R$50 - R$20 - R$10 - R$5 - R$2 - R$1 </p>

        <input type="submit" value="SACAR">       
      </form>
    </main>

    <section>
      
      <h4> SAQUE DE <?=
      /*ERRO NO XAMPP numfmt_format_currency($padrao, $grana, "BRL")*/
       number_format($grana, 2, ",", ".")?> REALIZADO</h4>
      <?php 
         $d100 = intdiv($grana, 100);
         $sobra = $grana%100;

         $d50 = intdiv($sobra, 50);
         $sobra = $sobra%50;

         $d20 = intdiv($sobra, 20);
         $sobra = $sobra%20;

         $d10 = intdiv($sobra, 10);
         $sobra = $sobra%10;

         $d5 = intdiv($sobra, 5);
         $sobra = $sobra%5;

         $d2 = intdiv($sobra, 2);
         $sobra = $sobra%2;

         $d1 = intdiv($sobra, 1);
         $sobra = $sobra%1;

         if ($grana>1)
           $frase = "VALORES A SEREM ENTREGUES: ";
         else
           $frase = "VALOR A SER ENTREGUE: ";
      ?>
      <p> <?=$frase?> </p> 
      <ul> 
        <li> <img src="img/100-reais.jpg" alt="R$100" class="nota"> x<?=$d100?> </li> 
        <li> <img src="img/50-reais.jpg" alt="R$50" class="nota"> x<?=$d50?> </li> 
        <li> <img src="img/20-reais.jpg" alt="R$20" class="nota"> x<?=$d20?> </li> 
        <li> <img src="img/10-reais.jpg" alt="R$10" class="nota"> x<?=$d10?> </li> 
        <li> <img src="img/5-reais.jpg" alt="R$5" class="nota"> x<?=$d5?> </li>
       <li> <img src="img/2-reais.jpg" alt="R$2" class="nota"> x<?=$d2?> </li>
       <li> <img src="img/1-real.jpg" alt="R$1" class="moeda"> x<?=$d1?> </li> 
      </ul>
      
    </section>
  </body>
</html>
  
  