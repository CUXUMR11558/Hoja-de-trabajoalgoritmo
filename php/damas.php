<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>damas</title>
    <link rel="stylesheet" href="../style/damas.css">
</head>

<body>
    <br>

    <h1>TABLERO DE DAMAS CHINAS</h1>
    <br><br><br>
    <div class="tablero">

        <!-- Aquí se generará el tablero de damas con PHP -->
        <?php
        for ($fila = 0; $fila < 8; $fila++) {
            for ($columna = 0; $columna < 8; $columna++) {
                $color_casilla = ($fila + $columna) % 2 == 0 ? 'blanca' : 'negra';
                $clase_ficha = '';

                if ($fila < 3 && $color_casilla == 'negra') {
                    $clase_ficha = 'ficha negra';
                 } elseif ($fila < 6 && $color_casilla == 'negra') {
                    $clase_ficha = 'ficha blanca ';
                }elseif ($fila > 6 && $color_casilla == 'negra') {
                    $clase_ficha = 'ficha ';
                }

                echo "<div class='casilla $color_casilla'>";
                if (!empty($clase_ficha)) {
                    echo "<div class='$clase_ficha'></div>";
                }
                echo "</div>";
            }
        }
        ?>


    </div>




</body>

</html>