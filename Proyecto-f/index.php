<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farrukito´s House</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <link rel="stylesheet" href="assets/libs/css/animate.css">
    <script src="assets/js/index.js"></script>
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
                        <li id="nav-main-contact" class="menu-item"><a id="nav-main-contact" href="registro.php"> Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>



        <main class="main-section">
            <!-- Hero Section -->
            <section class="hero-home-page">
                <div class="wrap-hero-home-page">
                    <h1>Farrukito´s House</h1>
                    <p>¡Hola! Somos Farrukitos House, tenemos una gran variedad de Hamburguesas, Pizzas, Enchiladas y Salchipapas.</p>
                    <a href="carta.php" class="cta-main">Hacer un pedidio</a>
                </div>
            </section>
    </div>


    <!-- tarjetas de comida -->
    <section class="wrap section">
        <div class="wrap-title-section wow fadeIn">
            <h2>Nuestra carta</h2>
        </div>
        <div class="column-4 columns">

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/hamburguesa-casera.jpg"> 
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>La Casera.</h2>
                        <p>Nulla do sit do Lorem reprehenderit in cupidatat commodo.</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 20.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/toxica.jpg">
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>La Tóxica.</h2>
                        <p>Hamburguesa + queso Cheddar + tocino + rodajas de piña caramelizada</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 28.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/gaucha.jpg">
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>La Gaucha.</h2>
                        <p>Hamburguesa + Chorizo a las finas hierbas + salsa chimichurri</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 29.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/infartito.jpg">
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>El infartito.</h2>
                        <p>Nulla do sit do Lorem reprehenderit in cupidatat commodo.</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 30.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/salchicharapa.jpg">
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>Salchipapa de toda la life.</h2>
                        <p>Papas nativas + hotdog ahumado.</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 20.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/salchipaparoyal.jpg">
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>La Royal.</h2>
                        <p>Papas nativas + hotdog ahumado + queso + huevo.</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 22.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/pizzapepperoni.jpg">
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>Peperoni.</h2>
                        <p>Masa tradicional + salsa napolitana + queso mozzarella + Peperoni.</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 25.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="tarjeta-rest wow fadeInDown">
                <img src="assets/img/carta/pizzacuatroquesos.jpg">
                <div class="tarjeta-rest_info">
                    <div class="tarjeta-rest_info_detail">
                        <h2>La Cuatro quesos.</h2>
                        <p>Masa tradicional + salsa napolitana + queso parmesano + queso gouda + queso azul + queso mozzarella</p>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="precio_tarjeta-rest">
                                <span>s/ 30.00</span>
                            </div>
                            <button type="button" class="btn-warning">Pedir ahora</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    </section>

    </main>

    <footer class="footer" style="background-color: #191A21; color: #fff;">

        <div class="column-4 columns wrap-footer wow fadeInUp">

            <div class="text-center text-element-footer">
                <h3>Restaurante</h3>
                <p>Nosotros somos un restaurante de comida rapida y hacemos pedidos en toda La Perla y San Miguel.</p>
            </div>
            <div class="text-center">
                <h5>Dirección</h5>
                <ul>
                    <li>Av. Callao 193</li>
                    <li>La Perla - 07016</li>
                    <li>Calle Martín de Murúa 119 Int 7 San Miguel</li>
                    <li>Mvl:(01) 6075689</li>
                    <li>Tel: (+51) 979 776 420</li>
                </ul>
            </div>
            <div class="text-center text-element-footer">
                <h5>Más Información</h5>
                <ul>
                    <li><a href="javascript:void(0)">Inicio</a></li>
                    <li><a href="javascript:void(0)">Nosotros</a></li>
                    <li><a href="javascript:void(0)">Carta</a></li>
                    <li><a href="javascript:void(0)">Blog</a></li>
                    <li><a href="javascript:void(0)">Contactar</a></li>
                </ulstyle=>
            </div>
            <div class="text-center text-element-footer">
                <h5>Redes sociales</h5>
                <div class="evenly">

                    <a target="_blank" href="https://www.facebook.com/FarrukitosHouse"><img src="assets/img/footer/facebook.png" alt="facebook.png"></a>
                    <a target="_blank" href="https://www.instagram.com/farrukitoshouse"><img src="assets/img/footer/instagram.png" alt="instagram.png"></a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51979776420&text=Quiero%20hacer%20un%20pedido"><img src="assets/img/footer/whatsapp.svg" alt="whatsapp.png"></a>
                </div>
            </div>

        </div>
        <div class="footer-creeds">
            <div class="copy-creeds wow fadeInLeft">
                <p>@2023 - Todos los derechos reservados.</p>
            </div>
            <div class="legal-creeds wow fadeInRight">
                <ul>
                    <li><a href="javascript:void(0)">Politica de Privacidad</a></li>
                    <li><a href="javascript:void(0)">Politica de Cookies</a></li>
                    <li><a href="javascript:void(0)">Aviso Legal</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="assets/libs/js/wow.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>