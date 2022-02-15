<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Entregas de Productos</title>
    
    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">
    <link  rel="stylesheet" href="../Resources/css/estilos.css">
</head>
<body>
    <header>
        <nav id="header">
            <img src="../Resources/Imagenes/logo.svg" id="imagen_logo">
            <ul class="nav" style="padding: 10px; display:flex; justify-content:right"> 
                <li><a  href="inicio.php">Principal</a></li>
                <li><a href="View/v_login.php">Ingreso</a></li>
            </ul> 
            <h1>Servicios de Entrega</h1>
        </nav>
       </header>
    <br/><br/><br/><br/><br/>
    <div class="contenedor">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../Resources/Imagenes/image1.jpeg" alt="delivery1" width="1100" height="500">
                </div>
                <div class="carousel-item">
                <img src="../Resources/Imagenes/image2.jpeg" alt="delivery2" width="1100" height="500">
                </div>
                <div class="carousel-item">
                <img src="../Resources/Imagenes/image3.jpeg" alt="delivery3" width="1100" height="500">
                </div>
                <div class="carousel-item">
                <img src="../Resources/Imagenes/image4.jpeg" alt="delivery4" width="1100" height="500">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
         </div>
         
    </div>
    
    <section id= section>
        <h2>Nuestra Misión</h2>
            <p>
                “Brindar calidad e innovación en nuestros productos, durante las 24 horas del día, buscando siempre la completa satisfacción del cliente”.
                Nuestra misión no solo es entregar bellos regalos a domicilio, sino que entendemos nuestro trabajo como un medio de comunicación para trasmitir emociones; 
                cada vez que usted compra con nosotros no solo obtiene productos de primera calidad sino que un servicio integral donde cada detalle cuenta para 
                entregar los artefactos que usted desee , en cualquier caso nuestra empresa pondrá todos nuestros esfuerzos en satisfacer ese deseo, cuidamos de cada detalle, para que nuestros clientes 
                logren transmitir este mensaje con un regalo único y bello que signifique un recuerdo inolvidable.<br></p>

        <h2>Nuestra Visión</h2>
                 <p>Ser una empresa líder dedicada a la comunicación de mensajes a través de diversos presentes 
                    con una calidad de servicio e innovación, ser consolidada y líder en el servicio de delivery
                    en la entrega de pedidos que necesites en tu hogar, trabajo o en tu educación</p>
    </section>
    <footer>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="contacto">
                            Nosotros
                        </p>
                        <p class="titulo-contacto">
                            <div class="bloque2">
                                <p>
                                    Ubícanos</br>
                            Contáctanos</br>
                            Seguridad</br>
                             
                            Trabaja con nosotros
                                </p>
                            </div>
                            
                        </p>
                        <p>
                            <i class="fas fa-map-marker-alt" id="localizacion"></i>
                            <span class="colonia">
                             
                            </span>
                        </p>
                        <div class="boton-siguenos">
                            <p class="siguenos">
                             
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="contacto" style="color: white;">
                           <span>Acerca </span> 

                        </p>
                        <p class="titulo-contacto">
                             <div class="bloque2">
                                 <p>
                                    Transparencia</br>
                                    Defensor del cliente</br>
                                    Productos confiables</br>
                                    Canales de atención</br>
                                    Desarrollo sostenible</br>
                                 </p>
                             </div>
                        </p>
                        <p>
                            <i class="fas fa-map-marker-alt" id="localizacion"></i>
                            <span class="colonia">
                             
                            </span>
                        </p>
                        <div class="boton-siguenos">
                            <p class="siguenos">
                                
                            </p>
                        </div> 
                    </div><!--Finn-->
                    <div class="col-md-4">
                        <p class="contacto" style="color: white;">
                            Redes Sociales
                        </p>
                        <p class="titulo-contacto">
                            <div class="bloque3">
                                
                                <a href="https://www.facebook.com/" target="_blank">Facebook</a></br>
                                <a href="https://www.youtube.com/" target="_blank">Youtube</a></br>
                                <a href="https://twitter.com/?lang=en" target="_blank">Twitter</a></br>
                                <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                            </div>
                            
                        </p>
                        <p>
                            <i class="fas fa-map-marker-alt" id="localizacion"></i>
                            
                        </p>
                        <div class="boton-siguenos">
                            <p class="siguenos">
                               
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="fondo-footer"> </div>
        <div id="pie-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="titulo-footer">
                            Información legal 2021 | QueDelivery!  Todos los derechos reservados     <span class="span-subtitulo">UG</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>     
</body>
<script src="js/validación.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
</html>