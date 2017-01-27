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
		
		<h2 class="title">Cursos</h2>

		<div class="actions">
			<!--Buttons-->
			<a href="#nueva-universidad" class="btn-upload pull-right disabled">
				CARGAR
			</a>
			<a href="#nuevo-curso" class="btn-new pull-right pop-nuevo-curso">
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
				<input type="text" name="search" required placeholder="Buscar Cursos">

			</form>

		</div>
	</header><!-- /header -->

	<section class="data-list profesores cursos">

		<table cellspacing="50">
			<thead>
				<tr>
					<th>
						Código
					</th>
					<th>
						Nombre del curso
					</th>
					<th>
						&nbsp;
					</th>
				</tr>
			</thead>
			<tbody>

				<tr class="active" data-id="15" id="15">
					<td class="codigo" >145035AC</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Administracion de Empresas</a>
					</td>
					<td>
						<a href="#editar-curso" onclick="set_current_id(15);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="2">
									<span class="apellido_profesor">Keiko</span>, 
									<span class="nombre_profesor"> Fujimori</span>
								</li>
							</ul>
						</div>
					</td>
				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr data-id="16" id="16">
					
					<td class="codigo" >
						1459999AC
					</td>
					<td class="text-center nombre">
						<a href="#detail" class="title pop-detail">Psicologia del Consumidor</a>
					</td>
					
					<td>
						<a href="#editar-curso" onclick="set_current_id(16);" class="edit pop-edit-curso"></a>
						<div class="hidden">
							<ul class="profesores">
								<li data-id-profesor="1">
									<span class="apellido_profesor">Alan</span>, 
									<span class="nombre_profesor">Garcia</span>
								</li>
								<li data-id-profesor="3">
									<span class="apellido_profesor">Ollanta</span>, 
									<span class="nombre_profesor">Humala</span>
								</li>
							</ul>
						</div>
					</td>

				</tr>

			</tbody>
		</table>

	</section>
	<section>
		<div class="pagination-container">
		   <ul class="pagination">
		      <li class="PagedList-skipToPrevious"><a href="#" rel="prev">«</a></li>
		      <li><a href="#">1</a></li>
		      <li><a href="#">2</a></li>
		      <li class="active"><a>3</a></li>
		      <li><a href="#">4</a></li>
		      <li class="PagedList-skipToNext"><a href="#" rel="next">»</a></li>
		   </ul>
		</div>
	</section>
	<section class="hidden boxes ">

		<!-- Desactivar -->
		<div id="desactivar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Desactivar Curso
			</div>
			<div class="body">
				<p>¿Está seguro que desea desactivar el <br> siguiente Curso?</p>
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
				Activar Curso
			</div>
			<div class="body">
				<p>¿Está seguro que desea activar el <br> siguiente Curso?</p>
				<h3 class="title"></h3>
				<p><small>Al activar se mostrará en el aplicativo</small></p>

				

			</div>

			<div class="actions">
				<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
				<a href="javascript:;" onclick="activar_curso();" class="btn-confirm bg-green">Aceptar</a>
			</div>
		</div>

		<!-- Nuevo -->
		<div id="nuevo-curso" class="pop-ups profesores cursos">
			<form action="#" method="post" id="form-nuevo-curso" class="form-new container" data-parsley-validate="" enctype="multipart/form-data">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Nuevo Curso
				</div>

				<div class="body one-col">
					<div class="box-form">

						<label>Código</label>
						<input type="text" name="codigo" class="codigo" required>
						
					</div>

					<div class="box-form">

						<label>Nombre del curso</label>
						<input type="text" name="nombre" class="nombre" required>
						
					</div>

					<div class="box-form">

						<label>Profesores</label>
						<select name="profesores[]" class="profesores chosen-profesores" multiple data-placeholder="Busque a los profesores para agregarlos a un curso." required>
							<option value="1">Alan Garcia</option>
							<option value="2">Keiko Fujimor</option>
							<option value="3">Ollanta Humala</option>
							<option value="4">Toledo</option>
							<option value="5">PPK</option>
							<option value="6">Ollanta Humala</option>
							<option value="7">Toledo</option>
							<option value="8">PPK</option>
							<option value="9">Ollanta Humala</option>
							<option value="10">Toledo</option>
							<option value="11">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="1">Alan Garcia</option>
							<option value="2">Keiko Fujimor</option>
							<option value="3">Ollanta Humala</option>
							<option value="4">Toledo</option>
							<option value="5">PPK</option>
							<option value="6">Ollanta Humala</option>
							<option value="7">Toledo</option>
							<option value="8">PPK</option>
							<option value="9">Ollanta Humala</option>
							<option value="10">Toledo</option>
							<option value="11">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="1">Alan Garcia</option>
							<option value="2">Keiko Fujimor</option>
							<option value="3">Ollanta Humala</option>
							<option value="4">Toledo</option>
							<option value="5">PPK</option>
							<option value="6">Ollanta Humala</option>
							<option value="7">Toledo</option>
							<option value="8">PPK</option>
							<option value="9">Ollanta Humala</option>
							<option value="10">Toledo</option>
							<option value="11">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="1">Alan Garcia</option>
							<option value="2">Keiko Fujimor</option>
							<option value="3">Ollanta Humala</option>
							<option value="4">Toledo</option>
							<option value="5">PPK</option>
							<option value="6">Ollanta Humala</option>
							<option value="7">Toledo</option>
							<option value="8">PPK</option>
							<option value="9">Ollanta Humala</option>
							<option value="10">Toledo</option>
							<option value="11">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
							<option value="12">Ollanta Humala</option>
							<option value="13">Toledo</option>
							<option value="14">PPK</option>
							<option value="15">Ollanta Humala</option>
							<option value="16">Toledo</option>
							<option value="17">PPK</option>
							<option value="18">Ollanta Humala</option>
							<option value="19">Toledo</option>
							<option value="20">PPK</option>
						</select>
						
					</div>


				</div>

				<div class="actions">
					<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
					<button type="submit" class="btn-confirm bg-green">Aceptar</button>
				</div>
			</form>
		</div>

		<!-- Editar -->
		<div id="editar-curso" class="pop-ups profesores cursos">
			<form action="#" method="post" id="form-editar-curso" class="form-new container" data-parsley-validate="" enctype="multipart/form-data">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Editar Curso
				</div>

				<div class="body one-col">
					<div class="box-form">

						<label>Código</label>
						<input type="text" name="codigo" class="codigo" required>
						
					</div>

					<div class="box-form">

						<label>Nombre del curso</label>
						<input type="text" name="nombre" class="nombre" required>
						
					</div>

					<div class="box-form">

						<label>Profesores</label>
						<select name="profesores[]" id="chosen-profesores-edit" class="profesores chosen-profesores" multiple data-placeholder="Busque a los profesores para agregarlos a un curso." required>
							<option value="1">Alan Garcia</option>
							<option value="2">Keiko Fujimor</option>
							<option value="3">Ollanta Humala</option>
							<option value="4">Toledo</option>
							<option value="5">PPK</option>
						</select>
						
					</div>


				</div>

				<div class="actions">
					<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
					<button type="submit" class="btn-confirm bg-green">Aceptar</button>
				</div>
			</form>
		</div>
		<!--Detail-->
		<div id="detail" class="pop-ups detail cursos">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Detalle de Curso
			</div>
			<div class="body">
				
				<h3 class="codigo">145035AC</h3>
				<p class="nombre">Administracion de Operaciones</p>

				<h3>Profesores</h3>
				<ul class="profesores">
					<li>
						<span class="apellido_profesor">Antinona Suarez</span>, 
						<span class="nombre_profesor">Erick Olson</span>
					</li>
					<li>
						<span class="apellido_profesor">Malca Guaylupo</span>, 
						<span class="nombre_profesor">Oscar Enrique</span>
					</li>
					<li>
						<span class="apellido_profesor">Paiva Zarzar</span>, 
						<span class="nombre_profesor">Robeto Alvides</span>
					</li>
				</ul>

			</div>

			
		</div>

	</section>
</section>

<?php $script = "cursos.js"; ?>

<?php include 'includes/footer.php' ?>