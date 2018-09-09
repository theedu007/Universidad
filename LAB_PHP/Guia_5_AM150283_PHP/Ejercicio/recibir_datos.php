<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    echo "<center><h3>Datos Ingresados</h3></center>";
    echo "<table border=\"1\" align=\"center\" bgcolor=\"#AACC66\">";
    echo "<tr bgcolor=\"#669966\">";
    echo "<th>";
    echo "Nombre de variable <br>";
    echo "de formulario";
    echo "</th>";
    echo "<th>";
    echo "Valor introducido";
    echo "</th>";
    echo "</tr>";
    foreach($_GET as $nombre_campo => $valor)
    {
        echo "<tr><td> $nombre_campo </td>";
        echo "<td>";
        if(gettype($valor)=="array")
        {
            foreach($valor as $elemento)
                echo "$elemento <br>";
        }
        else
        {
            echo $valor;
            echo "</td>";
            echo "</td>";
        }
    }
    echo "</table><br>";
    ?>
</body>
</html>
