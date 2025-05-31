<?php
session_start(); // Inicia la sesión, si no se ha iniciado ya
$_SESSION = [];
unset($_SESSION);

header('location: index.html'); exit();

session_destroy();

?>