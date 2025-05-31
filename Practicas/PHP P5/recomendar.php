<?php
session_start(); // Inicia la sesión, si no se ha iniciado ya
$_SESSION["contador"]++; // Incrementa el contador en cada carga de página
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
    <form action="correo.php" method="GET">
        
        <label for="from">Tu mail:</label>
        <input type="email" id="from" name="from" required><br><br>

        <label for="email">Correo electrónico de tu amigo:</label>
        <input type="email" id="to" name="to" required><br><br>

        <!-- quiero poner un input invisible que mande un correo predeterminado de recomendacion -->
        <input type="hidden" name="subject" value="Recomendación de página">
        <input type="hidden" name="message" value="te recomiendo la pagina de matias">

        <button type="submit">Enviar</button>
    </form>    
</body>
</html>
