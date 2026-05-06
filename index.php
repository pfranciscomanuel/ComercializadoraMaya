<?php
    //INICIALIZAR LA SESION
    session_start();
    
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: bienvenida.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrializadora</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo_body.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="css/contac.css">
</head>

<body>

    <header id="header">
        <div class="container__header">
            <div class="logo">
                <img src="images/LOGO_TECNM_BLANCO.svg" alt="">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="#container__all" class="select">INICIO</a></li>
                        <li><a href="#body__Page">CONOCENOS</a></li>
                        <li><a href="pedido.php">PEDIDOS</a></li>
                        <li><a href="#body__Page">PROCESO</a></li>
                        <li><a href="#ContainerMap"><i class="fa-regular fa-map-location-dot"></i>UBICACION</a></li>
                        <li><a href="#pie">CONTACTO</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>

    <div class="container_all" id="container__all">
        <div class="cover">

            <!--INICIO WAVE-->

            <div class="bg_color"></div>
            <div class="wave w1"></div>
            <div class="wave w2"></div>

            <!--FINAL WAVE-->

            <div class="container__cover">
                <div class="container__info">
                    <h1>Industrializadora</h1>
                    <h2>Maya S.A. de C.V.</h2>
                    <p>Trabajar con responsabilidad, calidad y esmero en nuestro producto, ofreciendo un excelente trato
                        y atención en nuestro servicio, logrando así una imagen que nos diferencie de la competencia
                        para mantenernos en la mente de nuestros clientes!
                    </p>
                    <a href="#">
                        <input type="button" value="MAPA COBERTURA"></a>
                </div>
                <div class="container__vector">
                    <img src="images/water_1.svg" alt="">
                </div>
            </div>
        </div>


        <div class="body__Page" id="body__Page">

            <div class="mision">
                <h1>MISI&Oacute;N</h1>
                <p>Satisfacer la necesidad básica de nuestros clientes de consumir agua purificada y hielo,
                    ofreciéndoles
                    un
                    producto de calidad y un excelente servicio de distribución, acorde a su demanda y expectativa.</p>
            </div>
            <br>
            
            <div class="body_map">
                <div class="container_map" id="ContainerMap">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.8142991643863!2d-92.13525573342854!3d16.22998383644103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d3f4563374b27%3A0xfb7010c28dee6ce5!2sIndustrializadora%20Maya%20S.A.%20de%20C.V.!5e0!3m2!1ses-419!2smx!4v1662518219939!5m2!1ses-419!2smx"
                            width="100%" height="auto" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="form">
                        <h1>Contactanos</h1>
                        <form>
                            <input type="email" placeholder="Email" class="form-in" required />
                            <input type="text" placeholder="Nombre completo" class="form-in" required />
                            <textarea placeholder="Mensaje" class="form-in" required></textarea>
                            <button class="form-in">
                                ENVIAR <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                        <small> Productos para los sedientos! <br> Maya S.A. de C.V.</small>
                    </div>
                </div>
            </div>

        </div>
        <Footer id="pie">
            <div class="container__footer">

                <div class="box__footer">
                    <div class="logo">
                        <img src="images/LOGO_TECNM_BLANCO.svg" alt="">
                    </div>
                    <div class="terms" style="text-align: justify; font-weight: 100;">
                        Mantener el liderazgo en la región, con factor humano altamente capacitado y con tecnología de
                        vanguardia, garantizando con ello, la permanencia y crecimiento de nuestra empresa en el
                        mercado.
                    </div>
                    <div class="terms" style="text-align: justify; font-weight: 500; font-size: 25px;">
                        Llamanos:
                        (963) 6-32-39-41
                    </div>
                </div>

                <div class="box__footer">
                    <h2>Conocenos</h2>
                    <a href="#">Historia</a>
                    <a href="#">Mision</a>
                    <a href="#">Filosofia</a>
                    <a href="#">Valores</a>
                    <a href="#">Direccion</a>
                </div>
                <div class="box__footer">
                    <h2>Procesos</h2>
                    <a href="#">Imagenes</a>
                    <a href="#">Videos</a>
                    <a href="#">Filosofia</a>
                    <a href="#">Valores</a>
                    <a href="#">Direccion</a>
                </div>


                <div class="box__footer">
                    <h2>Contacto</h2>
                    <a href=""><i class="fab fa-facebook-square"></i>
                        Facebook</a>
                    <a href=""><i class="fab fa-instagram-square"></i>
                        Instagram</a>
                    <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a href="#"><i class="fab fa-google"></i> Gmail</a>
                    <a href="#"><i class="fab fa-telegram"></i> Telegram</a>
                    <a href="#"><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
                </div>
            </div>

            <div class="box__copyright">
                <hr>
                <p>Todos los derechos reservados © 2022 |<b> Industrializadora Maya S.A. de C.V.</b></p>
            </div>
        </Footer>

    </div>

    <script src="js/script.js"></script>
</body>

</html>
