<?php
    $array = [];
    $i = 1;
    while (count($array) < 120) {
        array_push($array, $i);
        $i++;
    }

    for ($i=0; $i < count($array); $i++) { 
        echo $array[$i] . "<br>";
    }
?>