<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
    <body>
        <?php
            echo "addslashes Devuelve un string con barras invertidas delante de los caracteres que necesitan ser escapados. <br>
            Estos caracteres son la comilla simple (\'), comilla doble (\") barra invertida (\\) y NUL (el byte NULL).<br>";

            $frase = 'Son $10';
            echo addslashes($frase);
            echo "explode Devuelve un array de string, siendo cada uno un substring del parámetro string formado <br> 
            por la división realizada por los delimitadores indicados en el parámetro delimiter. <br>";
            $$frase = 'info1,info2,info3';
            $array = explode(",",${$frase});
            echo "$frase[0]<br>";
            echo "$frase[1]<br>";
            echo "$frase[2]<br>";
            echo "<br>";
            echo "fopen: Escribe un texto con formato a un destino especificado<br>";
            $dir = fopen("/var/www/guias_udb/txt/archivo","w");
            fprintf($dir,'%s',"hola");
            echo "<br>";
            echo "htmlspecialchars — Convierte caracteres especiales a entidades HTML <br>";
            $nuevo = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
            echo $nuevo; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
            echo "<br>";
            echo "md5 Calcula el 'hash' md5 de un string <br>";
            echo md5("hola");
            echo "<br>";
            echo "money_format: Da formato a un número como un string de moneda<br>";
            $number = 1234.56;
            setlocale(LC_MONETARY,"en_US");
            echo money_format("El precio es %i", $number);
            echo "<br>";
            echo "<br>";
            echo "number_format: Formatear un número con los millares agrupados";
            $num = 10.95777777;
            echo number_format($num,2);
            echo "<br>";
            echo "<br>";
            echo "str_replace: Reemplaza todas las apariciones del string buscado con el string de reemplazo <br>";
            $phrase  = "Deberias comer frutas, verduras y fibra.";
            echo "$phrase <br>";
            $healthy = array("frutas", "verduras", "fibra");
            $yummy   = array("pizza", "cerveza", "helado");
            $newphrase = str_replace($healthy, $yummy, $phrase);
            echo "$newphrase <br>";
            echo "<br>";
            echo "strcmp: Comparación de string segura a nivel binario<br>";
            $var1 = "Hola";
            $var2 = "hola";
            if (strcmp($var1, $var2) !== 0) {
                echo '$var1 no es igual a $var2 en una comparación que considera mayúsculas y minúsculas';
            }
            echo "<br>";
            echo "<br>";
            echo "strlen: Obtiene la longitud de un string <br>";
            $str = 'abcdef';
            echo "$str <br>";
            echo strlen($str);
            echo "<br>";
            echo "strncmp: Comparación segura a nivel binario de los primeros n caracteres entre strings <br>";
            $str1 = "phpaaa";
            $str2 = "php";
            echo "textos a comparar: $str1 y $str2 <br>";
            echo strcmp($str1, $str2); // 3
            echo "<br>";
            echo "<br>";
            echo "strpos — Encuentra la posición de la primera ocurrencia de un substring en un string <br>";
            $mystring = 'abc';
            $findme   = 'a';
            echo "texto donde se buscara: $mystring, caracter que se buscara: $findme <br>";
            $pos = strpos($mystring, $findme);
            echo "<br>";  
            echo "strtoupper: Convierte un string a mayúsculas <br>";
            $texto = 'hola';
            echo "$texto <br>";
            echo strtoupper($texto);
            echo "<br>";
            echo "<br>";
            echo "strtolower: Convierte una cadena a minúsculas <br>";
            $ejemplo = 'HOLA';
            echo "$ejemplo <br>";
            echo strtolower($ejemplo);
            echo "<br>";
            echo "<br>";
            echo "substr_replace: Reemplaza el texto dentro de una porción de un string <br>";
            $var = 'ABCDEFGH:/MNRPQR/';
            echo "Original: $var<hr />\n"; 

            /* Estos dos ejemplos reemplazan todo $var por 'bob'. */
            echo substr_replace($var, 'bob', 0) . "<br />\n";
            echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";
            echo "<br>";
            echo "<br>";
            echo "trim: Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena <br>";
            $hello  = "Hello World";
            echo "$hello <br>";
            $trimmed = trim($hello, 'HdWr');
            echo "$trimmed <br>";
            echo "<br>";
            echo "cwords: Convierte a mayúsculas el primer caracter de cada palabra de una cadena";
            $foo = 'hello world!';
            echo "$foo <br>";
            $foo = ucwords($foo);             // Hello World!
            echo "$foo <br>";
            echo "<br>";
            echo "wordwrap: Ajusta un string hasta un número dado de caracteres <br>";
            $text = "The quick brown fox jumped over the lazy dog.";
            echo "$text <br>";
            $newtext = wordwrap($text, 20, "<br />\n");
            echo "$newtext <br>";
        ?> 
    </body>
</html>
