
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

                            <form action="model-rh-edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

                        <div class="field is-horizontal">
                        <div class="field-body">

                            <div class="field">
                            <label class="label">Nombres</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="nombres" value="<?php echo $nombres; ?>">
                            </p>
                            </div>
                            <div class="field">
                            <label class="label">Apellido paterno</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="apellido1" value="<?php echo $apellido1; ?>">
                            </p>
                            </div>
                            <div class="field">
                            <label class="label">Apellido materno</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="apellido2" value="<?php echo $apellido2; ?>">
                            </p>
                            </div>
                            
                        </div>
                        </div>

                        <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                            <label class="label">Telefono</label>
                            <p class="control is-expanded">
                                <input class="input" type="tel" name="tel" value="<?php echo $tel; ?>">
                            </p>
                            </div>
                            <div class="field">
                            <label class="label">Correo</label>
                            <p class="control is-expanded">
                                <input class="input" type="email" name="email" value="<?php echo $email; ?>">
                            </p>
                            </div>
                            <div class="field">
                            <label class="label">Nacionalidad</label>
                            <p class="control is-expanded">
                                <input class="input" type="text" name="nacionalidad" value="<?php echo $nacionalidad; ?>">
                            </p>
                            </div>
                            
                            <div class="field">
                              <label class="label">Departamento</label>
                                <div class="control">
                                  <div class="select">
                                    <select id="departamento" name="depto" id="departamento" ">
                                    <option ><?php echo $depto; ?></option>
                                    <?php
                                       $query = "SELECT * FROM departamentos";
                                       $result_departamento = mysqli_query($conn, $query);
                                       while($row = mysqli_fetch_array($result_departamento)){ ?>
                                      
                                      <option><?php echo $row["departamento"] ?></option>

                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                          </div>
                            
                        </div>
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