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
		
		<h2 class="title">Categoria de calificación</h2>

		<div class="actions">
			<!--Buttons-->
			<!--<a href="#nueva-categoria" class="btn-new pull-right pop-nueva-categoria">
				NUEVO
			</a>
			<a href="#desactivar" class="btn-disable pull-right sep pop-desactivar disabled">
				DESACTIVAR
			</a>
			<a href="#activar" class="btn-active pull-right sep pop-activar disabled">
				ACTIVAR
			</a>-->
			<!---->
			<form action="#" method="get" class="search-form" data-parsley-validate="">
				
				<button type="submit"></button>
				<input type="text" name="search" required placeholder="Buscar categoria">

			</form>

		</div>
	</header><!-- /header -->

	<section class="data-list">

		<table cellspacing="50">
			<thead>
				<tr>
					<th>
						
					</th>
					<th>
						Nombre
					</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>

				<tr class="active" data-id="15" id="15">
					<td colspan="2" class="pregunta">
						<a href="#" class="title">¿Que tan alto corrige?</a>
					</td>
					<td>
						<span class="nombre hidden">Que tan alto corrige</span>
						<span class="descripcion hidden">Otrosalumnos que han visto clasesecon este profesor pueden contarte que tan alto corrige</span>
						<a href="#edit-categoria" onclick="set_current_id(15);" class="edit pop-edit-categoria"></a>
					</td>

				</tr>

				<tr class="active" data-id="16" id="16">
					<td colspan="2" class="pregunta">
						<a href="#" class="title">¿Que tanto aprendiste?</a>
					</td>
					<td>
						<span class="nombre hidden">Que tan aprendiste</span>
						<span class="descripcion hidden">Otrosalumnos que han visto clasesecon este profesor pueden contarte que tan alto corrige</span>
						<a href="#edit-categoria" onclick="set_current_id(16);" class="edit pop-edit-categoria"></a>
					</td>

				</tr>


			</tbody>
		</table>

	</section>

	<!--Popups: Desactivar, Nuevo -->
	<section class="hidden boxes">
		<!-- Editar -->
		<div id="edit-categoria" class="pop-ups main-content">
			<form action="#" method="post" id="form-editar-categoria" class="content-form floating-effect" data-parsley-validate="">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Editar categoria
				</div>
				<div class="body one-col row">
					<div class="box-form col-md-12">
						<label for="categoria" class="label-floating active">Nombre de la categoria</label>
						</br>
						<input type="text" name="categoria" value="categoria" id="nombre_categoria" required>
						<input type="hidden" name="id_categoria" id="id_categoria" />
					</div>

					<div class="box-form col-md-12">
						<label for="pregunta" class="label-floating active">Pregunta de la categoria</label>
						<br>
						<input type="text" name="pregunta"  id="pregunta" required>
					</div>

					<div class="box-form col-md-12">
						<label for="descripcion" class="label-floating active">Descripción</label>
						<br>
						<textarea name="descripcion" id="descripcion" required></textarea>
					</div>
				</div>
				<div class="actions">
					<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
					<button type="submit" class="btn-confirm bg-green">Aceptar</button>
				</div>
			</form>
		</div>
	</section>

</section>

<?php $script = "categoria.js"; ?>

<?php include 'includes/footer.php' ?>