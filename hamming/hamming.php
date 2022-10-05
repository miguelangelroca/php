<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $cadena1 = trim($_GET['cadena1']);
    $cadena2 = trim($_GET['cadena2']);
    $contador = 0;

    if (strlen($cadena1) == strlen($cadena2)) {

        for ($i = 0; $i < strlen($cadena1); $i++) {
            if ($cadena1[$i] != $cadena2[$i]) {
                $contador++;
            }
        }
    ?>
        <p> La distancia de Hamming es: <?= $contador ?></p>
    <?php
    } else { ?>
        <?= "ERROR: No se puede calcular si las cadenas no tienen la misma longitud." ?> <?php

        } ?>

</body>

</html>