<?php include 'includes/header.php' ?>

<?php include 'includes/secondary-navigation.php' ?>

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
		
		<h2 class="title">Carreras</h2>

		<div class="actions">
			<!--Buttons-->
			<a href="#nueva-carrera" class="btn-upload pull-right disabled">
				CARGAR
			</a>
			<a href="#nueva-carrera" class="btn-new pull-right pop-nueva-carrera">
				NUEVO
			</a>
			<a href="#desactivar" class="btn-disable pull-right sep pop-desactivar disabled">
				DESACTIVAR
			</a>
			<a href="#activar" class="btn-active pull-right sep pop-activar disabled">
				ACTIVAR
			</a>
			<!---->
			<form action="#" method="get" class="search-form" data-parsley-validate="">
				
				<button type="submit"></button>
				<input type="text" name="search" required placeholder="Buscar Carreras">

			</form>

		</div>
	</header><!-- /header -->

	<section class="data-list profesores carreras">

		<table cellspacing="50">
			<thead>
				<tr>
					<th>
						Nombre de carrera
					</th>
					<th>
						Cantidad de Ciclos
					</th>
					<th>
						&nbsp;
					</th>
				</tr>
			</thead>
			<tbody>

				<tr class="active" data-id="15" id="15">
					<td class="nombre" >Administracion de Empresas</td>
					<td class="text-center ciclos">
						<a href="#detail" class="title pop-detail">3</a>
					</td>
					<td>
						<a href="#editar-carrera" onclick="set_current_id(15);" class="edit pop-edit-carrera"></a>
						<div class="hidden box-cursos">
							<ul class="cursos" data-ciclo="0">
							</ul>
							<ul class="cursos" data-ciclo="1">
								<li data-id-curso="1">Matematica financiera</li>
								<li data-id-curso="2">Analisis del Mercado</li>
							</ul>
							<ul class="cursos" data-ciclo="2">
								<li data-id-curso="3">Economia</li>
								<li data-id-curso="4">Ecuaciones Difrenciales</li>
							</ul>
							<ul class="cursos" data-ciclo="3">
								<li data-id-curso="5">Mecanica</li>
								<li data-id-curso="6">Quimica</li>
							</ul>
						</div>
					</td>
				</tr>

				<tr class="active" data-id="16" id="16">
					<td class="nombre" >Ingenieria de Sitemas</td>
					<td class="text-center ciclos">
						<a href="#detail" class="title pop-detail">2</a>
					</td>
					<td>
						<a href="#editar-carrera" onclick="set_current_id(16);" class="edit pop-edit-carrera"></a>
						<div class="hidden box-cursos">
							<ul class="cursos" data-ciclo="1">
								<li data-id-curso="1">Matematica financiera</li>
								<li data-id-curso="6">Química</li>
							</ul>
							<ul class="cursos" data-ciclo="2">
								<li data-id-curso="2">Analisis del Mercado</li>
								<li data-id-curso="5">Mecanica</li>
							</ul>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

	</section>

	<section class="hidden boxes main-content">

		<!-- Desactivar -->
		<div id="desactivar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Desactivar Carrera
			</div>
			<div class="body">
				<p>¿Está seguro que desea desactivar la <br> siguiente Carrera?</p>
				<h3 class="title"></h3>
				<p><small>Al desactivar no se mostrará en el aplicativo</small></p>

				

			</div>

			<div class="actions">
				<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
				<a href="javascript:;" onclick="desactivar_curso();" class="btn-confirm bg-green">Aceptar</a>
			</div>
		</div>
		<!-- Activar -->
		<div id="activar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Activar Carrera
			</div>
			<div class="body">
				<p>¿Está seguro que desea activar la <br> siguiente Carrera?</p>
				<h3 class="title"></h3>
				<p><small>Al activar se mostrará en el aplicativo</small></p>

				

			</div>

			<div class="actions">
				<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
				<a href="javascript:;" onclick="activar_curso();" class="btn-confirm bg-green">Aceptar</a>
			</div>
		</div>

		<!-- Nuevo -->
		<div id="nueva-carrera" class="pop-ups profesores carrera data-list admin-new main-content">
			<div>
				<form action="#" method="post" id="form-nueva-carrera" class="form-new container content-form floating-effect" data-parsley-validate="">
					<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
					<div class="heading">
						Nueva Carrera
					</div>
					<div class="body row">
						<div class="box-form">
							<div class="col-xs-12 col-sm-6 text-left">
								<label class="label-floating active">Nombre de carrera</label>
								<br>
								<input type="text" name="carrera" class="carrera" required>
							</div>
							<div class="col-xs-12 col-sm-6 text-center">

								<label class="text-ciclos">Cantidad de ciclos</label>
								<input type="number" min="1" max="13" name="ciclos" id="cantidad_ciclos" value="10" class="ciclos" required>
							</div>		
						</div>
						<div class="box-form">
							<p>Agrege los cursos a cada uno de los ciclos</p>
							<div class="new_carrera ciclo_zero">
								<label > <input type="checkbox" name="ciclo_zero" value="1" class="toggle-button"> Incluir ciclo 0 </label>
							</div>
							<div class="list-ciclo">
								<div class="nav">
									<a href="javascript:;" class="prev"></a> 
										Ciclo <span data-index="1">1</span>
									<a href="javascript:;" class="next"></a>
								</div>
								<h3>Cursos</h3>
								<!--Listado de maximo de 13 ciclos-->
								<?php include('includes/list-ciclos.php') ?>

							</div>
						</div>

					</div>

					<div class="actions">
						<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
						<button type="submit" class="btn-confirm bg-green">Aceptar</button>
					</div>
				</form>
			</div>
		</div>

		<!-- Editar -->
		<div id="editar-carrera" class="pop-ups profesores carrera main-content">
			<form action="#" method="post" id="form-editar-carrera" class="form-new container content-form floating-effect" data-parsley-validate="">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Editar Carrera
				</div>

				<div class="body row">
					<div class="box-form">

						<div class="col-xs-12 col-sm-6 text-left">
							<label class="label-floating active">Nombre de carrera</label>
							<br>
							<input type="text" name="carrera" class="carrera" required>
							<input type="hidden" name="id_carrera" id="id_carrera_edit">
						</div>
						<div class="col-xs-12 col-sm-6 text-center">

							<label class="text-ciclos">Cantidad de ciclos</label>
							<input type="number" min="1" max="13" name="ciclos" id="cantidad_ciclos_edit" class="ciclos" value="5" required>
						</div>

						
					</div>
					<div class="box-form">
						<p>Agrege los cursos a cada uno de los ciclos</p>
						<div class="edit_carrera ciclo_zero">
							<label > <input type="checkbox" name="ciclo_zero" value="1" class="toggle-button"> Incluir ciclo 0 </label>
						</div>
						<div class="list-ciclo">
							<div class="nav">
								<a href="javascript:;" class="prev"></a> 
									Ciclo <span data-index="1">1</span>
								<a href="javascript:;" class="next"></a>
							</div>
							<h3>Cursos</h3>
							<!--Listado de maximo de 13 ciclos, cada ciclo contiene todos los cursos activos.-->
							<?php include('includes/list-ciclos-editar.php') ?>

						</div>
					</div>

				</div>

				<div class="actions">
					<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
					<button type="submit" class="btn-confirm bg-green">Aceptar</button>
				</div>
			</form>
		</div>

		<!--Detail-->
		<div id="detail" class="pop-ups profesores carrera">
			<div class="heading">
				Detalle Carrera
			</div>

			<div class="body">
				<h3>Administración</h3>
				<div class="nav">
					<a href="javascript:;" class="prev"></a> 
						Ciclo <span data-index="0">1</span>
					<a href="javascript:;" class="next"></a>
				</div>
				<h3>Cursos</h3>
				<div class="box-show">
					
				</div>
			</div>
		</div>

	</section>
</section>

<?php $script = "carreras.js?v=".rand(0,100); ?>
<?php include 'includes/footer.php' ?>