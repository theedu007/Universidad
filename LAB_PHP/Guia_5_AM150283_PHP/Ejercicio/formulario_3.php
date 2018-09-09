<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <title>Ejemplo 2</title>
</head>
<body>
    <form action="recibir_datos.php" method="get" name="datos">
        <table>
            <tr>
                <td colspan="2" align="center"><h3>Datos Personales</h3></td>
            </tr>
            
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="frmNombre" size="25" maxlength="25"></td>
            </tr>
            
            <tr>
                <td>Apellido: </td>
                <td><input type="text" name="frmApellido" size="25" maxlength="25"> </td>
            </tr>
            
            <tr>
                <td>Sexo:</td>
                <td>
                    <input type="radio" name="frmgen" value="masculino">Masculino
                    <input type="radio" name="frmgen" value="femenino">Femenino
                </td>
            </tr>
            
            <tr>
                <td>Edad: </td>
                <td><input type="text" name="frmEdad" size="3" maxlength="3"> </td>
            </tr>
            
            <tr>
                <td>Pais</td>
                <td>
                    <select name="frmPais" size="1">
                        <option value='ES'>El Salvador</option>
                        <option value='GU'>Guatemala</option>
                        <option value='CR'>Costa Rica</option>
                        <option value='HO'>Honduras</option>
                        <option value='NI'>Nicaragua</option>
                        <option value='BE'>Belice</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Cursos a tomar:</td>
                <td>
                    <select name="frmCursos[]" size="6" multiple>
                        <option value='Literatura'>Literatura</option>
                        <option value='Programacion'>Programacion</option>
                        <option value='Matematicas'>Matematicas</option>
                        <option value='Ciencias'>Ciencias</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <input type="submit" value="Enviar">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
