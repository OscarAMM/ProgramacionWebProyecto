<?php 
            $email = $_POST["email"];
            $link = new mysqli('localhost:8080', 'root', '', 'project');
            if(!$link){
                echo "No hizo la conexion".mysql_error();
            }else{
                $sql = "SELECT IdUser,username,email from registereduser where email = '"
                .$email."'"; 
                $result = $link->query($sql);
                if($result->num_rows>0){
                    $fila = $result->fetch_array(MYSQLI_ASSOC);
                    echo $fila["IdUser"];
                    echo $fila["username"];
                    //echo $fila["password"];
                    echo $fila["email"];
                    
                }
                $result->free();
                $link->close();
            }
        ?>