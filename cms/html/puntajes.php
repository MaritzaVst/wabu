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
		
		<h2 class="title">Puntajes</h2>

		<div class="actions">
			<form action="#" method="get" class="search-form" data-parsley-validate="">
				
				<button type="submit"></button>
				<input type="text" name="search" required placeholder="Buscar">

			</form>

		</div>
	</header><!-- /header -->

	<section class="data-list profesores carreras puntajes">
		<form>
			<table cellspacing="50">
				<thead>
					<tr>
						<th>
							Acción
						</th>
						<th>
							Puntaje
						</th>
						<th>
							&nbsp;
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td class="text-left accion" >Usuario que califica contenido gana</td>
						<td class="text-center">
							<div class="content-form floating-effect">
								<input type="number" name="points" value="50" class="disabled" disabled>
							</div>
						</td>
						<td>
							<a href="#" class="edit"></a>
						</td>
					</tr>

					<tr class="active">
						<td class="text-left accion" >Cada vez que califiquen su contenido, el usuario gana</td>
						<td class="text-center">
							<div class="content-form floating-effect">
								<input type="number" name="points2" value="50" class="disabled" disabled>
							</div>
						</td>
						<td>
							<a href="#" class="edit"></a>
						</td>
					</tr>

					<tr class="active">
						<td class="text-left accion" >Usuario que califica a un profesor gana</td>
						<td class="text-center">
							<div class="content-form floating-effect">
								<input type="number" name="points3" value="50" class="disabled" disabled>
							</div>
						</td>
						<td>
							<a href="#" class="edit"></a>
						</td>
					</tr>

					<tr class="active">
						<td class="text-left accion" >Usuario que comenta a un profesor gana (Cuando califica o después)</td>
						<td class="text-center">
							<div class="content-form floating-effect">
								<input type="number" name="points4" value="50" class="disabled" disabled>
							</div>
						</td>
						<td>
							<a href="#" class="edit"></a>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="actions text-center">
				<a class="btn-cancel text-uppercase">Cancelar</a>
				<button type="submit" class="btn-save bg-green">Guardar</button>
			</div>
		</form>
	</section>
	
</section>
<?php $script = "puntajes.js"?>
<?php include 'includes/footer.php' ?>