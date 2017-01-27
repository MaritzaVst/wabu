<?php include 'includes/header.php' ?>

    <section class="login lost-pwd">
        
        <div class="box">
            <!--Login form-->
            <form action="send-lost-password.php" method="post" data-parsley-validate="">
                
                <img src="img/logo.png" alt="Logo Wabu" class="logo">
                <p>
                    Ingrese su correo para continuar
                </p>
                <label for="email">Correo</label>
                <input type="email" id="email" name="email" autocomplete="off"  value="fernando.rengifo@gmail.com" required>

                <button type="submit" class="btn bg-white">ENVIAR</button>

                <a href="login.php" title="Olvidé mi contraseña" class="link-lost-pwd">Cancelar</a>

            </form>
        </div>

    </section>

<?php include 'includes/footer.php' ?>