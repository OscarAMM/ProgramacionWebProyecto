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
        <title>F.A.Q. - A Phonetica Page</title>
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
                <div class="col-md-12"><h1 class="text-center">Preguntas Frecuentes</h1></div>
            </div>
            <br>
            <div class="col-md-12">                
                <div class="panel panel-default">
                    <div class="panel-heading">1. ¿Por qué ofrecen precios tan bajos? ¿existe algo turbio detrás?</div>
                    <div class="panel-body">
                        Por supuesto que no tenemos nada bajo la manga. A decir verdad, tenemos contactos en el extranjero
                        directamente con las compañías manufactureras, por lo tanto, podemos ofrecer precios muy bajos y 
                        competentes a nivel nacional, además que ocupamos pocos empleados, por lo que ahorramos demasiados
                        recursos y así, podemos tener los precios que anunciamos.
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">2. ¿Qué hacen con los teléfonos que entregamos en el servicio de renovación?</div>
                    <div class="panel-body">
                        A partir de la evaluación que realizamos, nosotros determinamos si podemos usar sus partes para los servicios de
                        reparación. De no ser así, los donamos a organizaciones sin fines de lucro que se dedican a vender deshechos electrónicos
                        para así, disminuir la contaminación del medio ambiente.
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">3. Me encanta su amabilidad y los servicios ofrecidos, pero no vivo en su locación ¿Abrirán sucursales a futuro?</div>
                    <div class="panel-body">
                        Sólo el futuro lo decidirá...
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">4. Estoy enamorado con el diseño de su sitio web, ¿Quién está detrás de ello?</div>
                    <div class="panel-body">
                        ¡Pues nosotros mismos! Gracias a lo aprendido en la Universidad y a nuestro profesor, somos capaces de realizar maravillas.
                        Para más información, ponte en contacto con nosotros ;)
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">5. Mis preguntas no aparecen aquí ¿Quien me las responde?</div>
                    <div class="panel-body">
                        ¡Pues nosotros! No dudes en contactarnos directamente en nuestro establecimiento.
                        Estamos a favor de la transparencia de la información.
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        
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
