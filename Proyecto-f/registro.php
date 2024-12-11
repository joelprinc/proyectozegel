<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $email, $password]);
        echo "Registro exitoso.";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // Error de clave única (correo ya registrado)
            echo "El correo electrónico ya está registrado.";
        } else {
            echo "Error al registrar: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
    <link rel="stylesheet" href="assets/css/registro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="assets/js/script-r.js"></script>
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="wrap-header-hero">
        <header class="main-header">
            <a class="logo-header wow fadeInDown" href="#">
                Farrukito's House
            </a>
            <div class="wrap-nav-header">
                <nav class="nav-header">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="toggle-menu">
                            <img src="assets/img/nav/toggle.svg" />
                        </i>
                    </label>
                    <ul class="main-menu wow fadeInDown">
                        <li class="menu-item"><a href="index.php">Inicio</a></li>
                        <li class="menu-item"><a href="javascript:void(0)">Nosotros</a></li>
                        <li class="menu-item"><a href="carta.php">Carta</a></li>
                        <li class="menu-item"><a href="https://www.facebook.com/FarrukitosHouse">Blog</a></li>
                        <li class="menu-item"><a href="contacto.php">Contacto</a></li>
                        <li id="nav-main-contact" class="menu-item"><a href="registro.php">Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    
    <div class="container-form register">
        <i class="toggle-menu">
            <img src="" />
        </i>
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para hacer pedidos más rápido y fácil, Inicia Sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                    <p>Usa tu email para registrarte</p>
                </div>
                <form class="form" action="register.php" method="POST">
                    <label>
                        <i class='bx bx-user'></i>
                        <input type="text" name="nombre" placeholder="Nombre Completo" required>
                    </label>
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </label>
                    <label>
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" name="password" placeholder="Contraseña" required>
                    </label>
                    <input type="submit" value="Registrarse">
                </form>

            </div>
        </div>
    </div>

    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡Bienvenido nuevamente!</h2>
                <p>Si aún no tienes una cuenta, por favor regístrate aquí</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                    <p>o Inicia Sesión con una cuenta</p>
                </div>
                <form class="form">
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email" placeholder="Email">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/script-r.js"></script>
</body>
</html>