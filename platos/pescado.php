<!DOCTYPE html>
<html lang="en">
<head>
<head>
<!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="languege" content="spanish">
    <meta name="audience" content="all">
    <meta name="category" content="Cocina">
    <meta name="keywords" content="comida, sin gluten, celiacos, San martin de los andes, pasteleria, sin tacc, veganos, plant based">
    <meta name="description" content="Conoce nuestros platos de Carne Vacuna">
    <meta name="author" content="DpDesarrollos">
    <meta name="copyright" content="Alegría Cocina Inclusiva">
    <meta name="robots" content="noindex, nofollow">
    <meta itemprop="telephone" content="+5492944660903">
<!-- ==== Links ==== -->
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcout icon" href="../imagen/icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Kanit:wght@300&family=Lemon&family=Nunito+Sans&family=Petit+Formal+Script&family=Vesper+Libre:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Kanit:wght@300&family=Lemon&family=Lobster&family=Nunito+Sans&family=Petit+Formal+Script&family=Vesper+Libre:wght@700&display=swap" rel="stylesheet">
<!-- ==== Scripts ==== -->
    <script src="https://kit.fontawesome.com/6374ab8d9e.js" crossorigin="anonymous"></script>
    <title>Carne Vacuna</title>
</head>
</head>
<body>

    <div class="div_nav">
        <nav class="nav">
            <input type="checkbox" name="check" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa-solid fa-bars"></i>
                </label>
            <ul class="barr_nav">
                <img src="../imagen/logo_nav.png" title="Nombre" class="logo">
                <a href="../index.html" class="a_nav">INICIO</a>
                <a href="../platos.html" class="a_nav">PLATOS</a>
                <a href="../nosotros.html" class="a_nav">NOSOTROS</a>
                <a href="https://www.facebook.com/people/Alegr%C3%ADa-Cocina-Inclusiva/100089429298819/?mibextid=ZbWKwL" target="_blank"><img src="../imagen/facebook.png" title="Facebook" class="img"></a>
                <a href="https://www.instagram.com/alegriacocinainclusiva/?igshid=NmE0MzVhZDY%3D" target="_blank"><img src="../imagen/insta.png" title="Instagram" class="img"></a>
                <a href="https://wa.me/+5492944660903" target="_blank"><img src="../imagen/wpp.png" title="WhatsApp" class="img"></a>
            </ul>
        </nav>
    </div>

    
    <article class='div_platos_'>

    <?php
        // Conectar con la base de datos
        // Conectar con la base de datos
        $connect = mysqli_connect("localhost","u320308767_alegriaci","bM|0di0?N","u320308767_alegria"); or die("No se conecto con la BD");
        // $connect = mysqli_connect("localhost","root","","alegria") or die("No se conecto con la BD");

                $query = "SELECT * FROM pescado";
                $result = mysqli_query($connect, $query);

                if ($result) {
                    $filas = mysqli_num_rows($result);

                    if ($filas > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['id_producto'];
                            $nombre = $row['nombre'];
                            echo "<p class='p_panel_1'>$nombre</p>";
                        }
                    } else {
                        echo "<p class='p_no_platos'>No hay platos de Pescado aún</p>";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($connect);
                }
    ?>
    
    </article>

    <footer class="footer">
        <section class="sect_footer">
            <article class="art_footer">
                <p class="p_footer">Avenida San Martin 439 Local 16, San Martin de los Andes, neuquén, Argentina</p>
                <a href="https://www.facebook.com/people/Alegr%C3%ADa-Cocina-Inclusiva/100089429298819/?mibextid=ZbWKwL" target="_blank"><img src="../imagen/facebook_footer.png" title="Facebook" class="img"></a>
                <a href="https://www.instagram.com/alegriacocinainclusiva/?igshid=NmE0MzVhZDY%3D" target="_blank"><img src="../imagen/insta_footer.png" title="Instagram" class="img"></a>
                <a href="https://wa.me/+5492944660903" target="_blank"><img src="../imagen/wpp_footer.png" title="WhatsApp" class="img"></a>
            </article>
            <article class="art_footer">
                <a href="../nosotros.html#contacto" class="a_footer">Contacto</a>
                <a href="../nosotros.html#contacto" class="a_footer">Ubicación</a>
            </article>
        </section>

        <section class="sect_footer">
            <p class="p_footer_copy">Alegría - Cocina Inclusiva © 2024 | Todos los Derechos Reservados | Desarrollo: <a href="https://www.dpdesarrollos.site/" target="_blank" class="a_footer_copy">DpDesarrollos.site</a></p>
        </section>
    </footer>
    
</body>
</html>