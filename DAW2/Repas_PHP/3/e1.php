<?php

session_start();


if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0; 
}


if (isset($_GET['counter'])) {
    $counter = intval($_GET['counter']); 


    if ($counter === 1) {
        $_SESSION['contador'] += 1; 
    } elseif ($counter === 0) {
        $_SESSION['contador'] -= 1; 
    }
}


echo "El valor actual del contador es: " . $_SESSION['contador'];
