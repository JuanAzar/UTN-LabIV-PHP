<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Mostrando imagen</h2>

               <?php
                    if(isset($image))
                    {
                        ?>
                            <img src="<?php echo FRONT_ROOT.UPLOADS_PATH.$image->getName() ?>">
                        <?php
                    }
               ?>               
          </div>
     </section>
</main>