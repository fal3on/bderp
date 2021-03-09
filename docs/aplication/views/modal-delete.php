<?php

    include("db.php");


    if (isset($_POST['delete'])){
        $id = $_POST['id'];
        //echo $id;
        $query = "DELETE FROM inventario WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die('query fallido');
        }

       // $_SESSION['message'] = 'Datos eliminados';
       // $_SESSION["message_type"] = "red-500";
        header('Location: inventario.php');
    
    }
?>