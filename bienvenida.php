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
                    date_default_timezone_set("Europe/Madrid");
                    //Lista de usuarios y contraseñas válidos
                    $usuarios = [
                        ["Juan", "hola00"],
                        ["Carlos", "Basulto123"],
                        ["Louvre", "Louvre"],
                        ["Raul", "Garcia22"]
                    ];
                    $autenticado = false;

                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                        $nomUsuario = htmlspecialchars($_POST['nomUsuario']);
                        $password = htmlspecialchars($_POST['password']);

                        foreach($usuarios as $usuario){
                            if($usuario[0] == $nomUsuario && $usuario[1] == $password){
                                $autenticado = true;
                            }
                        }
                        if($autenticado == true){
                            echo "<h1 class='mb-4'>¡Bienvenido $nomUsuario!</h1>";
                            echo "<h3>Son las " . date("H:i") . "</h3>";
                            echo "<p>Muchas gracias por iniciar sesión en nuestra página $nomUsuario :)</p>";

                            echo '<div class="text-center mt-5">
                                <a href="logout.php" class="btn btn-danger btn-lg px-5 text-white">
                                    Cerrar sesión
                                </a>
                                </div>';
                        }else{
                            //Cuando metes un nombre o contraseña que no coincidan con el array de arriba, saltará
                            //un aviso y habrá un botón para volver a iniciar sesión
                            echo "<div class='alert alert-warning' text-center>";
                            echo "<h1 class='display-4'>Usuario o contraseña incorrectos</h1>";
                            echo "<p class='text-center'>Vuelve al inicio de sesión e inténtalo de nuevo</p>";
                            echo "<a href='logout.php' class='btn btn-secondary align-center'>Volver al inicio de sesión</a>";
                            echo '</div>';
                        }
                        
                        
                    } else {
                        //Cuando entras a bienvenida.php directamente sin iniciar sesión, saltará
                        //este aviso y habrá un botón para ir al inicio de sesión
                        echo "<div class='alert alert-danger text-center'>";
                        echo "<h1 class='display-4'>Acceso Denegado</h1>";
                        echo "<p>Debes iniciar sesión para ver esta página.</p>";
                        echo "<a href='login.php' class='btn btn-primary'>Volver al inicio de sesión</a>";
                        echo "</div>";
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>