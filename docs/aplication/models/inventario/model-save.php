<?php

/* Comprobacion de recepcion 
if (isset($_POST['save'])){
    echo 'saving changes...';
}*/

include("db.php");

if (isset($_POST['save'])){
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    //echo $user;
    //echo $modelo;
    //echo $descripcion;
    //echo $precio;
    //echo $cantidad;

    $query = "INSERT INTO inventario (nombre, modelo, descripcion, precio, cantidad) VALUES ('$nombre', '$modelo', '$descripcion', '$precio', '$cantidad')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query Failed!');
        
    }
    //echo 'Saved';
    //$_SESSION["message"] = "Cambios guardados";
    //$_SESSION["message_type"] = "green-500";

    header("Location: ../../views/inventario.html");
}

?>