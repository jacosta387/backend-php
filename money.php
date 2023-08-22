<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERSOR DE MONEDA</title>
    
</head>

<body>
    <?php
    $Quantity = $_POST["quantity"];
    $firstValue = $_POST["firstvalue"];
    $secondValue = $_POST["secondvalue"];

    $pesos_a_rupees = 0.020;
    $rupees_a_colpesos = 48.89;
    $pesos_a_dollar = 0.00024;
    $dollar_a_pesos = 4063.06;
    $pesos_a_euro = 0.00022;
    $euro_a_pesos = 4426.64;


    $convertapesos = $Quantity * $pesos_a_rupees;
    $convertarupess = $Quantity * $rupees_a_colpesos;
    $convert_pesos_a_dollar = $Quantity * $pesos_a_dollar;
    $convert_dollar_a_pesos = $Quantity * $dollar_a_pesos;
    $convert_pesos_a_euro = $Quantity * $pesos_a_euro;
    $convert_euro_a_pesos = $Quantity * $euro_a_pesos;

    if ($firstValue == "Rupees" && $secondValue == 'Col') {
        echo "$Quantity rumpias india son: $convertapesos pesos COP.";
    } else {
        if ($firstValue == "Col" && $secondValue == 'Rupees') {
            echo "$Quantity pesos COP son: $convertarupess Rumpias india.";
        } else {
            if ($firstValue == "Col" && $secondValue == 'Dolar') {
                echo "$Quantity pesos COP son: $convert_pesos_a_dollar doláres.";
            } else {
                if ($firstValue == "Dolar" && $secondValue == 'Col') {
                    echo "$Quantity doláres son: $convert_dollar_a_pesos pesos colombianos.";
                } else {
                    if ($firstValue == "Col" && $secondValue == 'Euro') {
                        echo "$Quantity pesos COP son: $convert_pesos_a_euro euros.";
                    } else {
                        if ($firstValue == "Euro" && $secondValue == 'Col') {
                            echo "$Quantity euros son: $convert_euro_a_pesos pesos COP.";
                        }
                    }
                }
            }
        }
    }


    ?>

</body>

</html>