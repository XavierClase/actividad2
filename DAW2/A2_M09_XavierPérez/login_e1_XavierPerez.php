<?php

$usuaris = array('pepe' => 'poma12345',
                 'Xavier' => 'Nov_12345'
                );

if (isset($_POST['nom']) && isset($_POST['contra'])) {
    $usuari = $_POST['nom'];
    $contrasenya = $_POST['contra'];

    if (array_key_exists($usuari, $usuaris)) {
        if ($usuaris[$usuari] == $contrasenya) {
            echo "<h2 style='color:green;'>Ususari correcte!!!</h2>";
            echo "<h3 style='color:green;'>Benvingut $usuari";
        } else {
            echo "<h2 style='color:red;'>S'ha produït un error!!!</h2>";
            echo "<h3 style='color:red;'>Descripció: Contrasenya incorrecta</h2>";
        }
    } else {
        echo "<h2 style='color:red;'>S'ha produït un error!!!</h2>";
        echo "<h3 style='color:red;'>Descripció: Usuari no vàlid</h2>";
    }
} else {
    echo "<h2 style='color:red;'>Error: Falten dades del formulari</h2>";
}

?>