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
						<label for="movil" class="label-floating">Nombres</label>
						<br>
						<input type="text" name="movil">
					</div>
					<div class="col-md-4">
						<label for="status" class="label-floating">Estado</label>
						<br>
						<select name="status">
							<option>Estado 0</option>
							<option>Estado 1</option>
							<option>Estado 2</option>
							<option>Estado 3</option>
							<option>Estado 4</option>
						</select>
					</div>
				</div>
			</form>
		</div>
	</section>

</section>

<?php $script = "profesores.js"; ?>

<?php include 'includes/footer.php' ?>