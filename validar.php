<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="phpformat.css">
    <title>Log</title>
</head>
<body>
<?php 
   $user = $_POST['usuario'];
   $pass = $_POST['contraseña'];
   
   $link = new mysqli('localhost:33065', 'root','','project');

   if(!$link){
       die("Couldn't conect to the database! ".mysql_error());
   } else if($user == "" && $pass == ""){
       header("Location: login.html");
    }else{
        $query = "SELECT * FROM registereduser WHERE username= '".$user."'AND password = '".$pass."'";
       $result = $link->query($query);
       if($result->num_rows>0){
            session_start();
           $_SESSION['usuario']= $user;
           echo "Bienvenido ".$user;
           header("Location:index.php");
       }
       else{
           header("Location: NoRegistro.html");
        }
    }
       $result->free();
       $link->close();
?>      

</body>
</html>
    