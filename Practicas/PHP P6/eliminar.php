<?php
include_once "funciones.php";

if (isset($_GET['id'])) { // Verifica si se ha enviado un ID a través de la URL
    $id = $_GET['id']; //El get obtiene el id de la URL
    consultaSQL("DELETE FROM ciudades WHERE id = $id");
}

header("Location: ciudades.php"); // redirige después de eliminar
exit;
?>