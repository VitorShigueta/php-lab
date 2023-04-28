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
        <h3 class="mb-3">Analisador de Número Real</h3>
        <div class="col-12">
        <?php
            $valor = (float) $_REQUEST["valor"];
            $parteInteira = number_format((int) $valor, 3, ",", ".");
            $parteFracionaria = number_format($valor - (int) $valor, 3, ",", ".");
            $total = number_format($valor, 3, ",", ".");
            echo "Analisando o numero <strong>$total</strong> informado pelo usuário é:";
            echo "<ul>
            <li>A parte inteira do número é:<strong> $parteInteira</strong></li>
            <li>A parte fracionária do número é: <strong>$parteFracionaria</strong></li>
        </ul>";
        ?>
        
        <button class="btn btn-primary col-12" onclick="javascript:window.location.href='index.php'">Voltar</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>