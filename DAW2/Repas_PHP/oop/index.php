<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <?php
        require_once 'avion.php';
        require_once 'coche.php';
        $avion = new Avion('AIRBUS','RYANAIR',200);
        $coche = new Coche('Leon', 'Seat', 5, 'KYS 01312');

        echo $coche->muestraInfo();
        //echo $avion->getModelo();

        //echo $avion->muestraInfo();
    ?>
</body>
</html>