<?php $style = "tokeninput/token-input.css"; ?>
<?php $style2 = "nice-select.css" ?>

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
							<input type="text" name="name" required>
						</div>
						<div class="col-md-4">
							<label for="lastname" class="label-floating">Apellidos</label>
							<br>
							<input type="text" name="lastname" required>
						</div>
						<div class="col-md-4">
							<label for="email" class="label-floating">Correo</label>
							<br>
							<input type="email" name="email" required>
						</div>
						<div class="col-md-4">
							<label for="movil" class="label-floating">Celular</label>
							<br>
							<input type="number" name="movil" required>
						</div>
						<div class="col-md-4">
							<label for="status" class="label-floating select-label">Estado</label>
							<br>
							<select name="status" class="select-type" required>
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
			        <input type="text" id="demo-input-local" name="blah" />
			        <script type="text/javascript">
			        $(document).ready(function() {
			            $("#demo-input-local").tokenInput([
			                {id: 1, name: "Universidad del Pacifico"},
			                {id: 2, name: "universidad Nacional Ingenieria"},
			                {id: 3, name: "Universidad Nacional Mayor de San Marcos"},
			                {id: 4, name: "Universidad Nacional del Callao"},
			                {id: 5, name: "Pontificia Universidad Catolica del Peru"},
			                {id: 6, name: "Universidad Ricardo Palma"},
			                {id: 7, name: "Universidad Científica del Sur"},
			                {id: 8, name: "Universidad Federico Villareal"},
			            ]);
			        });
			        </script>
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
				<div class="actions text-center">
					<a onClick="history.go(-1);return true" class="btn-cancel text-uppercase">Cancelar</a>
					<!-- <button type="submit" class="btn-save bg-green">Guardar</button> -->
				</div>
			</form>
		</div>
	</section>

</section>
<?php $script1 = "vendor/jquery.nice-select.min.js"; ?>
<?php $script = "profesores.js"; ?>
<?php $script2 = "vendor/tokeninput/jquery.tokeninput.js"; ?>
<?php $script3 = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>
