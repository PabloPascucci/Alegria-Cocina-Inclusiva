<?php

// Se insertan los platos a la base

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Importando los datos
    $carne = isset($_POST['carne']) ? $_POST['carne'] : '';
    $pollo = isset($_POST['pollo']) ? $_POST['pollo'] : '';
    $pescado = isset($_POST['pescado']) ? $_POST['pescado'] : '';
    $pasta = isset($_POST['pasta']) ? $_POST['pasta'] : '';
    $vegano = isset($_POST['vegano']) ? $_POST['vegano'] : '';

    // Conectar con la base de datos
    // $connect = mysqli_connect("localhost","u320308767_alegriaci","bM|0di0?N","u320308767_alegria") or die("No se conecto con la BD");
    $connect = mysqli_connect("localhost","root","","alegria") or die("No se conecto con la BD");

    // Función para ejecutar la consulta y manejar errores
    function ejecutarConsulta($conexion, $consulta)
    {
        $query = mysqli_query($conexion, $consulta);
        if (!$query) {
            die("Error en la consulta: " . mysqli_error($conexion));
        }
        return $query;
    }

    if (!empty($carne)) {
        $sql_carne = "INSERT INTO carne VALUES (DEFAULT, '$carne')";
        ejecutarConsulta($connect, $sql_carne);
    }
    if (!empty($pollo)) {
        $sql_p = "INSERT INTO pollo VALUES (DEFAULT, '$pollo')";
        ejecutarConsulta($connect, $sql_p);
    }
    if (!empty($pescado)) {
        $sql_pdo = "INSERT INTO pescado VALUES (DEFAULT, '$pescado')";
        ejecutarConsulta($connect, $sql_pdo);
    }
    if (!empty($pasta)) {
        $sql_pta = "INSERT INTO pasta VALUES (DEFAULT, '$pasta')";
        ejecutarConsulta($connect, $sql_pta);
    }
    if (!empty($vegano)) {
        $sql_v = "INSERT INTO vegano VALUES (DEFAULT, '$vegano')";
        ejecutarConsulta($connect, $sql_v);
    }

    // Cerrar la conexión
    mysqli_close($connect);
    header("Location:../../panel/panel.php");
}

?>