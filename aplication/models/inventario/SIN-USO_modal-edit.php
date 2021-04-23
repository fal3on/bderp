<?php

    include("db.php");


    $id=$_GET['id'];
    

    $nombre = $row['nombre'];
    $modelo = $row['modelo'];
    $descripcion = $row['descripcion'];
    $precio = $row['precio'];
    $cantidad = $row['cantidad'];

    mysqli_query($conn, "UPDATE inventario set nombre = '$nombre', modelo = '$modelo',
    descripcion = '$descripcion', precio = '$precio', cantidad = '$cantidad' WHERE id = $id ");

    header('Location: inventario.html');

?>