
<?php
    $link = new mysqli('localhost','root','','project');
    if(!$link){
        die("Couldn't connect to the database! ".mysql_error());
    }else{ 

        $id = $_POST['id'];
        $password = $_POST['contraseñaNueva'];
        $passwordC = $_POST['contraseñaRepetida'];

        $sql = "UPDATE registereduser set password = '$password', passwordC = '$passwordC' WHERE IdUser = $id";
        $result = $link->query($sql);
        if($result){
            echo "Registro actualizado con éxito";
        }else{
            echo "No se realizó con éxito";
        }
    }
        
    $link->close();   


?>