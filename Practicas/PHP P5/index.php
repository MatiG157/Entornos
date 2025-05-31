<?php
session_start(); // Inicia la sesión, si no se ha iniciado ya
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0; // Inicializa el contador si no existe
} else {
    $_SESSION["contador"]++; // Incrementa el contador en cada carga de página
}
// Muestra el contador
echo "Contador de visitas: " . $_SESSION["contador"] . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="formulario.php">formulario</a>
    <a href="recomendar.php">recomendar</a>
    <a href="logout.php">reiniciar contador</a>
</body>
</html>
