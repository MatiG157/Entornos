<?php
include_once "funciones.php";

$id = $_GET['id'];
$resultado = consultaSQL("SELECT * FROM ciudades WHERE id = $id");
$ciudad = mysqli_fetch_assoc($resultado); // Obtiene los datos de la ciudad a editar y los almacena en un array asociativo

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica si se ha enviado el formulario
    // Si se ha enviado el formulario, actualiza los datos de la ciudad
    $nuevaCiudad = $_POST['ciudad'];
    $nuevoPais = $_POST['pais'];
    $nuevosHabitantes = $_POST['habitantes'];
    $nuevaSuperficie = $_POST['superficie'];
    $nuevoTieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    consultaSQL("UPDATE ciudades SET 
        ciudad = '$nuevaCiudad', 
        pais = '$nuevoPais', 
        habitantes = $nuevosHabitantes, 
        superficie = $nuevaSuperficie,
        tieneMetro = $nuevoTieneMetro 
        WHERE id = $id");

    header("Location: ciudades.php"); // redirige después de editar
    exit;
}
?>

<form method="post">
    Ciudad: <input type="text" name="ciudad" value="<?= $ciudad['ciudad'] ?>"><br>
    País: <input type="text" name="pais" value="<?= $ciudad['pais'] ?>"><br>
    Habitantes: <input type="number" name="habitantes" value="<?= $ciudad['habitantes'] ?>"><br>
    Superficie: <input type="number" name="superficie" value="<?= $ciudad['superficie'] ?>"><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro" <?= $ciudad['tieneMetro'] ? 'checked' : '' ?>><br>
    <input type="submit" value="Guardar cambios">
</form>

