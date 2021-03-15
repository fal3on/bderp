<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM inventario WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $modelo = $row['modelo'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $cantidad = $row['cantidad'];
        }

    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $modelo = $_POST['modelo'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];


        $query = "UPDATE inventario set nombre = '$nombre', modelo = '$modelo',
        descripcion = '$descripcion', precio = '$precio', cantidad = '$cantidad' WHERE id = $id ";
        mysqli_query($conn, $query);

        $_SESSION["message"] = "Datos actualizados";
        $_SESSION["message_type"] = "blue-500";
        header("Location: inventario.html");
    }

?>


<?php include('include/header.php') ?>
<?php include('view-edit.php') ?>
<?php include('include/footer.php') ?>