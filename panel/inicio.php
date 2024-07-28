<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dpdesarrollos.site">
    <meta name="robots" content="noindex, nofollow">
<!-- ==== Links ==== -->
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcout icon" href="../imagen/configuracion.ico">
    <title>Inicio de Sesión</title>
</head>
<body>
    
    <form action="inicio.php" method="post" class='form_ini'>
        <img src="../imagen/logo.png" alt="" class="img_panel">
        <input type="password" name="pass" required class='inp_ini' placeholder="Contraseña">
        <input type="submit" value="INGRESAR" class='sub'>
    </form>

    <?php

    if($_GET) {
        $wrong = $_GET['wrong'];
        if ($wrong === '1'){
            echo "<p class='wrong'>Contraseña incorrecta</p>";
        }
    }

    ?>

<?php
    session_start();
    if ($_POST) {
        
        // Recibir los datos del formulario
        
        $pass = $_POST['pass'];

        // Conectar con la base de datos
        // $connect = mysqli_connect("localhost","u320308767_alegriaci","bM|0di0?N","u320308767_alegria") or die("No se conecto con la BD");
        $connect = mysqli_connect("localhost","root","","alegria") or die("No se conecto con la BD");


        // leer y seleccionar el usuario y la contraseña alojada en la BD
        $query_con = "SELECT * FROM pass";
        $con = mysqli_query($connect, $query_con);

        if ($con) {
            $filas = mysqli_num_rows($con);

            if ($filas > 0) {
                while ($row = mysqli_fetch_assoc($con)) {
                    $password = $row['password'];
                    if ($pass === $password) {
                        $_SESSION['usuario'] = $pass;
                        header("Location:panel.php");
                    }else{
                        header("Location:inicio.php?wrong=1");
                    }
                }
            }
            mysqli_close($connect);
        }
    }

?>

</body>
</html>