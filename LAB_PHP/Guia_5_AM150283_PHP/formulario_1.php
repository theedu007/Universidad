<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 1</title>
</head>

<body>
    <center>
        <h3>Conversion de un decimal a binario</h3>
        <form action="formulario_1.php" method="post">
        Introducir numero a convertir:
        <input type="text" name="num" maxlength="5" size="5">
        <input type="submit" name="enviar" value="envio">
        </form>
        <?php
        if(!empty($_POST['num']))
        {
            $NumeroDecimal = $_POST['num'];
            echo "El numero decimal es: <strong>$NumeroDecimal</strong><br>";
            $NumeroBinario = ' ';
            do
            {
                $NumeroBinario = $NumeroDecimal % 2 . $NumeroBinario;
                echo "Resultado intermedio: <strong>$NumeroBinario</strong><br>\n";
                $NumeroDecimal = (int)($NumeroDecimal/2);
            }while ($NumeroDecimal > 0);
            echo "Numero en binario resultante: <strong>$NumeroBinario</strong><br>";
        }
        ?>
    </center>
</body>
</html>
