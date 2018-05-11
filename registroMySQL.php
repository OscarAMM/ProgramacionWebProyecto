<?php 
    $user = $_POST['user'];
    $password = $_POST['password'];
    $passwordC = $_POST['passwordC'];
    $email = $_POST['email'];

    $link = new mysqli('localhost:33065', 'root', '', 'project');

    if(!$link){
        die("Couldn't connect to the database! ".mysql_error());
    }else if($user == "" && $password == ""){
        echo "¡Tienes que ingresar todos los datos!";
        header("Location:registro.html");
    }else if($password != $passwordC){
        echo "¡Las contraseñas no coinciden!";
        header("Location: registro.html");
    }else{
        $query = "INSERT INTO registereduser(username, password, email, passwordC) VALUES ('$user', '$password', '$email','$passwordC')";
        $result= $link->query($query);
        header("Location:index.php");
    }
        $result->free();
        $link->close();

?>