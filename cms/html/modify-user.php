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
				<h3 class="title-blue text-center">Modificar usuario</h3>
			</div>
			<form class="new-level user-registration modify-user">
				<h4>Información Personal</h4>
				<div class="content-form">
					<div class="row">
						<div class="img-preview col-md-4">
							<input type="file" id="files" />
							<div class="img-container">
								<img id="image" class="absolute-center" src="img/team.png"/>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-6">
									<h3 class="subtitle-blue">Nombres</h3>
									<p>Enrique Andrés</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Apellidos</h3>
									<p>Saravia Valdivia</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Fecha de Nacimiento</h3>
									<p>20/04/1999</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Sexo</h3>
									<p>Masculino</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Correo Personal</h3>
									<p>esaravia@gmail.com</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Correo de la Universidad</h3>
									<p>esaravia@up.edu.pe</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Departamento</h3>
									<p>Lima</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Provincia</h3>
									<p>Lima</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Distrito</h3>
									<p>Santiago de Surco</p>
								</div>
								<div class="col-md-6">
									<h3 class="subtitle-blue">Dirección</h3>
									<p>Av. Encalada 1257</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h4>Información Académica</h4>
				<div class="content-form">
					<div class="row">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Carrera</h3>
							<p>Administracións</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Ciclo</h3>
							<p>Ciclo II</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Posición académica</h3>
							<p>Tercio superior</p>
						</div>
					</div>
				</div>
				<h4>Información Laboral</h4>
				<div class="content-form">
					<div class="row">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Empresa</h3>
							<p>Cencosud</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Puesto</h3>
							<p>Practicante</p>
						</div>
						<div class="col-md-2">
							<h3 class="subtitle-blue">Fecha de Inicio</h3>
							<p>11/04/15</p>
						</div>
						<div class="col-md-2">
							<h3 class="subtitle-blue">Fecha de Fin</h3>
							<p>11/05/16</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Empresa</h3>
							<p>Cencosud</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Puesto</h3>
							<p>Practicante</p>
						</div>
						<div class="col-md-2">
							<h3 class="subtitle-blue">Fecha de Inicio</h3>
							<p>11/04/15</p>
						</div>
						<div class="col-md-2">
							<h3 class="subtitle-blue">Fecha de Fin</h3>
							<p>11/05/16</p>
						</div>
					</div>
				</div>
				<div class="actions text-center">
					<a href="#" class="btn-cancel text-uppercase">Cancelar</a>
					<button type="submit" class="btn-save bg-green">Guardar</button>
				</div>
				<h4>Datos del sistema</h4>
				<div class="content-form">
					<div class="row">
						<div class="col-md-4">
							<label for="carrera" class="label-floating active">Validado</label>
							<img src="img/ic-down.png" class="ic-down">
							<br>
							<select name="carrera" class="select-type" required>
								<option selected value="1">Si</option>
								<option value="2">No</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="ciclo" class="label-floating active">Estado</label>
							<img src="img/ic-down.png" class="ic-down">
							<br>
							<select name="ciclo" class="select-type" required>
								<option selected value="1">Activo</option>
								<option value="2">Desactivado</option>
							</select>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Nivel</h3>
							<p>2</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Nº Contenidos subidos</h3>
							<p>15</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Nº Likes dados</h3>
							<p>62</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Nº Amigos</h3>
							<p>3</p>
						</div>
					</div>
					<h5 class="subtitle-blue">Puntaje ganado por acciones</h5>
					<div class="row scores">
						<div class="col-md-6">
							<label class="clearfix">
								<span class="col-md-9">Calificar Contenido</span>
								<input type="number" value="12678" name="puntaje 1">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Calificaron su contenido</span>
								<input type="number" value="12678" name="puntaje 2">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Calificar Profesor</span>
								<input type="number" value="12678" name="puntaje 3">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Comentar Profesor</span>
								<input type="number" value="12678" name="puntaje 4">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Publicar Contenido</span>
								<input type="number" value="12678" name="puntaje 5">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Juego de Preguntas</span>
								<input type="number" value="12678" name="puntaje 7">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Validar Cuenta</span>
								<input type="number" value="12678" name="puntaje 8">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Spam Comentario</span>
								<input type="number" value="12678" name="puntaje 9">
							</label>
							<label class="clearfix">
								<span class="col-md-9">Enviaron su contenido por correo</span>
								<input type="number" value="12678" name="puntaje 10">
							</label>
							<label class="row total-score">
								<span class="col-md-9 subtitle-blue">Puntaje Total</span>
								<input type="number" name="total" value="579327">
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
<?php include 'includes/footer.php' ?>
