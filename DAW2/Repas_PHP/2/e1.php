<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e1</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="numero" id="numero" placeholder="Cerca un nombre">
        <input type="submit" value="Cerca">
    </form>
<?php
    

    $llista = [9, 1, 3, 123, 4, 6, 52, 12];

    for ($i=0; $i < count($llista); $i++) { 
        echo $llista[$i]."<br>";
        
    }

    sort($llista);

    echo "<br> Ordenat: <br>";

    for ($i=0; $i < count($llista); $i++) { 
        echo $llista[$i]."<br>";
        
    }

    echo "<br> Llargada: " . count($llista) . "<br><br>";


    if (isset($_GET['numero'])) {
        $nombre = $_GET['numero'];
        $cerca = array_search($nombre, $llista);

        if ($cerca) {
            echo "Existeix";
        } else {
            echo "No existeix";
        }
    }
?>    
</body>
</html>