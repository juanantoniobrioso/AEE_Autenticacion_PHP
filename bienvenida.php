<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <?php
                    session_start();
                    

                    //Tiempo
                    date_default_timezone_set("Europe/Madrid");

                    if ($_SERVER["REQUEST_METHOD"] == "POST"){

                        $nomUsuario = htmlspecialchars($_POST['nomUsuario']);
                        echo "<h1 class='mb-4'>¡Bienvenido $nomUsuario!</h1>";
                        echo "<h3>Son las " . date("H:i") . "</h3>";

                        echo '<div class="text-center mt-5">
                                <a href="logout.php" class="btn btn-danger btn-lg px-5 text-white">
                                    Cerrar sesión
                                </a>
                            </div>';
                        
                    } else {
                        echo "<div class='alert alert-danger text-center'>";
                        echo "<h1 class='display-4'>Acceso Denegado</h1>";
                        echo "<p>Debes iniciar sesión para ver esta página.</p>";
                        echo "<a href='login.html' class='btn btn-primary'>Volver al inicio de sesión</a>";
                        echo "</div>";
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>