<?php

$variable = "";


if (empty($variable)) {

    $variable = "Text exemple";
    echo $variable . "<br>";

    $textMayusculas = strtoupper($variable);
    echo $textMayusculas."<br>";
    echo "<strong>$textMayusculas</strong>";
} else {
    echo $variable;
}
?>
