
<?php
    $link = new mysqli('localhost:8080','root','','project');
    if(!$link){
        die("Couldn't connect to the database! ".mysql_error());
    }else{ 
        $name = $_POST['user'];
        $password = $_POST['newPassword'];
        $passwordC = $_POST['confirmNP'];

        $sql = "UPDATE registereduser set password = '$password', passwordC = '$passwordC' WHERE username = $name";
        $result = $link->query($sql);
        if($result){
            echo "Registro actualizado con éxito";
        }else{
            echo "No se realizó con éxito";
        }
    }
    $selectionresult->free();
    $link->close();
   


?>