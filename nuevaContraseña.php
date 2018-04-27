
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/navbarStyle.css">
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