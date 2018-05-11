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
        <title>Acerca de Nosotros</title>
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
                    <li><a href="carrito.php">Carrito</a></li>
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
            <div class="col-md-4">
                <img src="img/monumentoPatria.jpg" class="img-rounded" alt="Monumento a la Patria" width="500">
            </div>
            <div class="col-md-8">
                <p class="text-right">                     
                    <img src="img/logo.png" width="70"> es una empresa mexicana nacida en la ciudad de Mérida, Yucatán, México <br>
                    en el año 2018 por un grupo de empresarios originarios del mismo estado, con el afán<br>
                    de ofrecer productos de la más reciente tecnología a precios accesibles, a la par de un<br>
                    servicio técnico especializado y confiable.<br> <br>
                    Nuestro compromiso es claro, y se ve reflejado en nuestro éxito el cual ha crecido <br>
                    espectacularmente en tan poco tiempo.<br><br><br>
                    
                    <i>El Equipo Phonetica - Mayo, 2018</i>
                </p>
            </div>
        </div>        

        <br>
        <br>
        <br>
        <br>

        
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
                            <li class="list-inline-item"><a href="aboutUS.php"><i class="fa fa-angle-double-right"></i>Acerca de Nosotros</a></li>
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
