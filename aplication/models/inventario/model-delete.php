<?php

    include("../../include/db.php");


    if (isset($_POST['delete'])){
        $id = $_POST['id'];
        $veri = "SELECT id_producto FROM ventas WHERE id_producto = '$id'";
        $ej= mysqli_query($conn,$veri);
        $row_cnt = mysqli_num_rows($ej);

        if($row_cnt < 1){
            $query = "DELETE FROM inventario WHERE id = $id";
            $result = mysqli_query($conn, $query);
            if (!$result){
                die('query fallido');
            }

        // $_SESSION['message'] = 'Datos eliminados';
        // $_SESSION["message_type"] = "red-500";
        header('Location: ../../views/inventario.html');

        } else {
            echo '<script type="text/javascript">
            location="../../views/inventario.html";
            alert("No se puede eliminar este producto, porque existe una relación en otra tabla.");
            </script>;';
        }      
    
    }
?>