<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="assets/css/contacto.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <link rel="stylesheet" href="assets/libs/css/animate.css">
    <script src="assets/js/contacto.js"></script>
</head>
<body>
    
    <div class="wrap-header-hero">
        <header class="main-header">
            <a class="logo-header wow fadeInDown" href="#">
                Farrukito´s House 
            </a>
            <div class="wrap-nav-header">
                <nav class="nav-haeder">
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
                        <li id="nav-main-contact" class="menu-item"><a href="registro.php"> Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>




        <div class="content">

            <h1 class="logo">Contacta con <span>Nosotros</span></h1>
    
            <div class="contact-wrapper animated bounceInUp">
                <div id="contact-form" class="contact-form">
                    <h3>Contactate</h3>
                    <form action="">
                        <p>
                            <label>Nombres</label>
                            <input type="text" name="fullname">
                        </p>
                        <p>
                            <label>E-mail</label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Numero de Celular</label>
                            <input type="tel" name="phone">
                        </p>
                        <p class="block">
                            <label>Mensaje</label> 
                            <textarea name="message" rows="3"></textarea>
                        </p>
                        <p class="block">
                            <button>
                                Enviar
                            </button>
                        </p>
                    </form>
                </div>
                <div class="contact-info">
                    <h4>Informacion de Restaurante</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i>Av. Callao 193</li>
                        <li><i class="fas fa-map-marker-alt"></i> La Perla - 07016</li>
                        <li><i class="fas fa-map-marker-alt"></i>Calle Martín de Murúa 119 Int 7 San Miguel</li>
                        <li><i class="fas fa-map-marker-alt"></i>Mvl:(01) 6075689</li>
                        <li><i class="fas fa-map-marker-alt"></i>Tel: (+51) 979 776 420</li>
                    </ul>
                    <p>Nosotros somos un restaurante de comida rapida y hacemos pedidos en toda La Perla y San Miguel.</p>
                </div>
            </div>
    
        </div>

    <script src="assets/libs/js/wow.js"></script>
    <script>
        new WOW().init();
    </script>

</body>
</html>