<div class="modal" id="sale-modal">
            <div class="modal-background"></div>
                       
                <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">Agregar venta</p>
                      <button class="delete close" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                      <!-- Content ... -->
                      <h1 class="title">Registrar venta</h1>
                      <p class="subtitle">Ingrese una venta manualmente.</p>


                      <form action="../models/ventas/save.php" method="POST">

                      <!-- crear menu dropdown con id_empleado usando php + sql
                        https://www.plus2net.com/php_tutorial/list-table.php -->
                        

                      <div class="field is-horizontal">
                        <div class="field-body">
                        <div class="field">
                            <label class="label">Id vendedor</label>
                                <div class="control">
                                  <div class="select">
                                    <select id="vendedor" name="vendedor">
                                    <option>-Vendedores-</option>
                                    <?php
                                       $query = "SELECT * FROM rh";
                                       $result_rh = mysqli_query($conn, $query);
                                       while($row = mysqli_fetch_array($result_rh)){ ?>
                                      
                                      <option><?php echo $row["id_empleado"] ?></option>
                                      
                                      
                                      <!-- <option>Recursos Humanos</option>
                                      <option>TI</option>
                                      <option>Ventas</option>
                                      <option>Compras</option>
                                      <option>Contabilidad</option> -->

                                      
                                      
                                      <?php } ?> 

                                    </select>
                                  </div>
                                </div>
                          </div>

                          <div class="field">
                            <label class="label">Id Producto</label>
                                <div class="control">
                                  <div class="select">
                                    <select id="producto" name="producto">
                                    <option>-Productos-</option>
                                    <?php
                                       $query = "SELECT * FROM inventario";
                                       $result_producto = mysqli_query($conn, $query);
                                       while($row = mysqli_fetch_array($result_producto)){ ?>
                                      
                                      <option><?php echo $row["id"] ?></option>

                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                          </div>






                        </div>
                      </div>

                      <div class="field is-horizontal">
                        <div class="field-body">
                          
                          <div class="field">
                            <label class="label">Cantidad</label>
                            <p class="control is-expanded">
                              <input type="number" class="input" placeholder="Unidades vendidas" id="cantidad" name="cantidad">
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="field is-horizontal dynamic-element">

                      </div>
                                        

                      <div class="field is-grouped">
                        <div class="control">
                          <button class="button is-link" id="add-row" type="submit button" value="save task" name="save">Submit</button>
                        </div>
                        
                    </div>
                    </form>
                </section>
                  </div>
            
        </div>