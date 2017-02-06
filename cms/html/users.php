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
			<a href="#filtrar" class="btn-filter pull-right">
				FILTRAR
			</a>
			<a href="#" class="btn-new pull-right">
				NUEVO
			</a>
			<!---->
			<form action="#" method="get" class="search-form" data-parsley-validate="">
				
				<button type="submit"></button>
				<input type="text" name="search" required placeholder="Buscar">

			</form>

		</div>
	</header><!-- /header -->

	<section class="data-list">
		<div class="btn-select-all toggle-button"></div>
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
	<!--Filtrar-->
	<div id="filtrar" class="hidden">
		<h4 class="text-uppercase">Filtrar</h4>
		<form>
			<div class="content-form floating-effect">
				<div class="row">
					<div class="col-md-12">
						<label for="type" class="label-floating">Tipo</label>
						<img src="img/ic-down.png" class="ic-down">
						<br>
						<select name="type" class="select-type" required>
							<option value="" selected=""></option>
							<option value="content">Contenido</option>
							<option value="comment">Comentario</option>
						</select>
					</div>
					<div class="col-md-12">
						<label for="status" class="label-floating">Estado</label>
						<img src="img/ic-down.png" class="ic-down">
						<br>
						<select name="status" class="select-status" required>
							<option value="" selected=""></option>
							<option value="locked">Bloqueado</option>
							<option value="unlocked">Desbloqueado</option>
						</select>
					</div>
				</div>
				<div class="actions">
					<button class="btn-save btn-filter-spam bg-green">FILTRAR</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php $script = "universidades.js"; ?>
<?php $script2 = "administradores.js"; ?>
<?php include 'includes/footer.php' ?>