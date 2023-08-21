<?php
    $nro1 = 0;
    $nro2 = 0;
    $resultado = 0;
    $calcular =  'sumar';

    if (isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])){
        $nro1 = $_GET['nro1'];
        $nro2 = $_GET['nro2'];
        $calcular = $_GET['calcular'];

        switch($calcular){
            case'sumar':
                $resultado = $nro1 + $nro2;
                break;
            case'restar':
                $resultado = $nro1 - $nro2;
                break;
            case'multiplicar':
                $resultado = $nro1 * $nro2;
                break;
            case'sumar':
                $dividir = $nro1 / $nro2;
                break;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
    <h1>CALCULADORA BÁSICA</h1>
     <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <form>
        <label for="basic-url" class="form-label">Ingrese primer número: </label>
        <div class="input-group mb-3">
        <span class="input-group-text">#</span>
        <input type="number" name="nro1" value=<?=$nro1 ?> required class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>
        <label for="basic-url" class="form-label">Ingrese segundo número :</label>
        <div class="input-group mb-3">
        <span class="input-group-text">#</span>
        <input type="number" name="nro2" value=<?=$nro2 ?> required class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>

        <!-- Segundo Número <br />
        <input type="number" name="nro2" value=<?=$nro2 ?> required/><br /><br /> -->
        <select name="calcular"  form-select-sm" aria-label=".form-select-sm example">
            <option selected>Seleccione una opción</option>
            <option value ="sumar" <?= ($calcular== 'sumar')?'Selected':'';?>>Sumar</option>
            <option value ="restar" <?= ($calcular== 'restar')?'Selected':'';?>>Restar</option>
            <option value ="multiplicar" <?= ($calcular== 'multiplicar')?'Selected':'';?>>Multiplicar</option>
            <option value ="dividir" <?= ($calcular== 'dividir')?'Selected':'';?>>Dividir</option>
        </select>
        <br /><br />
        <!-- <input type ="submit" value="Calcular"> -->
        <button type="submit" value="Calcular" class="btn btn-primary">Calcular</button>
        <br /><br />
        <label for="basic-url" class="form-label">El resultado es:  <?= $resultado ?> </label>
        

    </form>

    
</body>
</html>