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
		
		<h2 class="title">Universidades</h2>

		<div class="actions">
			<!--Buttons-->
			<a href="#nueva-universidad" class="btn-new pull-right pop-nueva-universidad">
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
				<input type="text" name="search" required placeholder="Buscar universidad">

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
						Nombre completo
					</th>
					<th>
						País
					</th>
					<th>
						Carreras
					</th>
					<th>
						Dominio
					</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>

				<tr class="active" data-id="15" id="15">
					<td colspan="2" class="nombre">
						<a href="#" class="title">Universidad Peruana de Ciencias Aplicadas </a>
					</td>
					<td class="pais" data-codigo="PE">
						Perú
					</td>
					<td class="carreras">
						67
					</td>
					<td class="dominio">
						@up.edu.pe
					</td>
					<td>
						<a href="#edit-universidad" onclick="set_current_id(15);" class="edit pop-edit-universidad"></a>
						<a href="profesores.php" class="view"></a>
					</td>

				</tr>

				<tr class="active" data-id="16" id="16">
					
					<td colspan="2" class="nombre">
						<a href="#" class="title">Universidad de Lima</a>
					</td>
					<td class="pais" data-codigo="CO">
						Colombia
					</td>
					<td class="carreras">
						130
					</td>
					<td class="dominio">
						@ulima.edu.pe
					</td>
					<td>
						<a href="#edit-universidad" onclick="set_current_id(15);" class="edit pop-edit-universidad"></a>
						<a href="profesores.php" class="view"></a>
					</td>
				</tr>

			</tbody>
		</table>

	</section>

	<!--Popups: Desactivar, Nuevo -->
	<section class="hidden boxes">
		<!-- Desactivar -->
		<div id="desactivar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Desactivar Universidad
			</div>
			<div class="body">
				<p>¿Está seguro que desea desactivar a <br>la siguiente Universidad?</p>
				<h3 class="title"></h3>
				<p><small>Al desactivar no se mostrará en el aplicativo</small></p>

				

			</div>

			<div class="actions">
				<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
				<a href="javascript:;" onclick="desactivar_universidad();" class="btn-confirm bg-green">Aceptar</a>
			</div>
		</div>
		<!-- Activar -->
		<div id="activar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Activar Universidad
			</div>
			<div class="body">
				<p>¿Está seguro que desea activar a <br>la siguiente Universidad?</p>
				<h3 class="title"></h3>
				<p><small>Al activar se mostrará en el aplicativo</small></p>

				

			</div>

			<div class="actions">
				<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
				<a href="javascript:;" onclick="activar_universidad();" class="btn-confirm bg-green">Aceptar</a>
			</div>
		</div>

		<!-- Nuevo -->
		<div id="nueva-universidad" class="pop-ups main-content">
			<form action="#" method="post" id="form-nueva-universidad" class="content-form floating-effect" data-parsley-validate="">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Nueva Universidad
				</div>
				<div class="body one-col row">
					<div class="box-form col-md-12">
						<label for="universidad" class="label-floating">Nombre de la Universidad</label>
						<br>
						<input type="text" name="codigo" class="codigo" required>						
					</div>

					<div class="box-form col-md-12">
						<label for="pais" class="label-floating">Pais</label>
						<img src="img/ic-down.png" class="ic-down">
						<br>
						<select name="pais" id="pais" required>
							<option value="" selected=""></option>
							<option value="PE">Perú</option>
							<option value="BR">Brasil</option>
							<option value="CO">Colombia</option>
							<option value="EC">Ecuador</option>
						</select>		
					</div>

					<div class="box-form col-md-12">
						<label for="dominio" class="label-floating">Dominio del correo</label>
						<br>
						<input type="text" name="dominio"  id="dominio" required>						
					</div>
				</div>

				<div class="actions">
					<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
					<button type="submit" class="btn-confirm bg-green">Aceptar</button>
				</div>
			</form>
		</div>

		<!-- Editar -->
		<div id="edit-universidad" class="pop-ups main-content">
			<form action="#" method="post" id="form-nueva-universidad" class="content-form floating-effect" data-parsley-validate="">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Editar Universidad
				</div>
				<div class="body one-col row">
					<div class="box-form col-md-12">
						<label for="universidad" class="label-floating active">Nombre de la Universidad</label>
						<br>
						<input type="text" name="universidad" value="Universidad"" class="codigo" required>						
						<input type="hidden" name="id_universidad" id="id_universidad" />
					</div>

					<div class="box-form col-md-12">
						<label for="pais" class="label-floating active">Pais</label>
						<img src="img/ic-down.png" class="ic-down">
						<br>
						<select name="pais" id="pais" required>
							<option value="" ></option>
							<option value="PE" selected>Perú</option>
							<option value="BR">Brasil</option>
							<option value="CO">Colombia</option>
							<option value="EC">Ecuador</option>
						</select>		
					</div>

					<div class="box-form col-md-12">
						<label for="dominio" class="label-floating active">Dominio del correo</label>
						<br>
						<input type="text" name="dominio"  id="dominio" value="asdafasdaf" required>						
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

<?php $script = "universidades.js"; ?>
<?php $script2 = "administradores.js"; ?>

<?php include 'includes/footer.php' ?>