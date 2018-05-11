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
        <title>Servicios - A Phonetica Page</title>
    </head>
    <body>
        <nav class="navbar navbarLogo navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" width="200"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="serviciosPhonetica.php">Servicios</a></li>
                    <li><a href="carrito.php">Carrito</a></li>
                </ul>
               
                <ul class="nav navbar-nav navbar-right">
                    <li><?php
                            if(isset($_SESSION['usuario'])){
                                $user = $_SESSION['usuario'];
                                echo "<strong>Usuario: ". $user . "</strong>";
                        ?>
                    </li>
                            <li>
                                <form action="logout.php" method="post">
                                    <input type="submit" value="Logout" name="logout" class= "btn btn-danger">
                                </form>
                            </li>
                    <?php    } ?>
                    <?php if(!isset($_SESSION['usuario'])){ ?>
                        <li><a href="registro.html"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                        <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Servicios Que Ofrecemos.</h1>
                </div>
            </div>
            <br>
            <br>
            <div class="row">    
                <div class="col-md-4">
                    <img src="img/reparaciones.jpg" class="img-rounded" alt="reparaciones" width="380">
                </div>
                <div class="col-md-8">
                    <div class="jumbotron">
                        <h2>Reparación de Toda clase de teléfono móvil</h2>
                        <p>
                            Con nuestro lema: <span class="text-info"> "No existe teléfono celular que no podamos reparar"</span>, 
                            nosotros nos comprometemos a encontrar la solución a cualquier tipo de falla de tu dispositivo, incluso
                            si es un teléfono celular de más 10 años.
                            
                            Contamos con personal altamente calificado y con certificaciones por diversas compañias a lo largo del mundo.<br><br>
                            <i>No te arrepentirás</i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">    
                <div class="col-md-4">
                    <img src="img/unlockPhone.png" class="img-rounded" alt="reparaciones" width="380">
                </div>
                <div class="col-md-8">
                    <div class="jumbotron">
                        <h2>Desbloqueo de teléfono móvil</h2>
                        <p>
                            Ofrecemos el servicio de desbloqueo sin costo. ¡Así es, como lo leíste!
                            Sin preguntas ni cobros escondidos, acude a nuestro establecimiento y con gusto
                            desbloquearemos tu teléfono móvil<b>*</b>, tan rápido como un chasquido de dedos.
                            <br><br>
                            <i><b>*</b>Aplican Restricciones</i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">    
                <div class="col-md-4">
                    <img src="img/renewPhone.png" class="img-rounded" alt="reparaciones" width="380">
                </div>
                <div class="col-md-8">
                    <div class="jumbotron">
                        <h2>Renovación de tu Equipo</h2>
                        <p>
                            Por último y no menos importante, te ofrecemos la renovación de tu viejo 
                            teléfono. Sólo tráelo a nuestro centro de atención, te lo evaluamos en 
                            menos de 10 minutos, y te daremos su valor <span class="glyphicon glyphicon-usd"></span>
                            <span class="glyphicon glyphicon-usd"></span><span class="glyphicon glyphicon-usd"></span>
                            más un incentivo extra para que puedas estrenar un nuevo equipo sin
                            quedarte en la calle.
                            Descuida, siempre te damos más por menos, además que nuestros precios son de 
                            <span class="glyphicon glyphicon-gift"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        
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
                            <li class="list-inline-item"><a href="faq.php"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" target="_blank" href="https://outlook.live.com/" ><i class="fa fa-envelope"></i></a></li>
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
