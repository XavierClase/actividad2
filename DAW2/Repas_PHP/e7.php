<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e5</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="num1" id="num1" placeholder="num1">
        <input type="number" name="num2" id="num2" placeholder="num2">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        for ($i=$num1; $i < $num2; $i++) {
            if ($i%2 != 0) {
                echo $i;
                echo "<br>";
            }
            
        }
    }
        
    ?>
</body>
</html>