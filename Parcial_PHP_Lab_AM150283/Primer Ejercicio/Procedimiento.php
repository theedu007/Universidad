<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion Personal</title>
</head>
<body>
    <?php
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $universidad = $_POST['universidad'];
    $carrera = $_POST['carrera'];
    $carnet = $_POST['carnet'];
    $materias = $_POST['materias'];
    $comentarios = $_POST['comentarios'];
    $conocimientos = $_POST['conocimientos_extra'];
    $pais = $_POST['pais'];
    
    echo("<p>");
    echo("Su nombre es: $nombre <br> genero: $genero, nacio en la siguiente fecha: $fecha_nacimiento <br>");
    echo("Estudia en: $Universidad la carrera de: $carrera <br>");
    echo("Su carnet es: $carnet <br>");
    echo("<h3>Ha inscrito las siguientes materias:</h3>");
    echo("<ul>")
    foreach($materias as $valor)
    {
        echo("<li>$valor</li>");
    }
    echo("</ul> <br>");
    echo("</p>")
    ?>
</body>
</html>
