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
				<h3 class="title-blue text-center">Detalle de Premio</h3>
			</div>
			<form class="new-level new-award modify-user">
				<div class="content-form">
					<div class="row">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Nombres</h3>
							<p>Sony VAIO</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Tipo</h3>
							<p>Diario</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Posición</h3>
							<p>2</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Fecha de Inicio</h3>
							<p>01/01/2017</p>
						</div>
						<div class="col-md-4">
							<h3 class="subtitle-blue">Fecha de Fin</h3>
							<p>02/01/2017</p>
						</div>
						<div class="col-md-4">
							<div class="btn-position text-center">
								<a href="" class="text-uppercase">Detalle de posición</a>
							</div>
						</div>
					</div>
					<div class="row puestos">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Imagen pequeña</h3>
							<div class="img-preview small-img">
								<input type="file" class="files" />
								<div class="img-container">
									<img class="image absolute-center" src="img/img-premio-chico.png"/>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<h3 class="subtitle-blue">Puestos</h3>
							<p>Del 1 al 3</p>
						</div>
					</div>
					<div class="row description upload-img-block">
						<div class="col-md-4">
							<h3 class="subtitle-blue">Imagen Grande</h3>
							<div class="img-preview big-img">
								<input type="file" class="files" />
								<div class="img-container">
									<img class="image absolute-center" src="img/img-premio-grande.png">
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<h3 class="subtitle-blue">Descripción</h3>
							<p>Sony laptops are among the most well known laptops on today’s market. Sony is a name that over time has established itself as creating a solid product with a stellar reputation. In addition to all the good press that Sony has, Sony is known for making the best ‘small’ laptops.</p>
							<br>
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
							</div>
						</div>
						<div class="col-md-8">
							<h3 class="subtitle-blue">Instrucciones para el ganador</h3>
							<p>Sony laptops are among the most well known laptops on today’s market. Sony is a name that over time has established itself as creating a solid product with a stellar reputation. In addition to all the good press that Sony has, Sony is known for making the best ‘small’ laptops.</p>
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
