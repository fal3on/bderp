<?php

    include("../include/db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM rh WHERE id_empleado = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nombres = $row['nombres'];
            $apellido1 = $row['apellido_paterno'];
            $apellido2 = $row['apellido_materno'];
            $tel = $row['telefono'];
            $email = $row['email'];
            $nacionalidad = $row['nacionalidad'];
            $depto = $row['departamento'];
        }

    }

    if(isset($_POST['update'])){
            $id = $_GET['id'];
            $nombres = $_POST['nombres'];
            $apellido1 = $_POST['apellido1'];
            $apellido2 = $_POST['apellido2'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $nacionalidad = $_POST['nacionalidad'];
            $depto = $_POST['depto'];


        $query = "UPDATE rh set nombres = '$nombres', apellido_paterno = '$apellido1', apellido_materno = '$apellido2', telefono = '$tel',
        email = '$email', nacionalidad = '$nacionalidad', departamento = '$depto' WHERE id_empleado = $id";
        mysqli_query($conn, $query);

        $_SESSION["message"] = "Datos actualizados";
        $_SESSION["message_type"] = "blue-500";
        header("Location: rh.html");

    }

?>

<?php include('../include/header.php') ?>
<?php include('view-rh-edit.php') ?>
<?php include('../include/footer.php') ?>
