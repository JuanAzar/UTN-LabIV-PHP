<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Seleccionar Imagen</h2>
               <form action="<?php echo FRONT_ROOT ?>Image/Upload" method="post" enctype="multipart/form-data" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Imagen:</label>
                                   <input type="file" name="file" class="form-control-file">                                   
                              </div>
                         </div>                         
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Subir</button>
               </form>
          </div>
     </section>
</main>