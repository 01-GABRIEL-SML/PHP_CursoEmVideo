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
      $segs = $_GET["segs"] ?? 0;
    ?>
    
    <main>
      <h3> CALCULADORA DE TEMPO </h3>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="id_segs"> Total de segundos ... </label>
        <input type="number" name="segs" id="id_segs" min="0" required value="<?=$segs?>"> 

        <input type="submit" value="CALCULAR">       
      </form>
    </main>

    <section>
      <h4> TOTALIZANDO TUDO </h4>
      <?php 
         $semana = intdiv($segs, 604800);
         $sobra = $segs%604800;

         $dia = intdiv($sobra, 86400);
         $sobra = $sobra%86400;

         $hora = intdiv($sobra, 3600);
         $sobra = $sobra%3600;

         $min = intdiv($sobra, 60);
         $sobra = $sobra%60;

         if ($segs>1)
           $fSegs = "segundos equivalem";
         else
           $fSegs = "segundo equivale";

         if ($semana>1)
           $fSemana = "semanas";
         else
           $fSemana = "semana";

         if ($dia>1)
           $fDia = "dias";
         else
           $fDia= "dia";
 
         if ($hora>1)
           $fHora = "horas";
         else
           $fHora = "hora";

         if ($min>1)
           $fMin = "minutos";
         else
           $fMin = "minuto";

         if ($sobra>1)
           $fSobra = "segundos";
         else
           $fSobra = "segundo";
  
         echo "<p> <strong>".number_format($segs, 0, ",", ".")." </strong> $fSegs a: </p> <ul> <li> <strong>".number_format($semana, 0, ",", ".")." </strong> $fSemana </li> <li> <strong>".number_format($dia, 0, ",", ".")." </strong> $fDia </li> <li> <strong>".number_format($hora, 0, ",", ".")." </strong> $fHora </li> <li> <strong>".number_format($min, 0, ",", ".")." </strong> $fMin </li> <li> <strong>".number_format($sobra, 0, ",", ".")." </strong> $fSobra </li></ul>";
      ?>
    </section>
  </body>
</html>
  
  