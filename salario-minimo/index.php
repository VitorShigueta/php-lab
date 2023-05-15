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
    <?php
    $minimo = 1320;
    $salario = $_GET['salario'] ?? 0;
    $salariosMinimos = intval($salario / $minimo); 
    $restoSalario = $salario % $minimo;
    ?>
    <div class="form-container d-flex flex-column justify-content-center align-items-center rounded mt-5">
        <h3>Salário minimo</h3>
        <form class="generator w-100" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="mb-3">
                <label for="salario" class="form-label">Informe seu salário:</label>
                <input type="number" step="0.01" min="0" class="form-control" id="salario" name="salario" value="<?= $salario ?>" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Calcular</button>
        </form>
    </div>
    <div class="form-container rounded mt-3">
        <h3>Salário minimo</h3>
        <div class="w-100 d-flex justify-content-center align-items-center ">
            <?php
            echo "Quem recebe um salário de R\$: " . number_format($salario, 2, ",", ".") . " ganha $salariosMinimos salários mínimos + R\$: "  . number_format($restoSalario, 2, ",", ".")
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>