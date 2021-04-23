<div class="modal" id="add-rh-modal">
            <div class="modal-background"></div>
                       
                <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">Agregar empleado</p>
                      <button class="delete close" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                      <!-- Content ... -->
                      <h1 class="title">Registro nuevo</h1>
                      <p class="subtitle">Rellene cada una de las areas solicitadas.</p>


                      <form action="../models/rh/save.php" method="POST">

                      <div class="field is-horizontal">
                        <div class="field-body">
                          <div class="field">
                            <label class="label">Nombre/s</label>
                            <p class="control is-expanded">
                              <input type="text" class="input" placeholder="Nombre/s" name="nombres" id="nombres" require>
                            </p>
                          </div>
                          <div class="field">
                            <label class="label">Apellido paterno</label>
                            <p class="control is-expanded">
                              <input type="text" class="input" placeholder="Apellido paterno" name="apellido-p" id="apellido-p" require>
                            </p>
                          </div>
                          <div class="field">
                            <label class="label">Apellido materno</label>
                            <p class="control is-expanded">
                              <input type="text" class="input" placeholder="Apellido materno" name="apellido-m" id="apellido-m" require>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="field is-horizontal">
                        <div class="field-body">
                          <div class="field">
                            <label class="label">Telefono</label>
                            <p class="control is-expanded">
                              <input type="tel" class="input" placeholder="Telefono" name="telefono" id="telefono" require>
                            </p>
                          </div>
                          <div class="field">
                            <label class="label">Correo</label>
                            <p class="control is-expanded">
                              <input type="email" class="input" placeholder="Correo electronico" name="correo" id="correo" require>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="field is-horizontal">
                        <div class="field-body">

                          
                            

                              <div class="field">
                                <label class="label">Nacionalidad</label>
                                <p class="control is-expanded">
                                  <input type="text" class="input" placeholder="Nacionalidad" name="nacionalidad" id="nacionalidad" require>
                                </p>
                              </div>


                              
                              <!-- Hacer un dropdown con la tabla departamentos de la base de datos -->
                            <div class="field">
                              <label class="label">Departamento</label>
                                <div class="control">
                                  <div class="select">
                                    <select id="departamento" name="departamento" >
                                    <option>-Seleccione depto-</option>
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
                          <button class="button is-link" type="submit button" value="save task" name="save">Submit</button>
                        </div>
                        
                    </div>
                    </form>
                </section>
              </div>
        </div>