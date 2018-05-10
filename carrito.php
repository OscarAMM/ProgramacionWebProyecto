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
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
            
        ?>
        <div class = "col-md-3">
                <form method="post" action="carrito.php?action=add&id=<?php echo $row["id"] ?>">
                    <img src="<?php echo $row["imagen"]; ?>" class "img-responsive">
                    <h5 class="text-info"><?php $row["nombre"];?></h5>
                    <h5 class"text-danger"><?php $row["price"]; ?></h5>
                    <input type="text" name = "quantity" class= "form-control" value = "1">
                    <input type="hidden" name="hidden-name" value= "<?php echo $row["nombre"]; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                    <input type="submit" name= "añadir" style="margin-top:5px;" class = "btn btn-success" value= "Añadir al carro">
                </form>
        </div>
                <?php 
            }
        }
        ?>
    </div>
</body>
</html>
<?php   
    echo "";
?>