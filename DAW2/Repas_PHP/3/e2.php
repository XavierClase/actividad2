<?php

// 1. 
function validarEmail($email) {

    // 2. 
    return filter_var($email, FILTER_VALIDATE_EMAIL);
    
}

// 3. 
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    
    // 4. 
    if (validarEmail($email)) {
        echo "El email '$email' es válido.";
    } else {
        echo "El email '$email' NO es válido.";
    }
} else {
    echo "Por favor, introduce un email en la URL usando '?email=tuemail@example.com'.";
}

?>
