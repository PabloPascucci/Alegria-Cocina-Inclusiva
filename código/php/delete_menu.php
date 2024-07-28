<?php
// Conectar con la base de datos
// $connect = mysqli_connect("localhost","u320308767_alegriaci","bM|0di0?N","u320308767_alegria") or die("No se conecto con la BD");
$connect = mysqli_connect("localhost","root","","alegria") or die("No se conecto con la BD");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && isset($_GET['plato'])) {
    // Obtener ID y tipo de plato desde la URL
    $id = $_GET['id'];
    $tipo_plato = $_GET['plato'];

    // Escapar valores para prevenir SQL injection
    $id = mysqli_real_escape_string($connect, $id);
    $tipo_plato = mysqli_real_escape_string($connect, $tipo_plato);

    // Construir y ejecutar la consulta DELETE
    $query = "DELETE FROM $tipo_plato WHERE id_producto = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Plato eliminado correctamente.";
        header("Location:../../panel/menu.php?plato=".$tipo_plato."");
    } else {
        echo "Error al eliminar el plato: " . mysqli_error($connect);
    }
}

// Cerrar la conexión
mysqli_close($connect);
?>