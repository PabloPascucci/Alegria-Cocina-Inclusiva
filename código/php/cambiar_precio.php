<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dpdesarrollos.site">
    <meta name="robots" content="noindex, nofollow">
<!-- ==== Links ==== -->
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" href="../../panel/style.css">
    <link rel="shortcout icon" href="../imagen/configuracion.ico">
    <title>Cambio de Precios</title>
</head>
<body>

<?php
// Conectar con la base de datos
// $connect = mysqli_connect("localhost","u320308767_alegriaci","bM|0di0?N","u320308767_alegria") or die("No se conecto con la BD");
$connect = mysqli_connect("localhost", "root", "", "alegria") or die("No se pudo conectar con la BD");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && isset($_GET['plato']) && isset($_GET['precio'])) {
    // Obtener ID, tipo de plato y precio desde la URL
    $id = $_GET['id'];
    $tipo_plato = $_GET['plato'];
    $precio = $_GET['precio'];
    ?>

    <form action='cambiar_precio.php' class='form_panel' method='post'>
        <legend class='lg_qr'>Cambia el Precio</legend>
        <p class='p_panel'>PRECIO ANTERIOR</p>
        <p class='p_panel_2'><?php echo $precio ?></p>
        <label for='precio'>Actualiza el precio aquí</label>
        <input type='number' name='new_price' id='precio' placeholder='$' class='inp_platos'>
        <input type='hidden' name='id' value='<?php echo $id ?>'>
        <input type='hidden' name='plato' value='<?php echo $tipo_plato ?>'>
        <input type='submit' value='CARGAR'>
    </form>

    <?php
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new_price'], $_POST['id'], $_POST['plato'])) {
    // Obtener los datos del formulario
    $new_price = $_POST['new_price'];
    $id = $_POST['id'];
    $tipo_plato = $_POST['plato'];

    // Escapar valores para prevenir SQL injection
    $new_price = mysqli_real_escape_string($connect, $new_price);
    $id = mysqli_real_escape_string($connect, $id);
    $tipo_plato = mysqli_real_escape_string($connect, $tipo_plato);

    // Construir y ejecutar la consulta UPDATE
    $query = "UPDATE $tipo_plato SET precio = '$new_price' WHERE id_producto = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Precio actualizado correctamente.";
        header("Location:../../panel/menu.php?plato=$tipo_plato");
        exit(); // Finalizar el script después de la redirección
    } else {
        echo "Error al actualizar el precio: " . mysqli_error($connect);
    }
} else {
    echo "No se proporcionaron los parámetros necesarios.";
}

// Cerrar la conexión
mysqli_close($connect);
?>

    
</body>
</html>