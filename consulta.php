<?php 
            $email = $_POST["email"];
            $link = new mysqli('locahost:33065', 'root', '', 'project');
            if(!$link){
                die("Couldn't connect to the database! ".mysql_error());
            }else{
                $sql = "SELECT IdUser,username,password,email from registereduser where email = '"
                .$email."'"; 
                $result = $link->query($sql);
                if($result->num_rows>0){
                    $fila = $result->fetch_array(MYSQLI_ASSOC);
                    echo "IdUser: ". $fila["IdUser"];
                    echo "<br>";
                    echo "Usuario: ".$fila["username"];
                    echo "<br>";
                    echo "Password: ".$fila["password"];
                    echo "<br>";
                    echo "Email: ".$fila["email"];
                    session_start();
                    $_SESSION['id'] = $fila["IdUser"];
                    header('Location: newPassword.php');
                    
                }
                $result->free();
                $link->close();
            }
        ?>