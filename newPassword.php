<?php 

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update.php" method = "POST" enctype = "multipart/form-data" onsubmit = "update.php">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="contraseña">Nueva Contraseña:</label>
                        <input type="text" class="form-control" id="contraseñaNueva" name="contraseñaNueva" >
                    </div>
                    <div class="panel-body">
                    <label for="contraseñaC">Repetir Contraseña:</label>
                        <input type="text" class="form-control" id="contraseñaRepetida" name="contraseñaRepetida" >
                    </div>
                    <div class="panel-footer">
                        <input type="submit" value="Cambiar" class="btn btn-success">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                </div>
                </form>
</body>
</html>