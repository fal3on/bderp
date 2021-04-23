
<div class="section has-background-light ">
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

                            <form action="model-edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
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
                            <button class="button is-danger" name="update">Actualizar datos</button>
                        </div>
                        <div class="control">
                            <input class="button is-link" type="reset" value="Cancelar" onclick="history.back()">
                        </div>
                        </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

            