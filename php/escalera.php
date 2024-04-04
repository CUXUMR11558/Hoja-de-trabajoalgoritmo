<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escalera</title>
    <link rel="stylesheet" href="../style/escalera.css">
</head>
<body>
<h1>Escalera de números</h1>

<div class="div1">

    <form action="" method="post">
        <label for="nivel">INGRESE EL NUMERO DEL NIVEL QUE DESEA QUE TENGA LA ESCALERA</label>
        <input type="number" id="nivel" name="nivel" min="5" max="8" required>
        <button type="submit">Crear escalera</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nivel = $_POST["nivel"];
        if ($nivel >= 5 && $nivel <= 8) {
            echo "<h2>Escalera generada:</h2>";
            echo "<table border='1'>";
            $numero = 1;
            for ($i = 1; $i <= $nivel; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $i; $j++) {
                    echo "<td>$numero</td>";
                    $numero++;
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            echo "<br>";

            echo "<form action='escalera1.php' method='post'>";
            echo "<input type='hidden' name='nivel' value='$nivel'>";
            echo "<input type='hidden' name='numero' value='$numero'>";
            echo "<label for='operacion'>SELECCIONE LA OPCION QUE DESEA HACER CON LOS NUMEROS DE LOS CUADROS</label>";
            echo "<select id='operacion' name='operacion' required>";
            echo "<option value='sumar'>Sumar</option>";
            echo "<option value='multiplicar'>Multiplicar</option>";
            echo "</select>";
            echo "<button type='submit'>Calcular</button>";
            echo "</form>";
        } else {
            echo "<p>El nivel ingresado no está dentro del rango permitido (entre 5 y 8).</p>";
        }
    }
    ?>

</div>



    
</body>
</html>