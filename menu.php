<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="languege" content="spanish">
    <meta name="audience" content="all">
    <meta name="category" content="Cocina">
    <meta name="keywords" content="comida, sin gluten, celiacos, San martin de los andes, pasteleria, sin tacc, veganos, plant based">
    <meta name="description" content="Alegría - Cocina Inclusiva es un espacio, donde podrás adquirir productos elaborados libres de gluten, lácteos y huevos. Además de la pasteleria plant based. Estamos en San Martin de los andes.">
    <meta name="author" content="DpDesarrollos">
    <meta name="copyright" content="Alegría Cocina Inclusiva">
    <meta name="robots" content="index,follow">
    <meta itemprop="telephone" content="+5492944660903">
<!-- ==== Links ==== -->
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcout icon" href="imagen/icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Kanit:wght@300&family=Lemon&family=Nunito+Sans&family=Petit+Formal+Script&family=Vesper+Libre:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Kanit:wght@300&family=Lemon&family=Lobster&family=Nunito+Sans&family=Petit+Formal+Script&family=Vesper+Libre:wght@700&display=swap" rel="stylesheet">
<!-- ==== Scripts ==== -->
    <script src="https://kit.fontawesome.com/6374ab8d9e.js" crossorigin="anonymous"></script>
    <title>Nuestro Menú</title>
