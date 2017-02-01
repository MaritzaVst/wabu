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
		
		<h2 class="title">Niveles</h2>

	</header><!-- /header -->

	<section class="data-list admin-new">
		<div>
			<div class="head">
				<a href="#" class="btn-return"></a>
				<h3 class="title-blue text-center">Nuevo Nivel</h3>
			</div>
			<form class="new-level">
				<div class="row">
					<div class="img-preview col-md-3">
						<input type="file" id="files" />
						<div class="img-container">
							<img id="image" class="absolute-center" />
						</div>
						<div class="upload-btn">
							<img src="img/ic-camera.png">
							<span>Cargar imagen</span>
						</div>
					</div>
					<div class="content-form col-md-9">
						<div class="row">
							<div class="col-md-6">
								<label for="level" class="label-floating">Nivel</label>
								<br>
								<input type="number" name="level" required>
							</div>
							<div class="col-md-6">
								<label for="type" class="label-floating">Tipo</label>
								<br>
								<select name="type" class="select-type" required>
									<option value="" selected=""></option>
									<option value="1">Porcentaje</option>
									<option value="2">Rango</option>
								</select>
							</div>
							<div class="col-md-3 input-type-percentage hidden">
								<label for="percentage" class="label-floating">Porcentaje</label>
								<br>
								<input type="number" name="percentage">
							</div>
							<div class="col-md-6 input-type-rango hidden">
								<label for="rango1" class="label-floating">Desde</label>
								<br>
								<input type="number" name="rango1">
							</div>
							<div class="col-md-6 input-type-rango hidden">
								<label for="rango2" class="label-floating">Hasta</label>
								<br>
								<input type="number" name="rango2">
							</div>
							<div class="col-md-12 textarea-container">
								<label class="btn-block text-blue">Descripción</label>
								<textarea class="textarea"></textarea>
							</div>
						</div>
					</div>
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
<?php $script2 = "new-level.js"; ?>
<?php $script3 = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>
