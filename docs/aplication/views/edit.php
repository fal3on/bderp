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
        header("Location: inventario.php");
    }

?>


<?php include('include/header.php') ?>

<div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile py-6 has-background-light">
                <div class="p-1">
                    <div class="columns is-variable is-desktop">
                        <div class="column">
                            <div class="container has-text-centered">
                                <h2 class="title is-1 pt-4 m-6">Edición</h2>
                                <p class="subtitle">Modifique con precaución.</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns is-variable is-desktop pt-2 m-6">
                    </div>
                    <div class="pb-6 mb-0 has-flat-bottom">
                        
                        <div class="columns is-centered mb-0 px-5">

                            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                                <div class="field is-horizontal">
                        <div class="field-body">

                            <div class="field">
                            <label class="label">Nombre</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="nombre" value="<?php echo $nombre; ?>">
                            </p>
                            </div>
                            <div class="field">
                            <label class="label">Modelo</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="modelo" value="<?php echo $modelo; ?>">
                            </p>
                            </div>
                            
                        </div>
                        </div>

                        <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                            <label class="label">Cantidad</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="cantidad" value="<?php echo $cantidad; ?>">
                            </p>
                            </div>
                            <div class="field">
                            <label class="label">Precio</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="precio" value="<?php echo $precio; ?>">
                            </p>
                            </div>
                            
                            
                        </div>
                        </div>
                        <div class="field">
                        <label class="label">Descripcion</label>
                        <p class="control is-expanded">
                            <textarea class="textarea" name="descripcion" rows="2"><?php echo $descripcion; ?></textarea>
                        </p>
                        </div>




                        <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" name="update">Actualizar datos</button>
                        </div>
                        </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

<?php include('include/footer.php') ?> 