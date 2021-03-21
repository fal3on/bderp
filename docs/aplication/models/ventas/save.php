<!-- https://css-tricks.com/forums/topic/if-id-does-not-exist-php/ -->
<?php

include("db.php");

if(isset($_POST["save"])){
    //$id_venta = $_POST["id_ventas"];
    $empleado = $_POST["vendedor"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    //$fecha = $_POST["fecha_venta"];
    //$valor = $_POST["valor_venta"];
    
    //Se debe agregar una ID de producto, id de empleado y cantidad
    //echo("$id_empleado, $id_producto, $cantidad");

    $query = "INSERT INTO ventas (id_empleado_venta, id_producto, cantidad) VALUES ('$empleado', '$producto', '$cantidad')";

    // SELECT id, cantidad, inventario.precio * cantidad" FROM inventario WHERE inventario.id = $producto
    
    // Multiplicar valores de 2 tablas diferentes
    // https://stackoverflow.com/questions/48589776/multiplying-two-columns-from-two-different-tables-sql


    $result = mysqli_query($conn, $query);

     if(!$result){
         die("Query Failed!");
     }
     header("Location: ../../views/ventas.html");
}


?>