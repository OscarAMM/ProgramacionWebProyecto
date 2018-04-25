<?php
    $name = $_POST['user'];
    $password = $_POST['newPassword'];
    $passwordC = $_POST['confirmNP'];

    $link = mysqli('localhost:8080','root','','project');
    if(!$link){
        die("Couldn't connect to the database! ".mysql_error());
    }else{ 
        $query = "UPDATE registereduser SET password = $password, passwordC = $passwordC WHERE user = $name";
        $result = $link->query($query);
    }
    $result->free();
    $link->close();


?>