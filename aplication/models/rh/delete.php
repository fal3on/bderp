<?php 

include("../../include/db.php");
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $veri = "SELECT id_empleado_venta FROM ventas WHERE id_empleado_venta = '$id'";
        $ej= mysqli_query($conn,$veri);
        $row_cnt = mysqli_num_rows($ej);

        if($row_cnt < 1){
            $query = "DELETE FROM rh WHERE id_empleado = $id";
            $result = mysqli_query($conn, $query);
            if (!$result){
            die('query fallido');
            }
        // $_SESSION['message'] = 'Datos eliminados';
        // $_SESSION["message_type"] = "red-500";
        header('Location: ../../views/rh.html');
        } else {
            echo '<script type="text/javascript">
            location="../../views/rh.html";
            alert("No se puede eliminar este registro, porque existe una relación en otra tabla.");
            </script>;';
        }
    }


?>