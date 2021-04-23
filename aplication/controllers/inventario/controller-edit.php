<div class="modal " id="edit-modal">
          <div class="modal-background"></div>
                         
              <div class="modal-card">
                  <header class="modal-card-head">
                    <p class="modal-card-title">Editar productos por id</p>
                    <button class="delete close" aria-label="close"></button>
                  </header>
                  <section class="modal-card-body">
                    
                    <!-- Content ... -->
                    <h1 class="title">Complete el formulario</h1>
                    <p class="subtitle">Ingrese el ID para realizar cambios.</p>


                    <form action="" method="POST">

                          <div class="field is-horizontal">
                            <div class="field-body">
                              
                              <div class="field">
                                <label class="label">Nombre</label>
                                <p class="control is-expanded">
                                  <input type="text" class="input" placeholder="Nuevo nombre" name="nombre" value="<?php echo $row['nombre'] ?>">
                                </p>
                              </div>
                              <div class="field">
                                <label class="label">Cantidad</label>
                                <p class="control is-expanded">
                                  <input type="text" class="input" placeholder="Nueva cantidad" name="cantidad" value="<?php echo $row['cantidad']; ?>">
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="field is-horizontal">
                            <div class="field-body">
                              <div class="field">
                                <label class="label">Modelo</label>
                                <p class="control is-expanded">
                                  <input type="text" class="input" placeholder="Nuevo modelo" name="modelo" value="<?php echo $modelo; ?>">
                                </p>
                              </div>
                              <div class="field">
                                <label class="label">Precio</label>
                                <p class="control is-expanded">
                                  <input type="text" class="input" placeholder="Nuevo Precio" name="precio" value="<?php echo $precio; ?>">
                                </p>
                              </div>
                              
                            </div>
                          </div>
                          <div class="field">
                            <label class="label">Descripcion</label>
                            <p class="control is-expanded">
                              <textarea class="textarea" placeholder="Nueva descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
                            </p>
                          </div>




                          <div class="field is-grouped">
                            <div class="control">
                              <button class="button is-link">Submit</button>
                            </div>
                            
                        </div>
                      
                    </form>


                    


                  </section>
                </div>
          
      </div>
