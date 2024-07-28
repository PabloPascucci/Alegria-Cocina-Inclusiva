<?php session_start(); ?>
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
    <title>Panel de Control</title>
</head>
<body>
<div class="div_body">
    <article class="art_panel">
        <div class="div_panel">
            <form action="../código/php/insert.php" method="post" class="form_panel">
                <p class="p_panel">Agrega Un Plato de Carne</p>
                <input type="text" name="carne" class="inp_platos" placeholder="Plato de carne" autocomplete="off">
                <input type="submit" value="CARGAR PLATO">
            </form>
            
            <form action="../código/php/insert.php" method="post" class="form_panel">
                <p class="p_panel">Agrega Un Plato de Pollo</p>
                <input type="text" name="pollo" class="inp_platos" placeholder="Plato de Pollo" autocomplete="off">
                <input type="submit" value="CARGAR PLATO">
            </form>
            
            <form action="../código/php/insert.php" method="post" class="form_panel">
                <p class="p_panel">Agrega Un Plato de Pescado</p>
                <input type="text" name="pescado" class="inp_platos" placeholder="Plato de Pescado" autocomplete="off">
                <input type="submit" value="CARGAR PLATO">
            </form>
            
            <form action="../código/php/insert.php" method="post" class="form_panel">
                <p class="p_panel">Agrega Un Plato de Pasta</p>
                <input type="text" name="pasta" class="inp_platos" placeholder="Plato de Pasta" autocomplete="off">
                <input type="submit" value="CARGAR PLATO">
            </form>

            <form action="../código/php/insert.php" method="post" class="form_panel">
                <p class="p_panel">Agrega Un Plato Vegano</p>
                <input type="text" name="vegano" class="inp_platos" placeholder="Plato Vegano" autocomplete="off">
                <input type="submit" value="CARGAR PLATO">
            </form>
            
        </div>
        <div class="div_panel_a">
            <article class="art_panel_1">
                <a href="panel.php?plato=carne" class="a_panel">VER PLATOS DE CARNE</a>
                <a href="panel.php?plato=pollo" class="a_panel">VER PLATOS DE POLLO</a>
                <a href="panel.php?plato=pescado" class="a_panel">VER PLATOS DE PESCADO</a>
                <a href="panel.php?plato=pasta" class="a_panel">VER PLATOS DE PASTA</a>
                <a href="panel.php?plato=vegano" class="a_panel">VER PLATOS VEGANOS</a>
            </article>
            <article class="platos">
    <?php
        // Conectar con la base de datos
        // Conectar con la base de datos
        // $connect = mysqli_connect("localhost","u320308767_alegriaci","bM|0di0?N","u320308767_alegria") or die("No se conecto con la BD");
        $connect = mysqli_connect("localhost","root","","alegria") or die("No se conecto con la BD");

        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            if (isset($_GET['plato'])) {
                $plato = $_GET['plato'];
            
                $query = "SELECT * FROM $plato";
                $result = mysqli_query($connect, $query);
            
                if ($result) {
                    $filas = mysqli_num_rows($result);
            
                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['id_producto'];
                            $nombre = $row['nombre'];
            
                            echo "<p class='p_panel_1'>$nombre</p>";
                            echo "<a href='delete.php?id=".$id."&plato=".$plato."'>Eliminar</a>";
                        }
                    } else {
                        echo "<p>No hay platos de ".$plato." aún</p>";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
            }
            
        }

        // Cerrar la conexión
        mysqli_close($connect);
    ?>

            </article>
        </div>

    </article>
    <a href="menu.php" class="a_panel_">Modificar Menú del QR</a>
    <div class="div_off">
        <form action="panel.php" method="post">
            <input type="submit" value="CERRAR SESIÓN" name="off">
        </form>
    </div>
</div>

    <?php
        session_start();
        if (!$_SESSION){
            header("Location:inicio.php");
        }
        if($_POST){
            if($_POST['off']){
                session_destroy();
                header("Location:inicio.php");
            }
        }
    ?>
    
    
</body>
</html>