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

				<tr class="active" data-id="15" id="15">
					<td class="text-left accion" >Usuario que califica contenido gana</td>
					<td class="text-center ciclos">50</td>
					<td>
						<a href="#" class="edit"></a>
					</td>
				</tr>

				<tr class="active" data-id="16" id="16">
					<td class="text-left accion" >Cada vez que califiquen su contenido, el usuario gana</td>
					<td class="text-center ciclos">50</td>
					<td>
						<a href="#" class="edit"></a>
					</td>
				</tr>

				<tr class="active" data-id="17" id="17">
					<td class="text-left accion" >Usuario que califica a un profesor gana</td>
					<td class="text-center ciclos">50</td>
					<td>
						<a href="#" class="edit"></a>
					</td>
				</tr>

				<tr class="active" data-id="18" id="18">
					<td class="text-left accion" >Usuario que comenta a un profesor gana (Cuando califica o después)</td>
					<td class="text-center ciclos">50</td>
					<td>
						<a href="#" class="edit"></a>
					</td>
				</tr>
			</tbody>
		</table>

	</section>
</section>

<?php include 'includes/footer.php' ?>