
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
		
		<h2 class="title">Spam</h2>

		<div class="actions">
			<!--Buttons-->
			<a href="#nueva-universidad" class="btn-filter pull-right pop-nueva-universidad">
				FILTRAR
			</a>
			<a href="#desactivar" class="btn-disable pull-right sep pop-desactivar disabled">
				BLOQUEAR
			</a>
			<a href="#activar" class="btn-active pull-right sep pop-activar disabled">
				DESBLOQUEAR
			</a>
			<!---->
			<form action="#" method="get" class="search-form" data-parsley-validate="">
				
				<button type="submit"></button>
				<input type="text" name="search" required placeholder="Buscar universidad">

			</form>

		</div>
	</header><!-- /header -->

	<section class="data-list spam">

		<table cellspacing="50">
			<thead>
				<tr>
					<th class="text-center">
						Reportado por
					</th>
					<th>
						Publicado por
					</th>
					<th>
						Motivo
					</th>
					<th>
						Tipo
					</th>
					<th>
						Contenido
					</th>
					<th>
						Fecha
					</th>
					<th>
						Estado
					</th>
				</tr>
			</thead>
			<tbody>

				<tr class="active" data-id="15" id="15">
					<td class="text-left accion" >José Ernesto Meléndez Abarca</td>
					<td class="text-left ciclos">Catalina Leonor Ruiz de las Casas50</td>
					<td class="text-center ciclos">Copyright</td>
					<td class="text-center ciclos">Contenido</td>
					<td class="text-left ciclos">Althusser Competing Interpellations And The Third Text</td>
					<td class="text-center ciclos">06/12/2016</td>
					<td class="text-center ciclos">Desbloqueado</td>
					<!-- <td>
						<a href="#" class="edit"></a>
					</td>
 -->				</tr>

				<tr class="active" data-id="16" id="16">
					<td class="text-left accion" >José Ernesto Meléndez Abarca</td>
					<td class="text-left ciclos">Catalina Leonor Ruiz de las Casas50</td>
					<td class="text-center ciclos">--</td>
					<td class="text-center ciclos">Contenido</td>
					<td class="text-left ciclos">Althusser Competing Interpellations And The Third Text</td>
					<td class="text-center ciclos">06/12/2016</td>
					<td class="text-center ciclos">Desbloqueado</td>
					<!-- <td>
						<a href="#" class="edit"></a>
					</td>
 -->				</tr>

				<tr class="active" data-id="17" id="17">
					<td class="text-left accion" >José Ernesto Meléndez Abarca</td>
					<td class="text-left ciclos">Catalina Leonor Ruiz de las Casas50</td>
					<td class="text-center ciclos">Copyright</td>
					<td class="text-center ciclos">Contenido</td>
					<td class="text-left ciclos">Althusser Competing Interpellations And The Third Text</td>
					<td class="text-center ciclos">06/12/2016</td>
					<td class="text-center ciclos">Desbloqueado</td>
					<!-- <td>
						<a href="#" class="edit"></a>
					</td>
 -->				</tr>

				<tr class="active" data-id="18" id="18">
					<td class="text-left accion" >José Ernesto Meléndez Abarca</td>
					<td class="text-left ciclos">Catalina Leonor Ruiz de las Casas50</td>
					<td class="text-center ciclos">Copyright</td>
					<td class="text-center ciclos">Contenido</td>
					<td class="text-left ciclos">Althusser Competing Interpellations And The Third Text</td>
					<td class="text-center ciclos">06/12/2016</td>
					<td class="text-center ciclos">Desbloqueado</td>
					<!-- <td>
						<a href="#" class="edit"></a>
					</td>
 -->				</tr>
			</tbody>
		</table>

	</section>
	<!--Popups: Desactivar, Nuevo -->
	<section class="hidden boxes spam-boxes">
		<!-- Desactivar -->
		<div id="desactivar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Bloquear comentario
			</div>
			<div class="body">
				<p>¿Está seguro que desea bloquear este comentario?</p>
				<h3 class="title"></h3>
				

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
	</section>
</section>
<?php $script = "universidades.js"; ?>
<?php include 'includes/footer.php' ?>