<?php

    include("aplication/include/db.php");

    $usr = $_POST["usr_input"];
    $pass = $_POST["pass_input"];

    if(empty($usr) or empty($pass)){
        echo '<script type="text/javascript">
        alert("¡Algunos campos estan vacios, favor de rellenarlos!");
        window.location="index.html";
        </script>;';
    }else{
        $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usr' and contraseña = '$pass'");
        $result = mysqli_num_rows($query);

        if($result == TRUE){
            header("Location: aplication/views/home.html");
            echo "Bienvenido: ".$usr;

            
        }else if($usr == FALSE){
            echo '<script type="text/javascript">
            alert("Algo salio mal, comprueba tu información.");
            window.location="index.html";
            </script>;';
        }
    }

?>