<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guia 4 PHP</title>
</head>

<body>
    <h3>Tabla1</h3>
    <?php
    $array_paises = [
                    'Guatemala',
                    'Honduras',
                    'Nicaragua',
                    'Costa Rica',
                    'El Salvador',
                    'Panam&aacute;',
                    'Belice'
                    ];
    
    echo 'El pa&iacute;s m&aacute;s grande de Centro Am&eacute;rica es:
    <b>'.$array_paises[2].'</b><br>';
    echo 'El pa&iacute;s m&aacute;s peque&ntilde;o de Centro Am&eacute;rica es:
    <b>'.$array_paises[4].'</b><br>';
    echo 'El pa&iacute;s m&aacute;s pobre de Centro Am&eacute;rica es:
    <b>'.$array_paises[6].'</b><br>';

    echo "<h3>Tabla 2 </h3>";
    $i = (integer) 0;
    $j = (integer) 0;
    $k = (integer) 0;
    $array_paises = [];
    $array_capitales = [];

    $array_paises = [
                    'Guatemala',
                    'Honduras',
                    'Nicaragua',
                    'Costa Rica',
                    'El Salvador',
                    'Panama',
                    'Belice'
                    ];
    
    $array_capitales[] = 'Guatemala';
    $array_capitales[] = 'Tegucigalpa';
    $array_capitales[] = 'Managua';
    $array_capitales[] = 'San Jos&eacute;';
    $array_capitales[] = 'San Salvador';
    $array_capitales[] = 'Panam&aacute;';
    $array_capitales[] = 'Belmop&aacute;n';
    
    echo '<h5>RECORRIDO DE UN ARREGLO UTILIZANDO LA ESTRUCTURA REPITITIVA:
    <u>FOR</u></h5>';

    for($i=0;$i<count($array_paises);$i++):
        echo ($i+1).'- '.$array_paises[$i].'<br>';
    endfor;

    echo '<h5>RECORRIDO DE UN ARREGLO UTILIZANDO LA ESTRUCTURA REPITITIVA: <u>FOR
    EACH</u></h5>';

    foreach ($array_capitales as $capitales):
        $j++;
        echo $j.'- '.$capitales.'<br>';
    endforeach;

    echo '<h5>RECORRIDO DE UN ARREGLO UTILIZANDO LA ESTRUCTURA REPITITIVA:
    <u>WHILE</u></h5>';
    while(list($k,$nombre_pais)=each($array_paises))
    {
        echo ($k+1).'- '.$nombre_pais.'<br>';
    }

     echo '<h5>IMPRIMIR ARRAY SIN ESTRUCTURA REPITITIVA</h5>';
     print "<pre>"; print_r($array_capitales); print "</pre>\n";

    echo "<h3>Tabla 3</h3>";
    $titulo_tabla = (string) '';
    $valores_tabla = (string) '';
    $array_asociativo_pais = [];
    $array_asociativo_carro = [];

    $array_asociativo_pais = 
                            [
                            'pais' => 'El Salvador',
                            'capital' => 'San Salvador',
                            'moneda' => 'Dolar (USD $)',
                            'idioma' => 'Español',
                            'flor' => 'Floz de Izote',
                            'ave' => 'Torogoz'
                            ];
    
    $array_asociativo_carro =
                            [
                            'marca' => 'Toyota',
                            'modelo' => 'YARIS',
                            'color' => 'Negro',
                            'year' => 2013,
                            'precio' => 10000,
                            'pais' => 'Jap&oacute;n'
                            ];

    echo '<h5>RECORRIDO DE UN ARRAY ASOCIATIVO UTILIZANDO CONTROLES
    REPETITIVOS</u></h5>';
    foreach ($array_asociativo_pais as $campo => $valor):
        $titulo_tabla = $titulo_tabla.'<td style="width:16%; text-align:center; fontweight:bold;">'.ucwords($campo).'</td>';
        $valores_tabla = $valores_tabla.'<td style="width:16%; align:center;">'. $valor.'</td>';
    endforeach;

    echo '<table style="width:100%" border="1">'
    . '<tr>'.$titulo_tabla.'</tr>'
    . '<tr>'.$valores_tabla.'</tr>'
    . '</table>';

    echo '<h5>RECORRIDO DE UN ARRAY ASOCIATIVO SIN UTILIZAR CONTROLES
    REPETITIVOS</u></h5>';

    echo '<table style="width:50%" border="1">'
    . '<tr><td style="width:50%; fontweight:bold;">Marca:</td><td>'.$array_asociativo_carro['marca'].'</td></tr>'
    . '<tr><td style="width:50%; fontweight:bold;">Modelo:</td><td>'.$array_asociativo_carro['modelo'].'</td></tr>'
    . '<tr><td style="width:50%; fontweight:bold;">Color:</td><td>'.$array_asociativo_carro['color'].'</td></tr>'
    . '<tr><td style="width:50%; fontweight:bold;">A&ntilde;o:</td><td>'.$array_asociativo_carro['year'].'</td></tr>'
    . '<tr><td style="width:50%; font-weight:bold;">Precio (USD
    $):</td><td>'.number_format($array_asociativo_carro['precio'], 2, '.', ',').'</td></tr>'
    . '<tr><td style="width:50%; font-weight:bold;">Pa&iacute;s
    Fabricante:</td><td>'.$array_asociativo_carro['pais'].'</td></tr>'
    . '</table>';

    echo '<h5>IMPRIMIR ARRAY SIN ESTRUCTURA REPITITIVA</h5>';
    echo '<table style="width:50%" border="1">'
    . '<tr><td style="width:50%; fontweight:bold;">Marca:</td><td>'.$array_asociativo_carro['marca'].'</td></tr>'
    . '<tr><td style="width:50%; fontweight:bold;">Modelo:</td><td>'.$array_asociativo_carro['modelo'].'</td></tr>'
    . '<tr><td style="width:50%; fontweight:bold;">Color:</td><td>'.$array_asociativo_carro['color'].'</td></tr>'
    . '<tr><td style="width:50%; fontweight:bold;">A&ntilde;o:</td><td>'.$array_asociativo_carro['year'].'</td></tr>'
    . '<tr><td style="width:50%; font-weight:bold;">Precio (USD
    $):</td><td>'.number_format($array_asociativo_carro['precio'], 2, '.', ',').'</td></tr>'
    . '<tr><td style="width:50%; font-weight:bold;">Pa&iacute;s
    Fabricante:</td><td>'.$array_asociativo_carro['pais'].'</td></tr>'
    . '</table>';

    echo "<h3>Tabla 4</h3>";
    
    $matriz1 = [];
    $matriz2 = [];
    $matriz3 = [];
    $i = (integer) 0;
    $j = (integer) 0;

    $matriz1[0][0] = "peseta";
    $matriz1[0][1] = 166.386;
    $matriz1[1][0] = "dolar";
    $matriz1[1][1] = 0.96;
    $matriz2[0] = ["peseta",166.386];
    $matriz2[1] = ["dolar",0.96];
    $matriz3 = array(array("peseta",166.386),array("dolar",0.96));

    ?>
    <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
    <TR ALIGN="center" BGCOLOR="yellow">
        <TD></TD>
        <TD>Moneda</TD>
        <TD>Cambio €</TD>
    </TR>
        
    <?php
    for($i=0;$i<2;$i++)
    {
    echo "<TR ALIGN='center'>";
    echo "<TD BGCOLOR='yellow'>\$matriz1[$i]</TD>";
        for($j=0;$j<2;$j++)
        {
            echo "<TD>".$matriz1[$i][$j]."</TD>";
        }
    echo "</TR>";
    }
        
    for($i=0;$i<2;$i++)
    {
        echo "<TR ALIGN='center'>";
        echo "<TD BGCOLOR='yellow'>\$matriz2[$i]</TD>";
        for($j=0;$j<2;$j++)
        {
            echo "<TD>".$matriz2[$i][$j]."</TD>";
        }
        echo "</TR>";
    }
    for($i=0;$i<2;$i++)
    {
        echo "<TR ALIGN='center'>";
        echo "<TD BGCOLOR='yellow'>\$matriz3[$i]</TD>";
        for($j=0;$j<2;$j++)
        {
            echo "<TD>".$matriz3[$i][$j]."</TD>";
        }
        echo "</TR>";
    }
    ?>
    </TABLE>
    
    <h3>Tabla 5</h3>
    <?php
    $array_info_libros = [];
    $array_categorias = ['comics','ficcion','fantasia','horror'];
    $array_campos = ['titulo','autor','publicacion'];

     $array_info_libros =
     [
     'comics' =>
     [
     'titulo' => 'Superman',
     'autor' => 'Jerry Siegel and Joe Shuster',
     'publicacion' => '1938'
     ],
     'ficcion' =>
     [
     'titulo' => 'Dune',
     'autor' => 'Frank Herbert',
     'publicacion' => '1965'
     ],
     'fantasia' =>
     [
     'titulo' => 'The Hobbit',
     'autor' => 'J.R.R. Tolkien',
     'publicacion' => '1937'
     ],
     'horror' =>
     [
     'titulo' => 'Carrie',
     'autor' => 'Stephen King',
     'publicacion' => '1974'
     ],
     ];

     echo '<table border="1" cellpading="2" cellspacing="2">'
     . '<tr align="center" bgcolor="yellow">'
     . '<td>Categorias</td>'
     . '<td>Titulo</td>'
     . '<td>Autor</td>'
     . '<td>Fecha Publicacion</td>'
     . '</tr>';
    
    for($i=0;$i<=3;$i++):
        echo '<tr align="center">'
        . '<td bgcolor="yellow">'.strtoupper($array_categorias[$i]).'</td>';
        for($j=0;$j<=2;$j++):
            echo '<td>'.$array_info_libros[$array_categorias[$i]][$array_campos[$j]].'</td>';
        endfor;
        echo '</tr>';
    endfor;
    echo '</table>';
    ?>
    <h3>Tabla 6</h3>
    <?php
    $array_asociativo_pais = [];
    $array_asociativo_pais =
                            [
                            'pais' => 'El Salvador',
                            'capital' => 'San Salvador',
                            'moneda' => 'Dolar (USD $)',
                            'idioma' => 'Espa&ntilde;ol',
                            'flor' => 'Floz de Izote',
                            'ave' => 'Torogoz'
                            ];
    echo '<h5>FUNCION: array_change_key_case</h5>';
    print "<pre>";
    print_r(array_change_key_case($array_asociativo_pais,CASE_UPPER)); 
    print"</pre>\n";
    ?>
    
    <h3>Tabla 7</h3>
    <?php
    $array_indice = [];
    $array_valores = [];
    $array_indice = ['dui','nit','nombres','apellidos','fecha_nacimiento','sexo'];
    $array_valores = [
                    '036562501-1',
                    '0614-111286-128-3',
                    'EDWIN LEONARDO',
                    'FIGUEROA HUEZO',
                    '11/12/1986',
                    'MASCULINO'
                    ];
    echo '<h5>FUNCION: array_combine </h5>';
    print "<pre>"; print_r(array_combine ($array_indice,$array_valores)); 
    print "</pre>\n";
    ?>
    
    <h3>Tabla 8</h3>
    <?php
    $array_frutas = [];
    $array_frutas = ['manzanas','peras','jocotes','anona','sandia','uvas'];
    array_pop($array_frutas);
    echo '<h5>FUNCION: array_pop </h5>';
    print "<pre>"; print_r($array_frutas); print "</pre>\n";
    ?>
    
    <h3>Tabla 9</h3>
    <?php
    $array_frutas = [];
    $array_frutas = ['manzanas','peras','jocotes','anonas'];
    array_push($array_frutas,'naranjas','mandarinas');
    echo '<h5>FUNCION: array_push </h5>';
    print "<pre>"; print_r($array_frutas); 
    print "</pre>\n";
    ?>
    
    <h3>Tabla 10</h3>
    <?php
    $array_asociativo_pais = [];
    $actualizar_datos = [];

    $array_asociativo_pais =
                            [
                            'pais' => 'El Salvador',
                            'capital' => 'San Salvador',
                            'moneda' => 'Colon',
                            'idioma' => 'Espa&ntilde;ol',
                            'flor' => 'Floz de Izote',
                            'ave' => 'Torogoz'
                            ];
    $actualizar_datos =
                        [
                        'moneda' => 'Dolar (USD $)',
                        'idioma' => 'Ingles'
                        ];

    echo '<h5>FUNCION: array_replace </h5>';
    print "<pre>"; print_r(array_replace($array_asociativo_pais,$actualizar_datos));
    print "</pre>\n";
    ?>
    
    <h3>Tabla 11</h3>
    <?php
    $array_colores = [];
    $array_colores = ['rojo','azul','verde','blanco','negro','amarillo'];
    $color_buscar = 'Rojo';

    if(in_array($color_buscar, $array_colores)):
        echo 'Existe el color solicitado: '.$color_buscar;

    else:
        echo 'No existe el color a buscar';
    endif;
    ?>

    <h3>Tabla 12</h3>
    <?php
    $array_frutas = [];
    $array_asociativo_pais = [];

    $array_frutas = ['manzanas','peras','jocotes','anonas'];
    $array_asociativo_pais =
                            [
                            'pais' => 'El Salvador',
                            'capital' => 'San Salvador',
                            'moneda' => 'Dolar (USD $)',
                            'idioma' => 'Espa&ntilde;ol',
                            'flor' => 'Floz de Izote',
                            'ave' => 'Torogoz'
                            ];

    unset($array_frutas[1]);
    unset($array_asociativo_pais['idioma']);

    echo '<h5>FUNCION: unset (Array Simple) </h5>';
    print "<pre>"; print_r($array_frutas); print "</pre>\n";

    echo '<h5>FUNCION: unset (Array Asociativo) </h5>';
    print "<pre>"; print_r($array_asociativo_pais); print "</pre>\n";
    ?>
    
    <h3>Tabla 13</h3>
    <?php
    $array_registro_alumnos = [];
    $array_registro_nombres = [];
    $array_registro_materia_notas = [];
    $array_registro_alumnos =
                            [
                                [
                                'carnet' => 'FH040234',
                                'nombre_completo' => 'EDWIN FIGUEROA',
                                'materia' => 'JAVA I',
                                'nota' => 9.95
                                ],
                                [
                                'carnet' => 'MT040099',
                                'nombre_completo' => 'CESAR MEJIA',
                                'materia' => 'PROGRAMACION II',
                                'nota' => 8.30
                                ],
                                 [
                                 'carnet' => 'MM000435',
                                 'nombre_completo' => 'MANUEL MARTINEZ',
                                 'materia' => 'PROGRAMACION III',
                                 'nota' => 10
                                 ],
                                 [
                                 'carnet' => 'BR040102',
                                 'nombre_completo' => 'JOSE BONILLA',
                                 'materia' => 'JAVA I',
                                 'nota' => 7.95
                                 ]
                            ];

    $array_registro_nombres = array_column($array_registro_alumnos,'nombre_completo');
    $array_registro_materia_notas = array_column($array_registro_alumnos,'nota','carnet');

    echo '<h5>FUNCION: array_column </h5>';
    print "<pre>"; print_r($array_registro_nombres); print "</pre>\n";

    echo '<h5>FUNCION: array_column </h5>';
    print "<pre>"; print_r($array_registro_materia_notas); print "</pre>\n";
    ?>
    <h3>Tabla 14</h3>
    <?php
    $array_marca_autos = [];
    $contador = 0;

    array_push($array_marca_autos, 'BMW');
    array_push($array_marca_autos, 'MAZDA');
    array_push($array_marca_autos, 'TOYOYA');
    array_push($array_marca_autos, 'HONDA');
    array_push($array_marca_autos, 'FERRARI');
    array_push($array_marca_autos, 'AUDI');

    arsort($array_marca_autos);

    foreach ($array_marca_autos as $marca):
    $contador++;
    echo $contador.'- '.$marca.'<br>';
    endforeach;
    ?>
    
    <h3>Tabla 15</h3>
    <?php
    $array_marca_autos = [];
    $contador = 0;

    array_push($array_marca_autos, 'BMW');
    array_push($array_marca_autos, 'MAZDA');
    array_push($array_marca_autos, 'TOYOYA');
    array_push($array_marca_autos, 'HONDA');
    array_push($array_marca_autos, 'FERRARI');
    array_push($array_marca_autos, 'AUDI');

    asort($array_marca_autos);

    foreach ($array_marca_autos as $marca):
    $contador++;
    echo $contador.'- '.$marca.'<br>';
    endforeach;
    ?>
    
</body>
</html>
