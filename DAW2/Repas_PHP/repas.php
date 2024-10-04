<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Repàs PHP <?php echo "Ruben"?></h1> <!-- MAAAL -->
    <h1>Repàs PHP <?="Ruben"?></h1> <!-- BIEEEN --> 

    <?php
        echo "<ul>"
        ."<li>GTA</li>"
        ."<li>FIFA</li>"
        ."</ul>".

        //Variable

        //$nom = "Xavier";
        $edad = 19;
        $alumne = true;

       // echo ' Tinc' . $edad . ' anys i hem dic ' . $nom . '<br>';

        //echo gettype($nom);
        echo "<br>";
        var_dump($edad);

        echo "<br>";

        //Creo una variable constante
        define('nom', 'Xavier Pérez');
        echo nom;
    ?>
</body>
</html>