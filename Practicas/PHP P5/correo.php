<?php

session_start();
$_SESSION["contador"]++; // Incrementa el contador en cada carga de página
// Muestra el contador
echo "Contador de visitas: " . $_SESSION["contador"] . "<br>";

echo"<pre>";
print_r($_GET);  /* Aca se almacena todo lo que se envia en el formulario, es un arran en el cual las keys son los "name" de los imputs  */
echo"</pre>"; /* Esto lo que hace es que el formato de lo que muestra el _GET sea mas amigable */


//Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, através del servidor.
$to = $_GET['to']; // Destinatario (webmaster)
$subject = $_GET['subject']; //Asunto
$message = $_GET['message']; //Mensaje
$headers = "MIME-Version: 1.0" . "\r\n"; //MIME es un estándar que define la estructura de los mensajes de correo electrónico 
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n"; // Definimos el tipo de contenido como HTML

// Encabezado remitente
$headers .= "From: " . $_GET['from'] . "\r\n"; // Remitente

if(mail($to, $subject, $message, $headers)) {
    echo "Correo enviado correctamente a" . $_GET['to'] . ".";
    echo "<br> <br> A " . $to . " ";
} else {
    echo "Error al enviar el correo a" . $_GET['to'] . ".";;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">volver</a>
</body>
</html>