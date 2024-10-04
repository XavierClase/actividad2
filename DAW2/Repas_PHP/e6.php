<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e7</title>
</head>
<body>
    <?php
        echo "<table border=\"1\">";
        for ($i=0; $i <= 10; $i++) { 
            echo "<tr>";
            if ($i == 0) {
                for ($j=0; $j <= 10; $j++) { 
                    if ($j == 0) {
                        echo "<th> * </th>";
                    } else {
                        echo "<th> " . $j . " </th>";
                    }
                }
            } else {
                for ($j=0; $j <= 10; $j++) { 
                    if ($j == 0) {
                        echo "<th> " . $i ." </th>";
                    } else {
                        echo "<td> " . $i*$j . " </td>";
                    }
                }
            }
            echo "</tr>";
        }

        echo "</table>";
    ?>
</body>
</html>