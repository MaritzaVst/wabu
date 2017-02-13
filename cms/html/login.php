<?php include 'includes/header.php' ?>

    <section class="login main-content">
      <div class="box">
        <!--Login form-->
        <form action="universidad.php" method="post" data-parsley-validate="" class="content-form floating-effect">
          <img src="img/logo.png" alt="Logo Wabu" class="logo">
          <div class="relative">
            <label for="email" class="label-floating">Correo</label>
            <br>
            <input type="email" id="email" name="email" autocomplete="off"  required>
          </div>
          <div class="relative">
            <label for="password" class="label-floating">Contraseña</label>
            <br>
            <input type="password" name="password" autocomplete="off" required>
          </div>
          <button type="submit" class="btn bg-white">ENTRAR</button>
          <a href="lost-password.php" title="Olvidé mi contraseña" class="link-lost-pwd">Olvidé mi contraseña</a>
        </form>
      </div>
    </section>
<?php $script = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>