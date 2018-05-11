<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    <title>Bajo construcción</title>
</head>

<body>
    <div>
        <nav class="navbar navbarLogo navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="logo" width="200">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Inicio</a>
                    </li>

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
    </div>
    <div class="container">
        <div class="h1">
            Lamentamos que tengas que ver esto... ¡estamos trabajando para mejorar!
        </div>
        <div class="text-center">
            <img src="img/construction.png" class="img-responsive">
        </div>
        <br>
        <br>
        <div class="text-center">
            <input type="button" value="Regresar" id="regresar" class="btn btn-success">
        </div>
    </div>
    <script src="js/confirmation.js"></script>
</body>

</html>