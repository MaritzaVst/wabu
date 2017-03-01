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
		
		<h2 class="title">Premios</h2>

	</header><!-- /header -->

	<section class="data-list admin-new">
		<div>
			<div class="head">
				<a href="#" class="btn-return"></a>
				<h3 class="title-blue text-center">Modificar Premio</h3>
			</div>
			<form class="new-level new-award">
				<div class="content-form">
					<div class="row">
						<div class="col-md-4">
							<label for="name" class="label-floating active">Nombre</label>
							<br>
							<input type="text" name="name" required value="Sony VAIO">
						</div>
						<div class="col-md-4">
							<label for="type" class="label-floating active">Tipo</label>
							<img src="img/ic-down.png" class="ic-down">
							<br>
							<select name="type" class="select-type" required>
								<option value=""></option>
								<option value="1" selected="">Diario</option>
								<option value="2">Semanal</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="position" class="label-floating active">Posicición</label>
							<img src="img/ic-down.png" class="ic-down">
							<br>
							<select name="position" class="select-type" required>
								<option value=""></option>
								<option value="1">1</option>
								<option value="2" selected="">2</option>
								<option value="3">3</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="start-date" class="label-floating active">Fecha de Inicio</label>
							<img src="img/ic_calendar.png" class="ic-calendar">
							<br>
							<input type="text" name="start-date" required value="01/01/2017">
						</div>
						<div class="col-md-4">
							<label for="ending-date" class="label-floating active">Fecha de Fin</label>
							<img src="img/ic_calendar.png" class="ic-calendar">
							<br>
							<input type="text" name="ending-date" required value="02/01/2017">
						</div>
						<div class="col-md-4">
							<div class="btn-position text-center">
								<a href="" class="text-uppercase">Detalle de posición</a>
							</div>
						</div>
					</div>
					<div class="row puestos upload-img-block">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Imagen pequeña</h3>
							<div class="img-preview small-img">
								<input type="file" class="files" />
								<div class="img-container">
									<img class="image absolute-center" src="img/img-premio-chico.png"/>
								</div>
								<div class="upload-btn">
									<img src="img/ic-camera.png">
									<span>Cargar foto</span>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<h3 class="subtitle-blue">Puestos</h3>
							<p>Ingrese el/los puestos ganadores (del 1 al 100)</p>
							<label>
								<span>Del</span>
								<input type="text" name="" value="1" class="text-center">
							</label>
							<label>
								<span>al</span>
								<input type="text" name="" value="3" class="text-center">
							</label>
						</div>
					</div>
					<div class="row description upload-img-block">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Imagen Grande</h3>
							<div class="img-preview big-img">
								<input type="file" class="files" />
								<div class="img-container">
									<img class="image absolute-center" src="img/img-premio-grande.png"/>
								</div>
								<div class="upload-btn">
									<img src="img/ic-camera.png">
									<span>Cargar foto</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<h3 class="subtitle-blue">Descripción</h3>
							<textarea>Sony laptops are among the most well known laptops on today’s market. Sony is a name that over time has established itself as creating a solid product with a stellar reputation. In addition to all the good press that Sony has, Sony is known for making the</textarea>
							<br>
							<span class="limit">Máximo 400 caracteres</span>
						</div>
					</div>
					<div class="row winner upload-img-block">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Imagen para el ganador</h3>
							<div class="img-preview small-img">
								<input type="file" class="files" />
								<div class="img-container">
									<img class="image absolute-center" src="img/img-premio-chico.png"/>
								</div>
								<div class="upload-btn">
									<img src="img/ic-camera.png">
									<span>Cargar foto</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<h3 class="subtitle-blue">Instrucciones para el ganador</h3>
							<textarea>Sony laptops are among the most well known laptops on today’s market. Sony is a name that over time has established itself as creating a solid product with a stellar reputation. In addition to all the good press that Sony has, Sony is known for..</textarea>
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
<?php $script3 = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>
