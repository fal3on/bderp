<?php 

    include("db.php");
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM ventas WHERE id_ventas = $id";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die('query fallido');
            
        }

       // $_SESSION['message'] = 'Datos eliminados';
       // $_SESSION["message_type"] = "red-500";
        header('Location: ../../views/ventas.html');
    }


?>