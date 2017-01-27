<?php include 'includes/header.php' ?>

    <section class="login">
        
        <div class="box">
            <!--Login form-->
            <form action="universidad.php" method="post" data-parsley-validate="">
                
                <img src="img/logo.png" alt="Logo Wabu" class="logo">

                <label for="email">Correo</label>
                <input type="email" id="email" name="email" autocomplete="off"  placeholder="EMAIL" required>

                <label for="password">Contraseña</label>
                <input type="password" name="password" autocomplete="off" placeholder="PASSWORD" required>

                <button type="submit" class="btn bg-white">ENTRAR</button>

                <a href="lost-password.php" title="Olvidé mi contraseña" class="link-lost-pwd">Olvidé mi contraseña</a>

            </form>
        </div>

    </section>

<?php include 'includes/footer.php' ?>