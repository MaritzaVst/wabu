<?php include 'includes/header.php' ?>

    <section class="login">
        
        <div class="box">
            <!--Login form-->
            <form action="#" method="post" data-parsley-validate="">
                
                <img src="img/logo.png" alt="Logo Wabu" class="logo">

                <label for="password1">Nueva contraseña</label>
                <input type="password" id="password1" name="password1" value="123456"  required>

                <label for="password2">Repita la nueva contraseña</label>
                <input type="password" name="password2" id="password2" value="123452" data-parsley-equalto="#password1" required>

                <button type="submit" class="btn bg-white">ENTRAR</button>

                <a href="login.php" title="Olvidé mi contraseña" class="link-lost-pwd">Cancelar</a>

            </form>
        </div>

    </section>

<?php include 'includes/footer.php' ?>