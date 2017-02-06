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
				<div class="content-form">
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
						<div class="col-md-8">
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
									<img src="img/ic_calendar.png" class="ic-calendar">
									<br>
									<input type="text" name="nacimiento" required class="datetime">
								</div>
								<div class="col-md-6">
									<label for="type" class="label-floating">Sexo</label>
									<img src="img/ic-down.png" class="ic-down">
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
									<img src="img/ic-down.png" class="ic-down">
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
									<img src="img/ic-down.png" class="ic-down">
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
									<img src="img/ic-down.png" class="ic-down">
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
				</div>
				<h4>Información Académica</h4>
				<div class="content-form">
					<div class="new-academic-information"></div>
					<div class="add-information">
						<img src="img/ic-add.png">
						<span class="text-uppercase">Agregar carrera</span>
					</div>
				</div>
				<h4>Información Laboral</h4>
				<div class="content-form">
					<div class="new-laboral-information"></div>
					<div class="add-information">
						<img src="img/ic-add.png">
						<span class="text-uppercase">Agregar información adicional</span>
					</div>
				</div>
				<div class="actions text-center">
					<a onClick="history.go(-1);return true" class="btn-cancel text-uppercase">Cancelar</a>
					<button type="submit" class="btn-save bg-green">Guardar</button>
				</div>
				<h4>Datos del sistema</h4>
				<div class="content-form">
					<div class="row">
						<div class="col-md-4">
							<label for="carrera" class="label-floating">Validado</label>
							<img src="img/ic-down.png" class="ic-down">
							<br>
							<select name="carrera" class="select-type" required>
								<option value="" selected=""></option>
								<option value="1">Si</option>
								<option value="2">No</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="ciclo" class="label-floating">Estado</label>
							<img src="img/ic-down.png" class="ic-down">
							<br>
							<select name="ciclo" class="select-type" required>
								<option value="" selected=""></option>
								<option value="1">Activo</option>
								<option value="2">Desactivado</option>
							</select>
						</div>
					</div>
					<h5 class="subtitle-blue">Puntaje ganado por acciones</h5>
					<div class="row scores">
						<div class="col-md-6">
							<label class="clearfix">
								<span class="col-md-9">Calificar Contenido</span>
								<input type="number" name="puntaje 1">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Calificaron su contenido</span>
								<input type="number" name="puntaje 2">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Calificar Profesor</span>
								<input type="number" name="puntaje 3">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Comentar Profesor</span>
								<input type="number" name="puntaje 4">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Publicar Contenido</span>
								<input type="number" name="puntaje 5">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Juego de Preguntas</span>
								<input type="number" name="puntaje 7">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Validar Cuenta</span>
								<input type="number" name="puntaje 8">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Spam Comentario</span>
								<input type="number" name="puntaje 9">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Enviaron su contenido por correo</span>
								<input type="number" name="puntaje 10">
							</label>
							<label class="row total-score">
								<span class="col-md-9 subtitle-blue">Puntaje Total</span>
								<input type="number" name="total" value="15000">
							</label>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

</section>
<?php $script = "file-preview.js"; ?>
<?php $script3 = "administradores.js"; ?>
<script id="academic-template"  type="text/template">
	<div class="border-gray user-information academic-info">
		<div class="row">
			<div class="col-md-4">
				<label for="carrera" class="label-floating">Carrera</label>
				<img src="img/ic-down.png" class="ic-down">
				<br>
				<select name="carrera" class="select-type" required>
					<option value="" selected=""></option>
					<option value="1">Administración</option>
					<option value="2">Sistemas</option>
					<option value="3">Comunicación</option>
				</select>
			</div>
			<div class="col-md-4">
				<label for="ciclo" class="label-floating">Ciclo</label>
				<img src="img/ic-down.png" class="ic-down">
				<br>
				<select name="ciclo" class="select-type" required>
					<option value="" selected=""></option>
					<option value="1">Ciclo I</option>
					<option value="2">Ciclo II</option>
					<option value="3">Ciclo III</option>
				</select>
			</div>
			<div class="col-md-4">
				<label for="posicion" class="label-floating">Posición Académica</label>
				<img src="img/ic-down.png" class="ic-down">
				<br>
				<select name="posicion" class="select-type" required>
					<option value="" selected=""></option>
					<option value="1">Tercio Superior</option>
					<option value="2">Quinto Superior</option>
					<option value="3">Decimo Superior (?)</option>
				</select>
			</div>
			<span class="btn-delete"><img src="img/ic-delete.png"></span>
		</div>
	</div>
</script>
<script id="laboral-template" type="text/template">
	<div class="border-gray user-information work-info">
		<div class="row">
			<div class="col-md-4">
				<label for="empresa" class="label-floating">Empresa</label>
				<br>
				<input type="text" name="empresa" required>
			</div>
			<div class="col-md-4">
				<label for="puesto" class="label-floating">Puesto</label>
				<br>
				<input type="text" name="puesto" required>
			</div>
			<div class="col-md-2">
				<label for="inicio" class="label-floating">Fecha de Inicio</label>
				<img src="img/ic_calendar.png" class="ic-calendar">
				<br>
				<input type="text" name="inicio" required class="datetime">
			</div>
			<div class="col-md-2">
				<label for="fin" class="label-floating">Fecha de Fin</label>
				<img src="img/ic_calendar.png" class="ic-calendar">
				<br>
				<input type="text" name="fin" required class="datetime end-date">
			</div>
			<div class="col-md-2 col-lg-offset-10 btn-restrict-date">
				<label for="actual-date">
					<input type="checkbox" name="actual-date" class="toggle-button">
					<span class="text-uppercase">Actualidad</span>
				</label>
			</div>
			<span class="btn-delete"><img src="img/ic-delete.png"></span>
		</div>
	</div>
</script>
<?php include 'includes/footer.php' ?>
