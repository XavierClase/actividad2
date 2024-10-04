<?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        if (isset($_GET['suma'])) {
            echo $num1 + $num2;
        } elseif (isset($_GET['resta'])) {
            echo $num1 - $num2;
        } elseif (isset($_GET['multi'])) {
            echo $num1 * $num2;
        } elseif (isset($_GET['division'])) {
            echo $num1 / $num2;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e3</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="num1" id="num1" placeholder="num1">
        <input type="number" name="num2" id="num2" placeholder="num2">

        <button type="submit" name="suma">+</button>
        <button type="submit" name="resta">-</button>
        <button type="submit" name="multi">x</button>
        <button type="submit" name="division">/</button>

    </form>
</body>
</html>