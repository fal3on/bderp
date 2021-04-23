<?php

include("../../include/db.php");

if(isset($_POST["save"])){
    $nombres = $_POST["nombres"];
    $apellido_p = $_POST["apellido-p"];
    $apellido_m = $_POST["apellido-m"];
    $tel = $_POST["telefono"];
    $correo = $_POST["correo"];
    $nacionalidad = $_POST["nacionalidad"];
    $depto = $_POST["departamento"];

    //echo("$nombres, $apellido_p, $apellido_m, $tel, $correo, $nacionalidad, $depto");

    $query = "INSERT INTO rh (nombres, apellido_paterno, apellido_materno, telefono, email, nacionalidad, departamento) VALUES ('$nombres', '$apellido_p', '$apellido_m',
    '$tel', '$correo', '$nacionalidad', '$depto')";
    $result = mysqli_query($conn, $query);

     if(!$result){
         die("Query Failed!");
     }
     header("Location: ../../views/rh.html");
}


?>