<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/escalera1.css">
</head>
<body>
<br><br><br>
<div class="div1">
   

<h1>Resultado de la operación</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nivel = $_POST["nivel"];
    $numero = $_POST["numero"];
    $operacion = $_POST["operacion"];

    echo "<p>Nivel de la escalera: $nivel</p>";
    echo "<p>Números en la escalera: del 1 al $numero</p>";

    switch ($operacion) {
        case "sumar":
            $resultado = ($numero * ($numero + 1)) / 2;
            echo "<p>Resultado de la suma: $resultado</p>";
            break;
        case "multiplicar":
            $resultado = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $resultado *= $i;
            }
            echo "<p>Resultado de la multiplicación: $resultado</p>";
            break;
        default:
            echo "<p>Operación no válida.</p>";
            break;
    }
}
?>
</div>






    
</body>
</html>