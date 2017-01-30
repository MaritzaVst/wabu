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
				<div class="personal-information">
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
								<option value="estado 1">Estado 1</option>
								<option value="estado 2">Estado 2</option>
								<option value="estado 3">Estado 3</option>
								<option value="estado 4">Estado 4</option>
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

</section>

<?php $script = "profesores.js"; ?>
<?php $script2 = "administradores.js"; ?>

<?php include 'includes/footer.php' ?>