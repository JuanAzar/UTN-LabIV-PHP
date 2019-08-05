<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Framework - Laboratorio IV</h2>
               <p><?php echo $message ?></p>
          </header>
          <form action="<?php echo FRONT_ROOT ?>Home/Login" method="post" class="login-form bg-dark-alpha p-5 text-white">
               <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Ingresar usuario">
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <button type="submit" class="btn btn-dark btn-block btn-lg" type="submit">
                    Iniciar Sesión
               </button>
          </form>
     </div>
</main>