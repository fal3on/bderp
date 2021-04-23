<!--Agregar Modal-->
         
<div class="modal" id="add-modal">
            <div class="modal-background"></div>
                       
                <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">Agregar productos</p>
                      <button class="delete close" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                      <!-- Content ... -->
                      <h1 class="title">Complete el formulario</h1>
                      <p class="subtitle">Rellene cada una de las areas solicitadas.</p>


                      <form action="../models/inventario/model-save.php" method="POST">

                      <div class="field is-horizontal">
                        <div class="field-body">
                          
                          <div class="field">
                            <label class="label">Marca</label>
                            <p class="control is-expanded">
                              <input type="text" class="input" placeholder="Marca" id="nombre" name="nombre">
                            </p>
                          </div>
                          <div class="field">
                            <label class="label">Modelo</label>
                            <p class="control is-expanded">
                              <input type="text" class="input" placeholder="Modelo" id="modelo" name="modelo">
                            </p>
                          </div>
                        </div>
                      </div>
                     
                      
                      <div class="field is-horizontal">
                        <div class="field-body">

                        <div class="field">
                            <label class="label">Precio</label>
                            <p class="control is-expanded">
                              <input type="text" class="input" placeholder="Precio" id="precio" name="precio">
                            </p>
                          </div>

                          
                          
                          <div class="field">
                            <label class="label">Cantidad</label>
                            <p class="control is-expanded">
                              <input type="text" class="input" placeholder="Cantidad" id="cantidad" name="cantidad">
                            </p>
                          </div>
                        </div>
                      </div>
                      
                      <div class="field"  >
                        <label class="label">Descripción</label>
                        <div class="control">
                          <textarea class="textarea" name="descripcion" id="descripcion" rows="3" placeholder="Ingrese una descripcion."></textarea>
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
        <!--/Agregar modal-->