</head>
<body>

    <div class="div_nav">
        <nav class="nav">
            <input type="checkbox" name="check" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa-solid fa-bars"></i>
                </label>
            <ul class="barr_nav">
                <img src="imagen/logo_nav.png" title="Nombre" class="logo">
                <a href="index.html" class="a_nav">INICIO</a>
                <a href="menu.php" class="a_nav">MENÚ</a>
                <!-- <a href="platos.html" class="a_nav">PLATOS</a> -->
                <a href="nosotros.html" class="a_nav">NOSOTROS</a>
                <a href="https://www.facebook.com/people/Alegr%C3%ADa-Cocina-Inclusiva/100089429298819/?mibextid=ZbWKwL" target="_blank"><img src="imagen/facebook.png" title="Facebook" class="img"></a>
                <a href="https://www.instagram.com/alegriacocinainclusiva/?igshid=NmE0MzVhZDY%3D" target="_blank"><img src="imagen/insta.png" title="Instagram" class="img"></a>
                <a href="https://wa.me/+5492944660903" target="_blank"><img src="imagen/wpp.png" title="WhatsApp" class="img"></a>
            </ul>
        </nav>
    </div>
    <?php
    // Conectar con la base de datos
    // $connect = mysqli_connect("localhost","u320308767_alegriaci","bM|0di0?N","u320308767_alegria") or die("No se conecto con la BD");
    $connect = mysqli_connect("localhost","root","","alegria") or die("No se conecto con la BD");
    ?>

    <div class="div_body_platos">
        <section class="sect_platos">
            <p class="p_platos">Conoce Nuestro Menú</p>
        </section>
        <section class="sec_menu">
            <article class="art_menu">
                <p class="h2_pres">Hamburguesas</p>
                <?php
                $query_h = "SELECT * FROM hamburguesas";
                $result_h = mysqli_query($connect, $query_h);

                if ($result_h) {
                    $filas = mysqli_num_rows($result_h);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result_h)) {
                            $vegano = $row['vegano'];
                            if ($vegano === "1"){
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<img src='imagen/veggie_vec.png' class='img_veg'>";
                                echo "<hr class='hr_menu'>";                   
                            }else{
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<hr class='hr_menu'>";
                            }
                        }
                    } else {
                        echo "";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
                ?>
            </article>
            <article class="art_menu">
                <p class="h2_pres">Sandwich</p>
                <?php
                $query_s = "SELECT * FROM sandwich";
                $result_s = mysqli_query($connect, $query_s);

                if ($result_s) {
                    $filas = mysqli_num_rows($result_s);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result_s)) {
                            $vegano = $row['vegano'];
                            if ($vegano === "1"){
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<img src='imagen/veggie_vec.png' class='img_veg'>";
                                echo "<hr class='hr_menu'>";                   
                            }else{
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<hr class='hr_menu'>";
                            }
                        }
                    } else {
                        echo "";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
                ?>
            </article>
        </section>
        <section class="sec_menu">
            <article class="art_menu">
                <p class="h2_pres">Empanadas</p>
                <?php
                $query_e = "SELECT * FROM empanada";
                $result_e = mysqli_query($connect, $query_e);

                if ($result_e) {
                    $filas = mysqli_num_rows($result_e);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result_e)) {
                            $vegano = $row['vegano'];
                            if ($vegano === "1"){
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<img src='imagen/veggie_vec.png' class='img_veg'>";
                                echo "<hr class='hr_menu'>";                   
                            }else{
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<hr class='hr_menu'>";
                            }
                        }
                    } else {
                        echo "";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
                ?>
            </article>
            <article class="art_menu">
                <p class="h2_pres">Pizzas <span class="sp_menu">X 8 Porciones</span></p>
                <?php
                $query_pz = "SELECT * FROM piza";
                $result_pz = mysqli_query($connect, $query_pz);

                if ($result_pz) {
                    $filas = mysqli_num_rows($result_pz);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result_pz)) {
                            $vegano = $row['vegano'];
                            if ($vegano === "1"){
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<img src='imagen/veggie_vec.png' class='img_veg'>";
                                echo "<hr class='hr_menu'>";                   
                            }else{
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<hr class='hr_menu'>";
                            }
                        }
                    } else {
                        echo "";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
                ?>
            </article>
        </section>
        <section class="sec_menu">
            <article class="art_menu">
                <p class="h2_pres">Pastas <span class="sp_menu">Consultar Disponibilidad</span></p>
                <?php
                $query_ps = "SELECT * FROM pastas";
                $result_ps = mysqli_query($connect, $query_ps);

                if ($result_ps) {
                    $filas = mysqli_num_rows($result_ps);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result_ps)) {
                            $vegano = $row['vegano'];
                            if ($vegano === "1"){
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<img src='imagen/veggie_vec.png' class='img_veg'>";
                                echo "<hr class='hr_menu'>";                   
                            }else{
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<hr class='hr_menu'>";
                            }
                        }
                    } else {
                        echo "";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
                ?>
            </article>
            <!-- <article class="art_menu">
                <p class="h2_pres">Regionales</p>
                <?php
                // $query_r = "SELECT * FROM regional";
                // $result_r = mysqli_query($connect, $query_r);

                // if ($result_r) {
                //     $filas = mysqli_num_rows($result_r);

                //     if ($filas > 0) {
                //         while ($row = mysqli_fetch_array($result_r)) {
                //             $vegano = $row['vegano'];
                //             if ($vegano === "1"){
                //                 $nombre = $row['nombre'];
                //                 $ing = $row['ingrediente'];
                //                 $price = $row['precio'];
                //                 echo "<p class='name'>".$nombre."</p>";
                //                 echo "<p class='ing'>".$ing."</p>";
                //                 echo "<p class='price'>".$price."</p>";
                //                 echo "<img src='imagen/veggie_vec.png' class='img_veg'>";
                //                 echo "<hr class='hr_menu'>";                   
                //             }else{
                //                 $nombre = $row['nombre'];
                //                 $ing = $row['ingrediente'];
                //                 $price = $row['precio'];
                //                 echo "<p class='name'>".$nombre."</p>";
                //                 echo "<p class='ing'>".$ing."</p>";
                //                 echo "<p class='price'>".$price."</p>";
                //                 echo "<hr class='hr_menu'>";
                //             }
                //         }
                //     } else {
                //         echo "";
                //     }
                // } else {
                //     echo "Error en la consulta: " . mysqli_error($connect);
                // }
                ?>
            </article> -->
        </section>
        <section class="sec_menu">
            <!-- <article class="art_menu">
                <p class="h2_pres">Carnes</p>
                <?php
                // $query_c = "SELECT * FROM carnes";
                // $result_c = mysqli_query($connect, $query_c);

                // if ($result_c) {
                //     $filas = mysqli_num_rows($result_c);

                //     if ($filas > 0) {
                //         while ($row = mysqli_fetch_array($result_c)) {
                //             $vegano = $row['vegano'];
                //             if ($vegano === "1"){
                //                 $nombre = $row['nombre'];
                //                 $ing = $row['ingrediente'];
                //                 $price = $row['precio'];
                //                 echo "<p class='name'>".$nombre."</p>";
                //                 echo "<p class='ing'>".$ing."</p>";
                //                 echo "<p class='price'>".$price."</p>";
                //                 echo "<img src='imagen/veggie_vec.png' class='img_veg'>";
                //                 echo "<hr class='hr_menu'>";                   
                //             }else{
                //                 $nombre = $row['nombre'];
                //                 $ing = $row['ingrediente'];
                //                 $price = $row['precio'];
                //                 echo "<p class='name'>".$nombre."</p>";
                //                 echo "<p class='ing'>".$ing."</p>";
                //                 echo "<p class='price'>".$price."</p>";
                //                 echo "<hr class='hr_menu'>";
                //             }
                //         }
                //     } else {
                //         echo "";
                //     }
                // } else {
                //     echo "Error en la consulta: " . mysqli_error($connect);
                // }
                ?>
            </article> -->
            <article class="art_menu">
                <p class="h2_pres">Dulces <span class="sp_menu">Consultar Disponibilidad</span></p>
                <?php
                $query_d = "SELECT * FROM dulce";
                $result_d = mysqli_query($connect, $query_d);

                if ($result_d) {
                    $filas = mysqli_num_rows($result_d);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result_d)) {
                            $vegano = $row['vegano'];
                            if ($vegano === "1"){
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<img src='imagen/veggie_vec.png' class='img_veg' title='Plato Vegano'>";
                                echo "<hr class='hr_menu'>";                   
                            }else{
                                $nombre = $row['nombre'];
                                $ing = $row['ingrediente'];
                                $price = $row['precio'];
                                echo "<p class='name'>".$nombre."</p>";
                                echo "<p class='ing'>".$ing."</p>";
                                echo "<p class='price'>".$price."</p>";
                                echo "<hr class='hr_menu'>";
                            }
                        }
                    } else {
                        echo "";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
                ?>
            </article>
        </section>
        <section class="sec_menu">
            <article class="art_menu">
                <p class="h2_pres">Vinos</p>
                <?php
                $query_v = "SELECT * FROM vino";
                $result_v = mysqli_query($connect, $query_v);

                if ($result_v) {
                    $filas = mysqli_num_rows($result_v);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result_v)) {
                            $nombre = $row['nombre'];
                            $variedad = $row['ingrediente'];
                            $price = $row['precio'];
                            echo "<p class='name'>".$nombre."</p>";
                            echo "<p class='ing'>".$variedad."</p>";
                            echo "<p class='price'>".$price."</p>";
                        }
                    } else {
                        echo "<p class='p_no_platos'>No hay Disponibilidad</p>";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
                ?>
            </article>
        </section>
    </div>

    <footer class="footer">
        <section class="sect_footer">
            <article class="art_footer">
                <p class="p_footer">Avenida San Martin 439 Local 16, San Martin de los Andes, neuquén, Argentina</p>
                <a href="https://www.facebook.com/people/Alegr%C3%ADa-Cocina-Inclusiva/100089429298819/?mibextid=ZbWKwL" target="_blank"><img src="imagen/facebook_footer.png" title="Facebook" class="img"></a>
                <a href="https://www.instagram.com/alegriacocinainclusiva/?igshid=NmE0MzVhZDY%3D" target="_blank"><img src="imagen/insta_footer.png" title="Instagram" class="img"></a>
                <a href="https://wa.me/+5492944660903" target="_blank"><img src="imagen/wpp_footer.png" title="WhatsApp" class="img"></a>
            </article>
            <article class="art_footer">
                <a href="nosotros.html#contacto" class="a_footer">Contacto</a>
                <a href="nosotros.html#contacto" class="a_footer">Ubicación</a>
            </article>
        </section>

        <section class="sect_footer">
            <p class="p_footer_copy">Alegría - Cocina Inclusiva © 2024 | Todos los Derechos Reservados | Desarrollo: <a href="https://www.dpdesarrollos.site/" target="_blank" class="a_footer_copy">DpDesarrollos.site</a></p>
        </section>
    </footer>
    
</body>
</html>