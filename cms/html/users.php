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
		
		<h2 class="title">Usuarios</h2>

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
				<input type="text" name="search" required placeholder="Buscar">

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
						Correo
					</th>
					<th>
						Validado
					</th>
					<th>
						Estado
					</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>

				<tr class="active" data-id="15" id="15">
					<td colspan="2" class="nombre">
						<a href="#" class="title">Cristina Elizabeth Chichizola Fajardo</a>
					</td>
					<td class="pais" data-codigo="PE">
						chichizola@gmail.com
					</td>
					<td class="carreras">
						Sí
					</td>
					<td class="dominio">
						Activo
					</td>
					<td></td>
					<td>
						<a href="#edit-universidad" onclick="set_current_id(15);" class="edit pop-edit-universidad"></a>
					</td>

				</tr>

				<tr class="active" data-id="16" id="16">
					
					<td colspan="2" class="nombre">
						<a href="#" class="title">Giuliana Rocío Bracamonte Zavaleta</a>
					</td>
					<td class="pais" data-codigo="PE">
						chichizola@gmail.com
					</td>
					<td class="carreras">
						No
					</td>
					<td class="dominio">
						Activo
					</td>
					<td></td>
					<td>
						<a href="#edit-universidad" onclick="set_current_id(16);" class="edit pop-edit-universidad"></a>
					</td>
				</tr>

				<tr class="active" data-id="17" id="17">
					
					<td colspan="2" class="nombre">
						<a href="#" class="title">Alejandra Daniela Meléndez Abanto</a>
					</td>
					<td class="pais" data-codigo="PE">
						chichizola@gmail.com
					</td>
					<td class="carreras">
						Sí
					</td>
					<td class="dominio">
						Activo
					</td>
					<td></td>
					<td>
						<a href="#edit-universidad" onclick="set_current_id(17);" class="edit pop-edit-universidad"></a>
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
		<div id="nueva-universidad" class="pop-ups">
			
			<form action="#" method="post" id="form-nueva-universidad" data-parsley-validate="">

				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Nueva Universidad
				</div>
				<div class="body">
					
						

					<div class="box-form">

						<label for="universidad">Nombre de la Universidad</label>
						<input type="text" name="universidad" value="Universidad" id="universidad" required>

					</div>

					<div class="box-form">

						<label for="pais">Pais</label>
						<select name="pais" id="pais" required>
							<option value="">[Selecciona un País]</option>
							<option value="PE" selected>Perú</option>
							<option value="BR">Brasil</option>
							<option value="CO">Colombia</option>
							<option value="EC">Ecuador</option>
						</select>

					</div>

					<div class="box-form">

						<label for="dominio">Dominio del correo</label>
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
		<div id="edit-universidad" class="pop-ups">

			<form action="#" method="post" id="form-editar-universidad" data-parsley-validate="">

				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Editar Universidad
				</div>
				<div class="body">
					
					

						<div class="box-form">

							<label for="universidad">Nombre de la Universidad</label>
							<input type="text" name="universidad" value="Universidad" id="universidad" required>
							<input type="hidden" name="id_universidad" id="id_universidad" />
						</div>

						<div class="box-form">

							<label for="pais">Pais</label>
							<select name="pais" id="pais" required>
								<option value="">[Selecciona un País]</option>
								<option value="PE" selected>Perú</option>
								<option value="BR">Brasil</option>
								<option value="CO">Colombia</option>
								<option value="EC">Ecuador</option>
							</select>

						</div>

						<div class="box-form">

							<label for="dominio">Dominio del correo</label>
							<input type="text" name="dominio"  id="dominio" required>
							
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

<?php include 'includes/footer.php' ?>