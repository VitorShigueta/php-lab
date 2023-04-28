<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center form-container rounded">
        <h3 class="mb-3">Concersor de moedas(brl=>usd)</h3>
        <div class="col-12">
        <?php
            $url = 'https://economia.awesomeapi.com.br/last/USD-BRL';

            // Inicia uma nova sessão cURL
            $curl = curl_init($url);
            
            // Define as opções da requisição
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
            // Envia a requisição e obtém a resposta
            $resposta = curl_exec($curl);
            
            // Verifica se houve algum erro
            if(curl_errno($curl)) {
                echo 'Erro: ' . curl_error($curl);
            }
            
            // Fecha a sessão cURL
            curl_close($curl);

            $data = json_decode($resposta, true);
            $bid = $data['USDBRL']['bid'];
            
            $valor = $_REQUEST["valor"];
            $preçoDolar = $bid;
            $dolar = $valor/$preçoDolar;
            $dolarResp = number_format((float)$dolar, 2, '.', '');
            
            echo "Seus R$ $valor equivalem  a US$ $dolarResp";
        ?>
        <button class="btn btn-primary col-12" onclick="javascript:window.location.href='conversor.php'">Voltar</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>