<!-- https://css-tricks.com/forums/topic/if-id-does-not-exist-php/ -->
<?php
include("../../include/db.php");

if(isset($_POST["save"])){
    //$id_venta = $_POST["id_ventas"];
    $empleado = $_POST["vendedor"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    //$precio_unitario = $_POST["precio_unitario"];
    //$fecha = $_POST["fecha_venta"];
    //$valor = $_POST["valor_venta"];

    //Valida que cantidad tenga un numero positivo
    if($cantidad>=0){
 
        // Seleccion para realizar multiplicacion de cantidad total
        $query = "SELECT precio FROM inventario WHERE id = '$producto'";
        $run = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($run)){
            $campo = $row[0];
        }
        
        $precio_venta = $campo*$cantidad;
        // Seleccion de cantidad de inventario
        $query = mysqli_query($conn, "SELECT cantidad FROM inventario where id = '$producto';");
        $row = mysqli_fetch_array($query);
        $variable = $row['cantidad'];
        
        // Verificacion de disponibilidad en inventario
        if(($variable - $cantidad) >= 0){
            $query = "UPDATE inventario SET cantidad = cantidad - '$cantidad' where id = '$producto';";
            $query .= "INSERT INTO ventas (id_empleado_venta, cantidad, valor_venta, id_producto) VALUES ('$empleado', '$cantidad', '$precio_venta', '$producto');";
            $result = mysqli_multi_query($conn, $query);
            
            if(!$result){
                die("Query Failed!");
            }
            echo '<script type="text/javascript">
            alert("Datos ingresados correctamente!");
            window.location="../../views/ventas.html";
            </script>;';
        }
        
        else{
            echo '<script type="text/javascript">
            location="../../views/ventas.html";
            alert("Cantidad en inventario insuficiente");
            </script>;';
            
        }
    }

    else{
        echo '<script type="text/javascript">
            location="../../views/ventas.html";
            alert("Favor de ingresar una cantidad valida");
            </script>;';
    }
}



// include("db.php");

// if(isset($_POST["save"])){
//     //$id_venta = $_POST["id_ventas"];
    
//     $empleado = $_POST["vendedor"];
//     $producto = $_POST["producto"];
//     $cantidad = $_POST["cantidad"];
//     //$precio_unitario = $_POST["precio_unitario"];
//     //$fecha = $_POST["fecha_venta"];
//     //$valor = $_POST["valor_venta"];

//     $queryb = "SELECT precio FROM inventario WHERE id = '$producto'";
//     $run = mysqli_query($conn, $queryb);
//     while($row = mysqli_fetch_array($run)){
//         $campo = $row[0];
//     }
//     $precio_venta = $campo * $cantidad;

//     //Se debe agregar una ID de producto, id de empleado y cantidad
//     //echo("$id_empleado, $id_producto, $cantidad");   
//     //$total_sale = "SELECT precio FROM inventario WHERE id = '$producto'";


//     // Hacer condicional para ejecutar queries UPDATE/INSERT solo si la cantidad en inventario es mayor a 0
   
//     // $query_vcant ="SELECT cantidad FROM inventario WHERE id = '$producto';";
//     // $run = mysqli_query($conn, $query_vcant);
//     // while($row = mysqli_fetch_array($run)){
//     //     $cantidad_inventario = $row[0];
//     // }
//     // $restado = $cantidad_inventario - $cantidad;

//     // $zero = 0;
//     // if($restado <= $zero){
//     //     //.... codigo para mostrar alerta
//     //     echo '<script language="javascript">';
//     //     echo 'alert("Error!")';
//     //     echo '</script>';
//     // }

//     $query = "UPDATE inventario SET cantidad = cantidad - '$cantidad' where id = '$producto';";
    

//     $query .= "INSERT INTO ventas (id_empleado_venta, cantidad, valor_venta, id_producto) VALUES ('$empleado', '$cantidad', '$precio_venta', '$producto');";
    
    

//     // Referemcia cantidad * precio
//     // https://stackoverflow.com/questions/5693259/how-can-a-query-multiply-2-cell-for-each-row-mysql
//     // https://stackoverflow.com/questions/31972697/sql-multiplying-two-columns-from-two-different-tables
    
//     // QUERY PARA SACAR EL PRECIO TOTAL DE LA VENTA
//     //$query .= "";
//     //select ventas.cantidad, inventario.precio, ventas.cantidad * inventario.precio from ventas join inventario on ventas.id_producto = inventario.id
    
//     // BUSCAR
//     // https://www.google.com/search?q=insert+the+result+of+a+SELECT+sql&oq=insert+the+result+of+a+SELECT+sql&aqs=chrome..69i57.9040j0j1&sourceid=chrome&ie=UTF-8




//     $result = mysqli_multi_query($conn, $query);
//     //$result = mysqli_query($conn, $query);

//      if(!$result){
//          die("Query Failed!");
//      }
//         echo '<script language="javascript">';
//         echo 'alert("Datos ingresados!")';
//         echo '</script>';
//      header("Location: ../../views/ventas.html");
        
// }


?>
