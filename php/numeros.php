<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/numeros.css">
</head>
<body>
    <br><br><br><br>
<div class="divpri">

    <h1>MATRIZ</h1>

<form method="post">
    <label for="filas">Filas:</label>
    <input type="number" id="filas" name="filas" min="1" required>
    <label for="columnas">Columnas:</label>
    <input type="number" id="columnas" name="columnas" min="1" required>
    <button type="submit">Crear Matriz</button>
  </form>


  <?php
  function is_prime($num) {
    if ($num <= 1) {
      return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
      if ($num % $i === 0) {
        return false;
      }
    }
    return true;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];
    echo "<h2>La Matriz $filas x $columnas es la siguiente con los numeros primos resaltados</h2>";
    echo "<table>";
    $numero = 1;
    for ($i = 0; $i < $filas; $i++) {
      echo "<tr>";
      for ($j = 0; $j < $columnas; $j++) {
        $numero++;
        if (is_prime($numero)) {
          echo "<td class='prime'>$numero</td>";
        } else {
          echo "<td>$numero</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  ?>
    <br><br><br>
</div>
    
</body>
</html>