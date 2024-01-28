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
        <h1> RESULTADO </h1>
        </header>
        <main>
        <?php
            /*
            Exercício 1

            $valor = $_GET["valor"] ?? 0;
            echo "<em>Valor posto: </em>".$valor.
            "<br> <em>Valor antecessor: </em>".($valor-1).
            "<br> <em>Valor sucessor: </em>".($valor+1);
            */

            /*
            Exercício 2
        
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo "O valor aleatório entre <strong>$min</strong> e <strong>$max</strong> é <strong>$num</strong>"
            */

            /* 
            Exercício 3, 4
            
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $real = $_GET["din"] ?? 0;
            $dolar = $real/$cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Cotação: <strong>".numfmt_format_currency($padrao, $cotacao, "BRL")."</strong> <br> Real: <strong>".numfmt_format_currency($padrao, $real, "BRL")."</strong> <br> Dólar: <strong>".numfmt_format_currency($padrao, $dolar, "USD")."</strong>";
            */

            
            /*Exercício 5*/
                
            $num = $_GET["n"] ?? 0;
            $int = (int) $num;
            $dec = $num - $int;
            echo "<ul> <li> Número Real: <strong>".number_format($num, 3, ",", ".")."</strong> </li> <li> Número Inteiro: <strong>".number_format($int, 0, ",", ".")."</strong> </li> <li> Número Decimal: <strong>".number_format($dec, 3, ",", ".")."</strong> </li> </ul>";
        
        ?>

        <!--
        Exercício 1, 3, 4, 5 -->
        <button onclick="javascript:history.go(-1)">&#x2B05VOLTAR</button>
        

        <!--
        Exercício 2
        <button onclick="javascript:document.location.reload()">&#x1F504GERAR OUTRO</button>
        -->
        
        </main>
    </body>
  </html>