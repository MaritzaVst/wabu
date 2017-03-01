<?php $style = "nice-select.css" ?>
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
		
		<h2 class="title">Cupones</h2>

	</header><!-- /header -->

	<section class="data-list admin-new">
		<div>
			<div class="head">
				<a href="#" class="btn-return"></a>
				<h3 class="title-blue text-center">Nuevo cupón</h3>
			</div>
			<form class="new-level new-coupon">
				<div class="content-form">
					<div class="row">
						<div class="col-md-4">
							<label for="name" class="label-floating">Nombre</label>
							<br>
							<input type="text" name="name" required>
						</div>
						<div class="col-md-4">
							<label for="ending-date" class="label-floating">Fecha de Fin</label>
							<img src="img/ic_calendar.png" class="ic-calendar">
							<br>
							<input type="text" name="ending-date" required class="datetime">
						</div>

						<div class="col-md-4">
							<label for="position" class="label-floating">Posicición</label>
							<br>
							<select name="position" class="select-type" required>
								<option value="" selected=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							<div class="btn-position text-center">
								<a href="" class="text-uppercase">Detalle de posición</a>
							</div>
						</div>	
					</div>
					<div class="row winner upload-img-block">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Imagen pequeña</h3>
							<div class="img-preview small-img">
								<input type="file" class="files" />
								<div class="img-container">
									<img class="image absolute-center" src=""/>
								</div>
								<div class="upload-btn">
									<img src="img/ic-camera.png">
									<span>Cargar foto</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<h3 class="subtitle-blue">Descripción</h3>
							<textarea></textarea>
							<br>
							<span class="limit">Máximo 70 caracteres</span>
						</div>
					</div>
					<div class="row description upload-img-block">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Imagen Grande</h3>
							<div class="img-preview big-img">
								<input type="file" class="files" />
								<div class="img-container">
									<img class="image absolute-center" src=""/>
								</div>
								<div class="upload-btn">
									<img src="img/ic-camera.png">
									<span>Cargar foto</span>
								</div>
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
<?php $script2 = "vendor/jquery.nice-select.min.js"; ?>
<?php $script3 = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>
