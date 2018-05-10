<?php
//mantiene la sesión del usuario.
session_start();
$user = $_SESSION['usuario'];
//Conecta a la base de datos
    $link = new mysqli('localhost:33065','root', '','project');
    if(!$link){
        die("Couldn't connect to the database".mysql_error());
    }
    //añade los productos de la tabla 
    if(isset($_POST['añadir'])){
        if(isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"], "product_id");
            if(!in_array($_GET['id'], $item_array_id)){
                $count  = count($_SESSION["cart"]);
                //Obtiene los valores establecidos tomándolos de la BD y asignándo
                $item_array = array(
                    'product_id' => $_GET['id'],
                    'item_name' => $_POST['hidden_name'],
                    'product_price' => $_POST['hidden_price'],
                    'item_quantity' => $_POST['quantity'],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.locatio.href ="carrito.php"</script>';
            }else{
                echo '<script>alert("El producto se ha añadido")</script>';
                echo '<script>window.locatio.href ="carrito.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET['id'],
                'item_name' => $_POST['hidden_name'],
                'product_price' => $_POST['hidden_price'],
                'item_quantity' => $_POST['quantity'],   
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    //Elimina los productos de la tabla...
    if(isset($_GET["action"])){
         if($_GET["action"] == "delete"){
             foreach($_SESSION["cart"]as $keys => $value ){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Producto eliminado")</script>';
                    echo '<script>window.locatio.href ="carrito.php"</script>';
                }
            }
         }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/fontcart.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    *{
        font-family: 'Open Sans', sans-serif;
    }
    </style>
</head>
<body>
    <div class = "container">
        <div>
        </div class = "nav navbar-nav">
        <ul>
        <?php echo "<strong>Usuario: ". $user . "</strong>"; ?>
        </ul>
        <h2>Carrito de compras</h2>
        
        
        <?php 
        //Obtiene todos los objetos de la bd y los ordena por el Id...
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = $link->query($query);

            if($result ->num_rows>0){
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
        ?>   
    </div>  
    <div class="col-md-3">
                <form method="post" action="carrito.php?action=añadir&id=<?php echo $row["id"]; ?>">

                <div class = "product">
            <?php 
            //Imprime en pantalla los valores de  los objetos de la base de datos...
            ?>
                <img src="<?php echo $row['imagen']; ?>" class ="img-responsive" >
                    <h5 class="text-info"> <?php echo $row['nombre'];?> </h5>
                    <h5 class = "text-danger"><?php echo $row['price'];?></h5>
                    <input type="text" name = "quantity" class= "form-control" value = "1">
                    <input type="hidden" name="hidden_name" value= "<?php echo $row['nombre']; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
                    <input type="submit" name= "añadir" style="margin-top:5px;" class = "btn btn-success" value= "Añadir al carro">

                </div>
                  
                </form>
    </div>
                <?php 
            }
        }
        ?>

        <div style = "clear: both"></div>
        <h3 class = "title2">Detalles de la compra</h3>
        <div class = "table-responsive">
            <table class= "table- table-bordered">
            <tr>
                <th width="30%">Nombre del producto</th>
                <th width ="10%">Cantidad</th>
                <th width="13%">Detalles de precio</th>
                <th width = "10%" >Precio Total</th>
                <th width="17%">Eliminar del carrito</th>
            </tr>
            <?php 
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                <tr>
                    <td><?php echo $value["item_name"];?></td>
                    <td><?php echo $value["item_quantity"]; ?></td>
                    <td>$<?php echo $value["product_price"];?></td>
                    <td>$<?php echo number_format($value["item_quantity"] * $value["product_price"],2); ?> </td>
                    <td><a href="carrito.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class= "text-danger"> Eliminar</a></td>
                </tr>
                <?php
                    $total = $total + ($value["item_quantity"]* $value["product_price"]);
                    }
                ?>
                <tr>
                    <td colspan = "3" align ="right"> Total</td>
                    <th align="right">$ <?php echo number_format($total,2);?></th>
                </tr>
                <?php
                    
                }
                
                ?>
            </table>
        </div>
        <br>
        <br>
    </div>
    <div>
            <form action="confirmation.php" method = "post">
        <input type="submit" value = "Aceptar" class ="btn btn-primary btn-product">
        <input class = "btn btn-secondary btn-product" type="button" value="Cancelar" name= "cancelar" id="cancelar"> 
            </form>
        </div>
    <script src="js/product.js"></script>
</body> 
</html>