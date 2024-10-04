<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<?php

    function operacio($num1 = 0, $operacio = '+', $num2 = 0) {
        if (isset($_GET['num1']) && isset($_GET['operacio']) && isset($_GET['num2'])) {
            $num1 = $_GET['num1'];
            $operacio = $_GET['operacio'];
            $num2 = $_GET['num2'];

            switch ($operacio) {
                case '+':
                    echo $num1 + $num2;
                    break;
                case '-':
                    echo $num1 - $num2;
                    break;
                case '*':
                    echo $num1 * $num2;
                    break;
                case '/':
                    echo $num1 / $num2;
                    break;
                default:
                    echo 'Error';
                    break;
            }
        } else {
            echo 'Falten dades';
        }
    } 
?>

<body>
    <h1>CALCULADORA</h1><br><br>
    <h2>Calculadora bàsica</h2><br><br>

    <form action="" method="get">
        <input type="number" name="num1" id="num1" required>
        <select name="operacio" id="operacio" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" id="num2" required>
        <button type="submit">Calcular</button>
    </form>

    <br>
    <br>

    <p>Resultat = <?php 
        if (isset($_GET['num1']) && isset($_GET['operacio']) && isset($_GET['num2'])) {
            echo operacio($_GET['num1'], $_GET['operacio'], $_GET['num2']);
        }
    ?></p>
</body>
</html>