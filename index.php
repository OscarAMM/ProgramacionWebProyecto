<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/navbarStyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">        
        <meta name="description" content="Página web de la cadena más grande de venta de smartphones en el sureste mexicano"/>
        <title>Phonetica - Home Page</title>
    </head>
    <body>
        <nav class="navbar navbarLogo navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" width="200"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Carrito</a></li>
                </ul>
               
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION['usuario'])){
                            $user = $_SESSION['usuario'];
                            echo "<strong>Usuario: ". $user . "</strong>"; ?>
                            <form action="logout.php" method="post">
                                <input type="submit" value="Logout" name="logout" class= "btn btn-danger">
                            </form>
                    <?php    } ?>
                    <?php if(!isset($_SESSION['usuario'])){ ?>
                        <a href="registro.html"><span class="glyphicon glyphicon-user"></span> Registrarse</a>
                        <a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Entrar</a>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        

        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="my-slider" class="carousel slide" data-ride="carousel">
                        <!-- navegacion por puntos -->
                        <!-- wrapper para las slides -->
                        <!-- next & prev buttons-->
                        <ol class="carousel-indicators">
                            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#my-slider" data-slide-to="1"></li>
                            <li data-target="#my-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/oferta001.png" alt="oferta001"/>
                                <!--<div class="carousel-caption">
                                    <h3>Titulo del Slide 1</h3>
                                </div>-->
                            </div>

                            <div class="item">
                                <img src="img/oferta002.png" alt="oferta002"/>
                                <!--<div class="carousel-caption">
                                    <h3>Titulo del Slide 1</h3>
                                </div>-->
                            </div>

                            <div class="item">
                                <img src="img/oferta003.png" alt="oferta003"/>
                                <!--<div class="carousel-caption">
                                    <h3>Titulo del Slide 1</h3>
                                </div>-->
                            </div>

                            <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <h4 class="text-center"><span class="label label-info">Samsung</span></h4>
                            <img src="img/s8.jpeg" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3 class="text-center">Galaxy S8+</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3 class="text-center">
                                            <label>$15,999.00</label></h3>
                                    </div>
                                </div>
                                <p class="text-center">1TB, 16GB Ram, 4K, 6.1 inches, Android 8.1</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary btn-product" data-toggle="modal" data-target="#samsungView"><span class="glyphicon glyphicon-check"></span> Información Rápida</a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-product pull-right"><span class="glyphicon glyphicon-shopping-cart"></span> Añadir al carrito</a></div>
                                </div>

                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <h4 class="text-center"><span class="label label-info">iPhone</span></h4>
                            <img src="img/iphoneX.jpeg" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3 class="text-center">iPhone X</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3 class="text-center">
                                            <label>$23,499.99</label></h3>
                                    </div>
                                </div>
                                <p class="text-center">64GB, 1080HD, 6.2 inches, iOS 11</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary btn-product" data-toggle="modal" data-target="#iphoneView"><span class="glyphicon glyphicon-check"></span> Información Rápida</a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-product pull-right"><span class="glyphicon glyphicon-shopping-cart"></span> Añadir al carrito</a></div>
                                </div>

                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <h4 class="text-center"><span class="label label-info">Nokia</span></h4>
                            <img src="img/lumia1020.jpeg" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3 class="text-center">Lumia 1020</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3 class="text-center">
                                            <label>$5, 499.99</label></h3>
                                    </div>
                                </div>
                                <p class="text-center">32GB, 2GB Ram, 720HD, 4.5 inches, WP 8.1</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary btn-product" data-toggle="modal" data-target="#lumiaView"><span class="glyphicon glyphicon-check"></span> Información Rápida</a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-product pull-right"><span class="glyphicon glyphicon-shopping-cart"></span> Añadir al carrito</a></div>
                                </div>

                                <p> </p>
                            </div>
                        </div>
                    </div>

                </div> 

            </div>
            <br>
            <div class="row">
                <div class="col-md12">
                    <a href="NoRegistro.html" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-phone"></span> Ver más Dispositivos</a>
                </div>
            </div>
            <section class="wrapper">
                <section class="main">
                    <article>
                        <h2>Los Precios Más Competentes del Mercado</h2>
                        <p>
                            En Phonetica, siempre estamos al tanto de los precios de la competencia (somos chismosos), pero en base a esto, podemos mejorar los precios ofreciendo equipos de calidad con los últimos componentes y a un excelente precio, razón por la cual las otras empresas nos odian.
                        </p>
                    </article>  

                    <article>
                        <h2>Soporte Técnico Espacializado</h2>
                        <p>
                            Contamos con un excelente equipo de técnicos especializados en reparaciones y soluciones basadas en lo más último en tecnología a nivel Nacional. Nuestro lema es: <span class="text-info"> "No existe teléfono celular que no podamos reparar"</span>. Incluso si no adquiriste tu equipo con nosotros (incluyendo equipos antiguos [legacy]), nosotros podemos encontrar siempre una solución a tu desperfecto.
                        </p>
                    </article>  
                </section>
            </section>

            <div class="row">
                <div class="col-md-12">
                    <a href="javascript:window.scrollTo(0,0);" class="btn btn-default pull-right"><span class="glyphicon glyphicon-chevron-up"></span> Ir Arriba</a>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!--Modals-->

        <div class="modal fade samsungView" id="samsungView">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                        <h3 class="modal-title">Samsung Galaxy S8+</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 product_img">
                                <img src="img/s8.jpeg" class="img-responsive">
                            </div>
                            <div class="col-md-6 product_content">
                                <h4>Versión:
                                    <span>SM-G955F</span>
                                </h4>

                                <p> <strong>Memoria Interna:</strong> 64 GB <br>
                                    <strong>Procesador:</strong> S.LSI Octa Core (2.3 GHz, 1.7 GHz) <br>
                                    <strong>Cámara Frontal:</strong> 8 mpx <br>
                                    <strong>Cámara Trasera:</strong> 12 mpx <br>
                                    <strong>Sistema Operativo:</strong> Android 7.0 Nougat <br>
                                </p>
                                <h3 class="cost">
                                    <span class="glyphicon glyphicon-usd"></span> 15, 999.00
                                    <small class="costoAnterior">
                                        <span class="glyphicon glyphicon-usd"></span> 19, 999.99</small>
                                </h3>
                                <br>
                                <br>
                                <br>
                                <div class="btn-ground">
                                    <a href="NoRegistro.html" class="btn btn-primary center-block"><span class="glyphicon glyphicon-new-window"></span> Información Completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade iphoneView" id="iphoneView">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                        <h3 class="modal-title">Apple iPhone X</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 product_img">
                                <img src="img/iphoneX.jpeg" class="img-responsive">
                            </div>
                            <div class="col-md-6 product_content">
                                <h4>Versión:
                                    <span>MQA62LL/A</span>
                                </h4>

                                <p> <strong>Memoria Interna:</strong> 256 GB <br>
                                    <strong>Procesador:</strong> Chip A11 Bionic<br>
                                    <strong>Cámara Frontal:</strong> 7 mpx <br>
                                    <strong>Cámara Trasera:</strong> 12 mpx <br>
                                    <strong>Sistema Operativo:</strong> iOS 11 <br>
                                </p>
                                <h3 class="cost">
                                    <span class="glyphicon glyphicon-usd"></span> 23, 499.00
                                    <small class="costoAnterior">
                                        <span class="glyphicon glyphicon-usd"></span> 23, 500.00</small>
                                </h3>
                                <br>
                                <br>
                                <br>
                                <div class="btn-ground">
                                    <a href="NoRegistro.html" class="btn btn-primary center-block"><span class="glyphicon glyphicon-new-window"></span> Información Completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade lumiaView" id="lumiaView">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                        <h3 class="modal-title">Nokia Lumia 1020</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 product_img">
                                <img src="img/lumia1020.jpeg" class="img-responsive">
                            </div>
                            <div class="col-md-6 product_content">
                                <h4>Versión:
                                    <span>RM-877</span>
                                </h4>

                                <p> <strong>Memoria Interna:</strong> 32 GB <br>
                                    <strong>Procesador:</strong> Qualcomm MSM8960 Snapdragon S4 Plus <br>
                                    <strong>Cámara Frontal:</strong> 1.2 mpx <br>
                                    <strong>Cámara Trasera:</strong> 41 mpx <br>
                                    <strong>Sistema Operativo:</strong> Windows Phone 8.1 <br>
                                </p>
                                <h3 class="cost">
                                    <span class="glyphicon glyphicon-usd"></span> 5, 499.99
                                    <small class="costoAnterior">
                                        <span class="glyphicon glyphicon-usd"></span> 10, 000.00</small>
                                </h3>
                                <br>
                                <br>
                                <br>
                                <div class="btn-ground">
                                    <a href="NoRegistro.html" class="btn btn-primary center-block"><span class="glyphicon glyphicon-new-window"></span> Información Completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--./Modals-->
        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <p><img src="img/logo.png" alt="" width="300"></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <ul class="list-unstyled list-inline quick-links text-center">
                            <li class="list-inline-item"><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-angle-double-right"></i>Acerca de Nosotros</a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/ChristianTuyub"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" target="_blank" href="#" ><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>	
                <div class="row">
                    <div class="col-md-3 center-block">
                        <br>
                        <strong>Copyright © 2018</strong>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/avatarMale.png" alt="Avatar" style="width:100%">
                            <div class="card-container">
                                <b>Christian Tuyub</b>
                                <p>Diseñador, Programador Front-End</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/avatarMale.png" alt="Avatar" style="width:100%">
                            <div class="card-container">
                                <b>Óscar Monsreal</b>
                                <p>Diseñador, Programador Back-End</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/avatarFemale.png" alt="Avatar" style="width:100%">
                            <div class="card-container">
                                <b>Maydali Villanueva</b>
                                <p>Analista de Requisitos, Programador</p> 
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </section>
        <!-- ./Footer -->
    </body>
</html>
