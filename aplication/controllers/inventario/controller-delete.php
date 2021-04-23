<div class="modal" id="del-modal">
            <div class="modal-background"></div>
                           
                <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">Eliminar productos</p>
                      <button class="delete close" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                      <!-- Content ... -->
                      <h1 class="title">Complete el formulario</h1>
                      <p class="subtitle">Ingrese el ID y cantidad de producto a eliminar.</p>

                      <form action="../models/inventario/model-delete.php" method="POST">

                            <div class="field is-horizontal">
                              <div class="field-body">
                                <div class="field">
                                  <label class="label">Id</label>
                                  <p class="control is-expanded">
                                    
                                      <input type="text" class="input" placeholder="Id" id="id" name="id">
                                    
                                  </p>
                                </div>
                                
                              </div>
                            </div>




                            <div class="field is-grouped">
                              <div class="control">
                                <button class="button is-link" value="delete task" name="delete">Submit</button>
                              </div>
                              
                          </div>


                      </form>
                    </section>
                  </div>
            
        </div>