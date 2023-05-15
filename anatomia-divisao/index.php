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
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
    $resultado = intval($dividendo / $divisor);
    $resto = $dividendo % $divisor;
    ?>
    <div class="form-container d-flex flex-column justify-content-center align-items-center rounded mt-5">
        <h3>Anatomia de uma divisão</h3>
        <form class="generator w-100" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="mb-3">
                <label for="dividendo" class="form-label">Dividendo</label>
                <input type="number" step="1" class="form-control" id="dividendo" name="dividendo" value="<?= $dividendo ?>" required>
            </div>
            <div class="mb-3">
                <label for="divisor" class="form-label">Divisor</label>
                <input type="number" min="1" step="1" class="form-control" id="divisor" name="divisor" value="<?= $divisor ?>">
            </div>
            <button type="submit" class="btn btn-primary col-12 mt-3">Analisar</button>
        </form>
    </div>
    <div class="form-container d-flex flex-column justify-content-center align-items-center rounded mt-3">
        <h3>Estrutura da divisão</h3>
        <div class="divisao d-flex w-100 justify-content-center align-items-center">
            <div class="esquerda" style="min-width: 229px;">
                <div class="d-flex p-3 justify-content-center align-items-center div-height">
                    <strong><?php echo $dividendo ?></strong>
                </div>
                <div class="d-flex p-3 justify-content-center align-items-center div-height">
                    <strong><?php echo $resto ?></strong>
                </div>
            </div>
            <div class="direita" style="min-width: 229px;">
                <div class="cima p-3 d-flex justify-content-center align-items-center div-height">
                    <strong><?php echo $divisor ?></strong>
                </div>
                <div class="d-flex p-3 justify-content-center align-items-center div-height">
                    <strong><?php echo $resultado ?></strong>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>