<?php $style = "" ?>
<?php include 'includes/header.php' ?>

<?php include 'includes/main-navigation.php' ?>

<section class="main-content">

	<header>
		<div class="logout pull-right">
			<a href="login.php" title="">
				<img src="img/ic-logout.png" alt="Logout">
			</a>
		</div>
		<div class="pull-right box-info-user">
			<h3>Eduardo Salas <br> <small>Administrador</small></h3>
		</div>
		
		<h2 class="title">Usuarios</h2>

	</header><!-- /header -->

	<section class="data-list admin-new">
		<div>
			<div class="head">
				<a href="#" class="btn-return"></a>
				<h3 class="title-blue text-center">Registrar usuario</h3>
			</div>
			<form class="new-level user-registration">
				<h4>Información Personal</h4>
				<div class="row">
					<div class="img-preview col-md-4">
						<input type="file" id="files" />
						<div class="img-container">
							<img id="image" class="absolute-center" src="img/default.png"/>
						</div>
						<div class="upload-btn">
							<img src="img/ic-camera.png">
							<span>Cargar imagen</span>
						</div>
					</div>
					<div class="content-form col-md-8">
						<div class="row">
							<div class="col-md-6">
								<label for="name" class="label-floating">Nombres</label>
								<br>
								<input type="text" name="name" required>
							</div>
							<div class="col-md-6">
								<label for="lastname" class="label-floating">Apellidos</label>
								<br>
								<input type="text" name="lastname" required>
							</div>
							<div class="col-md-6">
								<label for="nacimiento" class="label-floating">Fecha de Nacimieto</label>
								<br>
								<input type="text" name="nacimiento" required>
							</div>
							<div class="col-md-6">
								<label for="type" class="label-floating">Sexo</label>
								<br>
								<select name="type" class="select-type" required>
									<option value="" selected=""></option>
									<option value="1">Femenino</option>
									<option value="2">Masculino</option>
									<option value="3">Otros</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="email" class="label-floating">Correo personal</label>
								<br>
								<input type="email" name="email" required>
							</div>
							<div class="col-md-6">
								<label for="email universitario" class="label-floating">Correo de la Universidad</label>
								<br>
								<input type="email" name="email universitario" required>
							</div>
							<div class="col-md-6">
								<label for="departamento" class="label-floating">Departamento</label>
								<br>
								<select name="departamento" class="select-type" required>
									<option value="" selected=""></option>
									<option value="1">Lima</option>
									<option value="2">Ayacucho</option>
									<option value="3">Loreto</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="provincia" class="label-floating">Provincia</label>
								<br>
								<select name="provincia" class="select-type" required>
									<option value="" selected=""></option>
									<option value="1">Lima</option>
									<option value="2">Ayacucho</option>
									<option value="3">Loreto</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="distrito" class="label-floating">Distrito</label>
								<br>
								<select name="provincia" class="select-type" required>
									<option value="" selected=""></option>
									<option value="1">Lima</option>
									<option value="2">Ayacucho</option>
									<option value="3">Loreto</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="direccion" class="label-floating">Dirección</label>
								<br>
								<input type="text" name="direccion" required>
							</div>
						</div>
					</div>
				</div>
				<h4>Información Académica</h4>
				<div class="content-form">
					<div>
						<label for="carrera" class="label-floating">Distrito</label>
						<select name="carrera" class="select-type" required>
							<option value="" selected=""></option>
							<option value="1">Administración</option>
							<option value="2">Sistemas</option>
							<option value="3">Comunicación</option>
						</select>
						<label for="ciclo" class="label-floating">Distrito</label>
						<select name="ciclo" class="select-type" required>
							<option value="" selected=""></option>
							<option value="1">Administración</option>
							<option value="2">Sistemas</option>
							<option value="3">Comunicación</option>
						</select>
						<label for="posicion" class="label-floating">Distrito</label>
						<select name="posicion" class="select-type" required>
							<option value="" selected=""></option>
							<option value="1">Administración</option>
							<option value="2">Sistemas</option>
							<option value="3">Comunicación</option>
						</select>
					</div>
					<span class="btn-new"></span>
				</div>
				<h4>Información Laboral</h4>
				<div class="content-form">
						
				</div>
				<div class="actions text-center">
					<a onClick="history.go(-1);return true" class="btn-cancel text-uppercase">Cancelar</a>
					<button type="submit" class="btn-save bg-green">Guardar</button>
				</div>
			</form>
		</div>
	</section>

</section>
<?php $script = "file-preview.js"; ?>
<?php $script3 = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>
