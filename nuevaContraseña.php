
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
    <title>Cambiar contraseña</title>
</head>

<body>
    <nav class="navbar navbarLogo navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="logo" width="200px">
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="serviciosPhonetica.php">Servicios</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </nav>
    <!-- fin del header -->
    <div class="container-fluid">
        <div class="col-md-offset-4 col-md-3">
            <div class="panel panel-default">
                <img class="center-block" src="img/logo.png" alt="logo" width="250px">
                <div class="panel-heading">
                    <h1>Contraseña</h1>
                </div>
                <!--fin panel heading-->
                <form action="consulta.php" method = "POST" enctype = "multipart/form-data" onsubmit = "consulta.php">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" >
                    </div>
                    <div class="panel-footer">
                        <input type="submit" value="Cambiar" class="btn btn-success">
                    </div>
                </div>
                </form>

</body>

</html>