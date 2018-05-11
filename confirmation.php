<?php
    session_start();
    $user = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Confirmación</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <?php
                    echo "<img src='img/checkmark.png'" . "alt='checkGreen'" . "width='200'>" . "<br>";
                    echo "<h4>¡GRACIAS POR TU COMPRA! " . "<span class='glyphicon glyphicon-user'> </span> " . $user . "</h4>";
                    echo "<h5> Su número de pedido es el siguiente: " . "000" .rand(100,10000);
                    echo "<br>Le enviaremos a su correo una confirmación de orden con detalles e información de guía</h5>";
                ?>
                <br>
                <input type="button" value="Regresar" class = "btn btn-success" id = "regresar">
            </div>
        </div>    
        <script src="js/confirmation.js"></script>
    </body>
</html>
