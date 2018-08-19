<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h3>Ejercicio 3</h3>
    <table border="1px solid black">
        <tr>
            <th>Pais</th>
            <th>Capital</th>
        </tr>
        <?php
        $array = array(
            "El Salvador" => "San Salvador",
            "España" => "Madrid",
            "Turkia" => "Ankara",
            "Estados Unidos" => "Washington DC"
        );
        foreach ($array as $pais => $capital)
        {
            echo "<tr>";
            echo "<td>$pais</td>";
            echo "<td$capital</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
