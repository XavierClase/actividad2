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
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return 'Error: No es pot dividir per zero';
                }
            default:
                return 'Error';
        }
    } 
}
?>

<body>
    <h1>CALCULADORA</h1><br><br>
    <h2>Calculadora bàsica</h2><br><br>

    <form action="" method="get">
        <input type="number" name="num1" id="num1" >
        <select name="operacio" id="operacio" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" id="num2" >
        <button type="submit">Calcular</button>
    </form>

    <br>
    <br>

    <p>Resultat = 
    <?php 
        if (isset($_GET['num1']) && isset($_GET['operacio']) && isset($_GET['num2'])) {
            if ($_GET['num1'] === '' || $_GET['num2'] === '') {
                echo 'Error: Falten dades per a realitzar l\'operació';
            } else {
                echo operacio($_GET['num1'], $_GET['operacio'], $_GET['num2']);
            }
        }
    ?>
    </p>
</body>
</html>
