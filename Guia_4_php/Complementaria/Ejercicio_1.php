<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejecicio practico 1</title>
</head>

<body>
    <h3>Primer ejercicio</h3>
    <ol>
        <?php
        $array = [];
        for($i=0;i<=20;i++)
        {
            if($i % 2 == 0)
                array_push($array,$i);
        }
        foreach($array as $num)
        {
            echo "<li>$array<\li>";
        }
        ?>
    </ol>
</body>
</html>
