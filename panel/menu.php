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
    <title>Menú QR</title>
</head>
<body>

    <h1 class="h1_qr">Agrega Platos a tu Menú QR</h1>
    <div class="div_qr">
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Hamburguesas</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="hamburguesa" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="h_ing" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="h_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_h" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Sandwich</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="sand" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="sand_ing" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="sand_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_s" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Empanadas</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="empanada" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="emp_ingr" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="emp_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_e" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Pizzas</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="piza" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="pzz_ing" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="pzz_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_pz" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Pastas</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="pastas" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="pst_ing" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="pst_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_ps" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Regionales</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="regional" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="reg_ing" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="reg_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_r" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Carnes</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="carne" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="car_ing" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="car_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_c" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Dulces</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="dulce" class="inp_platos">
            <label for="nombre2">Ingredientes</label>
            <input type="text" name="dlc_ing" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="dlc_price" id="precio" placeholder="$" class="inp_platos">
            <label for="veg">vegano</label>
            <input type="checkbox" name="veg_d" id="veg" value="vegano" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
        
        <form action="../código/php/menu_insert.php" class="form_panel" method="post">
            <legend class="lg_qr">Vinos</legend>
            <label for="nombre1">Nombre del Plato</label>
            <input type="text" id="nombre1" name="vino" class="inp_platos">
            <label for="nombre2">Variedad/Cepa</label>
            <input type="text" name="vin_var" id="nombre2" class="inp_platos">
            <label for="precio">Precio</label>
            <input type="number" name="vin_price" id="precio" placeholder="$" class="inp_platos">
            <input type="submit" value="CARGAR">
        </form>
    </div>

        <div class="div_panel_a">
            <article class="art_panel_1">
                <a href="menu.php?plato=hamburguesas" class="a_panel">HAMBURGUESAS</a>
                <a href="menu.php?plato=sandwich" class="a_panel">SANDWICH</a>
                <a href="menu.php?plato=empanada" class="a_panel">EMPANADAS</a>
                <a href="menu.php?plato=piza" class="a_panel">PIZZAS</a>
                <a href="menu.php?plato=pastas" class="a_panel">PASTAS</a>
                <a href="menu.php?plato=regional" class="a_panel">REGIONALES</a>
                <a href="menu.php?plato=carnes" class="a_panel">CARNES</a>
                <a href="menu.php?plato=dulce" class="a_panel">DULCES</a>
                <a href="menu.php?plato=vino" class="a_panel">VINOS</a>
            </article>
            <article class="platos">
    <?php
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
                            $ingrediente = $row['ingrediente'];
                            $precio = $row['precio'];

                            echo "<p class='p_panel_1'>$nombre</p>";
                            echo "<p class='p_panel_1'>$ingrediente</p>";
                            echo "<a href='../código/php/delete_menu.php?id=".$id."&plato=".$plato."'>Eliminar</a>";
                            echo "<p class='p_panel_2'>$".$precio."</p>";
                            echo "<a href='../código/php/cambiar_precio.php?id=".$id."&plato=".$plato."&precio=".$precio."'>Modificar Precio</a>";
                            echo "<hr class='hr_menu'>";
                        }
                    } else {
                        echo "<p>No hay artículos en la sección ".$plato." aún</p>";
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
    
    <div class="div_foot">
        <a href="panel.php" class="a_panel_1">Volver Atrás</a>
    </div>
    
</body>
</html>