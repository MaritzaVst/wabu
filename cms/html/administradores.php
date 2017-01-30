<?php $style1 = "magicsuggest-min.css"; ?>
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
		
		<h2 class="title">Profesores</h2>

	</header><!-- /header -->

	<section class="data-list admin-new">
		<div>
			<div class="head">
				<a href="#" class="btn-return"></a>
				<h3 class="title-blue text-center">Nuevo Administrador</h3>
			</div>
			<form>
				<div class="content-form personal-information">
					<h4>Información Personal</h4>
					<div class="row">
						<div class="col-md-4">
							<label for="name" class="label-floating">Nombres</label>
							<br>
							<input type="text" name="name">
						</div>
						<div class="col-md-4">
							<label for="lastname">Apellidos</label>
							<br>
							<input type="text" name="lastname">
						</div>
						<div class="col-md-4">
							<label for="email" class="label-floating">Correo</label>
							<br>
							<input type="email" name="email">
						</div>
						<div class="col-md-4">
							<label for="movil" class="label-floating">Celular</label>
							<br>
							<input type="text" name="movil">
						</div>
						<div class="col-md-4">
							<label for="status" class="label-floating select-label">Estado</label>
							<img src="img/ic-down.png">
							<br>
							<select name="status">
								<option value="" selected=""></option>
								<option value="activo">Activo</option>
								<option value="inactivo">Inactivo</option>
							</select>
						</div>
					</div>
				</div>
				<div class="content-form universidad">
					<h4>Universidad</h4>
					<div>
						<input id="magicsuggest" title="type &quot;a&quot;">
					</div>
				</div>
				<div class="content-form permisos">
					<h4>Permisos</h4>
					<div class="row">
						<label class="col-md-3">
						  <input type="checkbox" value="1"> Dashboard
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="2"> Preguntas
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="3"> Administradores
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="4"> Cursos
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="5"> Términos y condiciones
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="6"> Niveles
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value=7""> Spam
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="8"> Usuarios
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="9"> Categorías de Calificación
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="10"> Premios
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="11"> Objetivos
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="12"> Universidades
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value=13""> Cupones
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="14"> Mensajes
						</label>
						<label class="col-md-3">
						  <input type="checkbox" value="15"> Carreras
						</label>
					</div>
				</div>
			</form>
		</div>
	</section>

</section>

<?php $script = "profesores.js"; ?>
<?php $script2 = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>
