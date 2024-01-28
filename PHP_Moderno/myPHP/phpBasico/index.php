<!DOCTYPE html>
<html lang = "pt-br">
  <head>
    <meta charset = utf-8>
    <meta http-equiv = "X-UA-compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width , initial-scale=1.0">
    <title>PHP Basico</title>
  </head>
  <body>
    <h1>    
      <?php 
// CUMPREM A MESMA FUNÇÃO:
print "Hello World";
echo "\u{1F30E}"; 
       ?>
    </h1>

    <?php
// RELATÓRIO DO SERVIDOR: phpinfo();

//SUPER TAGS NÃO RECOMENDADAS

/*Funciona apenas em versões antigas: <script language = "php">...</script>

  Funciona ativando-a em php.ini (Short Open Tag): <?...?>

  Não funciona mais (ASP Tag): <%...%>

  Apenas uma linha de código com echo/print (Short Tag PHP): <?= echo "..." ?> 
*/

//CORRIGIR DATA DO SERVIDOR: 
date_default_timezone_set("America/Sao_Paulo");

echo "Hoje é dia ".date("d/M/Y")."<br>";
echo "Horário ".date("G:i:s");

//VARIÁVEL (Mutável)
$nomeMeu = "Gabriel";
$sobreNome = "Souza";
$sobreNome = "Lopes";
echo "<p>Olá $nomeMeu $sobreNome</p>";

//CONSTANTE (Imutável)
Const PAIS = "Brasil";
echo "Você mora no ".PAIS;

//TIPOS PRIMITIVOS 

  //Escalares:
  $nome = "Nome "; //String
  $idade = 1; //Int
  $peso = 25.15; //Float/Double
  $casado = false; //Booleano

  /*
  0x... Hexadecimal
  0b... Binario
  0... Octal
  */

  echo "<p></p>";
  $val = 300;
  var_dump($val);

  echo "<p></p>";
  $num = 3e2; //3*10^2 
  var_dump($num);

  echo "<p></p>";
  $numMod = (int)30.33;
  var_dump($numMod);

  echo "<p></p>";
  $floatFalso = (float)"Oi";
  var_dump($floatFalso);

  echo "<p></p>";
  $boolT = (int)true;
  var_dump($boolT);

  echo "<p></p>";
  $boolF = (int)false;
  var_dump($boolF);


  //Compostos:
  echo "<p></p>";
  $vet = [6,2,9,3,5];
  var_dump($vet);
  
    //Object:
    echo "<p></p>";
    Class Pessoa{
      private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);


  //Especiais:
  /*
  null
  resource
  collabe
  mixed
  */

//FORMATOS DE STRINGS

  //Variáveis:
  $str = "Gabriel";
  $strUni = '\u{1F499}';

  echo "<p>PHP \u{1F418} Bom dia $str $strUni</p>"; // Aspa Dupla interpreta conteúdo exterior

  echo '<p>PHP \u{1F418} Bom dia $str $strUni</p>'; // Aspa Singular não interpreta conteúdo exterior

  //Constantes:
  const CANAL1 = "Curso em vídeo 1 \u{1F499}";
  const CANAL2 = 'Curso em vídeo 2 \u{1F499}';

  echo "\n Eu adoro o ".CANAL1." e o ".CANAL2;

  // Sequência de escape:

  /*
  \n Nova Linha
  \t Tabulação Horizontal
  \\ Barra Invertida 
  \$ Sinal de Cifrão
  \u{} Codepoint Unicode
  */

  $nome = "Gabriel";
  $snome = "Souza";
  $apelido = "Gafanhoto";
    
  echo "<p>$nome $apelido $snome</p>";
  echo "<p>$nome \" $apelido \" $snome</p>";
  echo "<p>$nome \" Gafanhoto \" $snome</p>";
  
  $cnl = "Curso em vídeo";
  $ano = date("Y");

  //Sintaxe Heredoc:
  echo <<< TESTE
    <p>Olá galera do $cnl ! 
      Tudo bem com vocês ?
    Como está sendo esse $ano ?
    Abraços ! \u{1F596}</p>
  TESTE;

  //Sintaxe Newdoc
  echo <<< 'TESTE'
    <p>Olá galera do $cnl !
      Tudo bem com vocês ?
    Como está sendo esse $ano ?
    Abraços ! \u{1F596} </p>
  TESTE;

//EXPRESSÕES ARITMÉTICAS 
  //Ordem sem parênteses:
  /* 
  **
  / * % 
  + -
  */
  $resp1 = 1+2**3/4+2*7;
  echo "<p>$resp1</p>";

  //Ordem com parênteses:
  /*
  ()
  **
  / * %
  + -
  */
  $resp2 = ((1+2)**((3%4)+2))*7;
  echo "<p>$resp2</p>";

  //Funções Aritméticas:
  /* 
  ceil(...) Arredonda para cima
  flor(...) Arredonda para baixo
  round(...) Arredonda
  sin(...) Seno
  cos(...) Cosseno 
  tan(...) Tangente 
  */

   $r = pow(5, 2); //pow(valor, número a elevar) Não contém precedência como o **
   echo "<p>$r</p>";

   $r = hypot(4, 3); 
  //hypot(cateto1, cateto2);
  echo "<p>$r</p>";

  $r1 = pi();
  $r2 = M_PI;
  echo "<p>$r1 OU $r2</p>";

  $r1 = sqrt(81);
  $r2 = 81**(1/2);
  //Raiz Quadrada 
  echo "<p>$r1 OU $r2</p>";

  $r1 = max(8,10,34,5,1,2); //Valor máximo do conjunto
  $r2 = min(8,10,34,5,1,2); //Valor mínimo do conjunto
  echo "<p>$r2 ... $r1</p>";

  $min = 0;
  $max = 100;
  $r1 = rand($min,$max);
  //Pode dar problema
  $r2 = mt_rand($min,$max);
  //Nessecita do valor mínimos ser menor que o valor máximo, 4x mais rápido 
  $r3 = random_int($min,$max);
  //Gera um valor criptografado, porém é lento
  echo "<p>$r1 ... $r2 ... $r3</p>";

  $r = intdiv(5,2);
  //Resulta o valor inteiro da divisão
  echo "<p>$r</p>";

  $r = abs(-123.4); //Valor absoluto
  echo "<p>$r</p>";

  $r = base_convert(254, 10, 2);
  /* 
  10 (decimal ), 8(octal), 16(hexadecimal), 2(binário)
  
  base_convet(valor, base dele, conversão desejada);
  */
  echo "<p>$r</p>";

    ?> 
  </body>
</html>