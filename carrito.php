<?php
session_start();
$user = $_SESSION['usuario'];
    $link = new mysqli('localhost:33065','root', '','project');
    if(!$link){
        die("Couldn't connect to the database".mysql_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    *{
        font-family: 'Open Sans', sans-serif;
    }
    </style>
</head>
<body>
    <div class = "container" style = "width: 65%">
        <h2>Carrito de compras</h2>
        <?php echo "<strong>Usuario: ". $user . "</strong>"; ?>
        <?php 
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = $link->query($query);

            if($result ->num_rows>0){
                while($row = $result->fetch_array(MYSQLI_ASSOC));
            }
        ?>
        <div>
        
        </div>
    
    </div>
</body>
</html>
<?php   
    echo "";
?>