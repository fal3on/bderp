<?php include('db.php') ?>
<?php include('include/header.php') ?>
<?php include('include/footer.php') ?>


    <div class="app">

        <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
            <div class="p-1">

                <section class="hero is-small is-light">
                    <div class="hero-body">
                      <p class="title">
                        Inventario
                      </p>
                    </div>
                  </section>

                <section class="section">
                  <div class="columns is-variable has-background-light">


                    


                        <div class="column">
                            <div class="container">
                                <div class="level m-4 level-is-shrinkable">
                                    <div class="level-left">

                                      <p class="buttons">
                                        <!-- BTN ORIGINAL EDITAR
                                        <button class="button is-primary" id="launchModal-edit">
                                            <span class="icon">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span>Editar</span>
                                          </button>-->
    
                                          <button class="button is-link" id="launchModal-add">
                                            <span class="icon">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            <span>Agregar</span>
                                          </button>
    
                                          <button class="button is-danger" id="launchModal-del">
                                            <span class="icon">
                                                <i class="fas fa-trash-alt"></i>
                                            </span>
                                            <span>Eliminar</span>
                                          </button>        
                                      </p>

                                        
                                    </div>
                                    <div class="level-right">

                                      <form action="search.php" method="post">


                                      <div class="field is-grouped">
                                        <p class="control is-expanded has-icons-left">
                                          <input class="input" type="text" placeholder="Buscar" name="search" id="myInput" onkeyup="myFunction()">
                                          <span class="icon is-left">
                                            <i class="fas fa-search"></i>
                                        </span> 
                                        </p>
                                        
                                      </div>


                                      </form>
                                        
                                      

                                    </div>    

                                    
                                </div>
                                
                                <div class="table-wrapper ">
                                    
                                  <span class = "is-size-5">
                                      Inventario General
                                  </span>
                                  <div class="table-container ">
                                    <table class="table is-bordered is-fullwidth table-container  has-text-centered" id="myTable">
                                    <thead>
                                      <tr>
                                        <th class="border border-green-600 ...">ID</th>
                                        <th class="border border-green-600 ...">Nombre</th>
                                        <th class="border border-green-600 ...">Modelo</th>
                                        <th class="border border-green-600 ...">Descripcion</th>
                                        <th class="border border-green-600 ...">Precio</th>
                                        <th class="border border-green-600 ...">Cantidad</th>
                                        <th class="border border-green-600 ...">Acciones</th>
                                      </tr>
                                    </thead>
                    
                                    <tbody>
                                      <?php 
                                      
                                      $query = "SELECT * FROM inventario";
                                      $result_inventario = mysqli_query($conn, $query);
                                      
                                      while($row = mysqli_fetch_array($result_inventario)){ ?>

                                          <tr>
                                            <td class="border border-green-600 ..."><?php echo $row['id'] ?></td>
                                            <td class="border border-green-600 ..."><?php echo $row['nombre'] ?></td>
                                            <td class="border border-green-600 ..."><?php echo $row['modelo'] ?></td>
                                            <td class="border border-green-600 ..."><?php echo $row['descripcion'] ?></td>
                                            <td class="border border-green-600 ..."><?php echo $row['precio'] ?></td>
                                            <td class="border border-green-600 ..."><?php echo $row['cantidad'] ?></td>

                                            <td class="border border-green-600 ...">
                                              <a class="button is-primary" href="edit.php?id=<?php echo $row['id']?>" >
                                                <i class="fas fa-edit"></i>
                                              </a>
                                              
                                              
                                              <a class="button is-danger" href="delete.php?id=<?php echo $row['id']?>">
                                              <i class="fas fa-trash-alt"></i>
                                              </a>

                                              <!--TESTEO MODAL-->
                                            
                                              <button class="button is-primary" id="launchModal-edit" type="submit">
                                                  <span class="icon">
                                                      <i class="fas fa-edit"></i>
                                                  </span>
                                                  <span>Editar</span>
                                                  
                                                </button>
                                            
                                              
                                              
                                            </td>

                                          </tr>

                                        <?php } ?>
                                        
                                        
                                    </tbody>
                                    </table>
                                    
                                  </div>

                                </div>
                            
                            </div>
                        </div>



                      


                    </div>  
                </section>
            </div>
         </div>


         

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


                      <form action="save.php" method="POST">

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

        <!--Eliminar Modal-->
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

                      <form action="modal-delete.php" method="POST">

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
                              <div class="control">
                                <button class="button cancel-btn is-link is-light">Cancel</button>
                              </div>
                          </div>


                      </form>
                    </section>
                  </div>
            
        </div>
        <!--/Eliminar modal-->


        <!--Editar modal-->

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


                    <form action="edit-modal.php?id=<?php echo $row['id']?>"" method="POST">

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
                            <div class="control">
                              <button class="button cancel-btn is-link is-light">Cancel</button>
                            </div>
                        </div>
                      
                    </form>


                    


                  </section>
                </div>
          
      </div>

        <!--/Editar modal-->

        <!--About Modal-->
        <div class="modal is-mobile" id="myModal">
            <div class="modal-background"></div>
                          
                <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">About BitDesign/ERP</p>
                      <button class="delete close" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                      <!-- Content ... -->
                      <h1 class="title">Bienvenido a BitDesign ERP</h1>
                      <p class="subtitle">Selecciona alguno de los modulos para acceder a las funcionalidades disponibles.</p>
                      <h2 class="title mt-2">Desarrollado por</h2>
                      <p class="subtitle">
                         Fernando León - <span>Frontend</span><br>
                         Erick de León - <span>Backend (server)</span><br>
                         Uriel Juarez - <span>Backend (linking)</span><br>
                         Victor Vasquez - <span>Backend (DataBases)</span></p>
                        </section>
                  </div>
          </div>
        <!--/About modal-->

        

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="../../assets/js/script.js"></script>

    <script>
        $("#myBtn").click(function(){
            $("#myModal").addClass("is-active");
        });
        $(".delete").click(function(){
            $("#myModal").removeClass("is-active");
        });
    </script>
    <script>
        $("#launchModal-add").click(function(){
            $("#add-modal").addClass("is-active");
        });

        $(".delete").click(function(){
            $("#add-modal").removeClass("is-active");
        });
        $(".cancel-btn").click(function(){
            $("#add-modal").removeClass("is-active");
        });
    </script>
    <script>
        $("#launchModal-del").click(function(){
            $("#del-modal").addClass("is-active");
        });

        $(".delete").click(function(){
            $("#del-modal").removeClass("is-active");
        });
        $(".cancel-btn").click(function(){
            $("#del-modal").removeClass("is-active");
        });
    </script>

    <script>
      $("#launchModal-edit").click(function(){
          $("#edit-modal").addClass("is-active");

          


      });

      $(".delete").click(function(){
          $("#edit-modal").removeClass("is-active");
      });
      $(".cancel-btn").click(function(){
          $("#edit-modal").removeClass("is-active");
      });
    </script>

    <script>
      function myFunction(){
        const filter = document.querySelector('#myInput').value.toUpperCase();
        const trs = document.querySelectorAll('#myTable tr:not(.header)');
        trs.forEach(tr => tr.style.display = [...tr.children].find(td => td.innerHTML.toUpperCase().includes(filter)) ? '' : 'none');

      }
    </script>

