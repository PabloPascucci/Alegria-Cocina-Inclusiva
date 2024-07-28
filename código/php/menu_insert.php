<?php

// Se insertan los platos a la base

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Importando los datos
    // ítem N1
    $hamburguesa = isset($_POST['hamburguesa']) ? $_POST['hamburguesa'] : '';
    $h_ing = isset($_POST['h_ing']) ? $_POST['h_ing'] : '';
    $h_price = isset($_POST['h_price']) ? $_POST['h_price'] : '';
    $veg_h = isset($_POST['veg_h']) && $_POST['veg_h'] == 'vegano' ? 1 : 0;

    // ítem N2
    $sand = isset($_POST['sand']) ? $_POST['sand'] : '';
    $sand_ing = isset($_POST['sand_ing']) ? $_POST['sand_ing'] : '';
    $sand_price = isset($_POST['sand_price']) ? $_POST['sand_price'] : '';
    $veg_s = isset($_POST['veg_s']) && $_POST['veg_s'] == 'vegano' ? 1 : 0;
    
    // ítem N3
    $empanada = isset($_POST['empanada']) ? $_POST['empanada'] : '';
    $emp_ingr = isset($_POST['emp_ingr']) ? $_POST['emp_ingr'] : '';
    $emp_price = isset($_POST['emp_price']) ? $_POST['emp_price'] : '';
    $veg_e = isset($_POST['veg_e']) && $_POST['veg_e'] == 'vegano' ? 1 : 0;
    
    // ítem N4
    $piza = isset($_POST['piza']) ? $_POST['piza'] : '';
    $pzz_ing = isset($_POST['pzz_ing']) ? $_POST['pzz_ing'] : '';
    $pzz_price = isset($_POST['pzz_price']) ? $_POST['pzz_price'] : '';
    $veg_pz = isset($_POST['veg_pz']) && $_POST['veg_pz'] == 'vegano' ? 1 : 0;
    
    // ítem N5
    $pastas = isset($_POST['pastas']) ? $_POST['pastas'] : '';
    $pst_ing = isset($_POST['pst_ing']) ? $_POST['pst_ing'] : '';
    $pst_price = isset($_POST['pst_price']) ? $_POST['pst_price'] : '';
    $veg_ps = isset($_POST['veg_ps']) && $_POST['veg_ps'] == 'vegano' ? 1 : 0;
    
    // ítem N6
    $regional = isset($_POST['regional']) ? $_POST['regional'] : '';
    $reg_ing = isset($_POST['reg_ing']) ? $_POST['reg_ing'] : '';
    $reg_price = isset($_POST['reg_price']) ? $_POST['reg_price'] : '';
    $veg_r = isset($_POST['veg_r']) && $_POST['veg_r'] == 'vegano' ? 1 : 0;
    
    // ítem N7
    $carne = isset($_POST['carne']) ? $_POST['carne'] : '';
    $car_ing = isset($_POST['car_ing']) ? $_POST['car_ing'] : '';
    $car_price = isset($_POST['car_price']) ? $_POST['car_price'] : '';
    $veg_c = isset($_POST['veg_c']) && $_POST['veg_c'] == 'vegano' ? 1 : 0;
    
    // ítem N8
    $dulce = isset($_POST['dulce']) ? $_POST['dulce'] : '';
    $dlc_ing = isset($_POST['dlc_ing']) ? $_POST['dlc_ing'] : '';
    $dlc_price = isset($_POST['dlc_price']) ? $_POST['dlc_price'] : '';
    $veg_d = isset($_POST['veg_d']) && $_POST['veg_d'] == 'vegano' ? 1 : 0;
    
    // ítem N9
    $vino = isset($_POST['vino']) ? $_POST['vino'] : '';
    $vin_var = isset($_POST['vin_var']) ? $_POST['vin_var'] : '';
    $vin_price = isset($_POST['vin_price']) ? $_POST['vin_price'] : '';

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

    if (!empty($hamburguesa)) {
        $sql_hamb = "INSERT INTO hamburguesas VALUES (DEFAULT, '$hamburguesa','$h_ing','$veg_h','$h_price')";
        ejecutarConsulta($connect, $sql_hamb);
    }
    if (!empty($sand)) {
        $sql_s = "INSERT INTO sandwich VALUES (DEFAULT, '$sand','$sand_ing','$veg_s','$sand_price')";
        ejecutarConsulta($connect, $sql_s);
    }
    if (!empty($empanada)) {
        $sql_emp = "INSERT INTO empanada VALUES (DEFAULT, '$empanada','$emp_ingr','$veg_e','$emp_price')";
        ejecutarConsulta($connect, $sql_emp);
    }
    if (!empty($piza)) {
        $sql_pza = "INSERT INTO piza VALUES (DEFAULT, '$piza','$pzz_ing','$veg_pz','$pzz_price')";
        ejecutarConsulta($connect, $sql_pza);
    }
    if (!empty($pastas)) {
        $sql_pst = "INSERT INTO pastas VALUES (DEFAULT, '$pastas','$pst_ing','$veg_ps','$pst_price')";
        ejecutarConsulta($connect, $sql_pst);
    }
    if (!empty($regional)) {
        $sql_reg = "INSERT INTO regional VALUES (DEFAULT, '$regional','$reg_ing','$veg_r','$reg_price')";
        ejecutarConsulta($connect, $sql_reg);
    }
    if (!empty($carne)) {
        $sql_carne = "INSERT INTO carnes VALUES (DEFAULT, '$carne','$car_ing','$veg_c','$car_price')";
        ejecutarConsulta($connect, $sql_carne);
    }
    if (!empty($dulce)) {
        $sql_dlc = "INSERT INTO dulce VALUES (DEFAULT, '$dulce','$dlc_ing','$veg_d','$dlc_price')";
        ejecutarConsulta($connect, $sql_dlc);
    }
    if (!empty($vino)) {
        $sql_vino = "INSERT INTO vino VALUES (DEFAULT, '$vino','$vin_var','$vin_price')";
        ejecutarConsulta($connect, $sql_vino);
    }

    // Cerrar la conexión
    mysqli_close($connect);
    header("Location:../../panel/menu.php");
}

?>