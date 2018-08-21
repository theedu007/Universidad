<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  
    <h2>Informacion General</h2>
    <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $compaia = $_POST['compañia'];
    $sitio_web = $_POST['website'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $ext = $_POST['ext'];
    $estado = $_POST['provincia'];
    $pais = $_POST['pais'];
    $comentarios = $_POST['comentarios_personales'];
    echo "Nombre: $nombre <br>";
    echo "Apellido: $apellido <br>";
    echo "Compañia: $compaia <br> ";
    echo "Sitio Web: $sitio_web <br>";
    echo "Email: $email <br>";
    echo "Telefono: $telefono Ext: $ext <br>";
    echo "Estado: $estado <br>";
    echo "Pais: $pais <br>";
    echo "Comentarios: $comentarios <br>"; 
    ?>
</body>
</html>
