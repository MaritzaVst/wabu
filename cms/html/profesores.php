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
		
		<h2 class="title">Profesores</h2>

		<div class="actions">
			<!--Buttons-->
			<a href="#nueva-universidad" class="btn-upload pull-right disabled">
				CARGAR
			</a>
			<a href="#nuevo-profesor" class="btn-new pull-right pop-nuevo-profesor">
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
				<input type="text" name="search" required placeholder="Buscar Profesores">

			</form>

		</div>
	</header><!-- /header -->

	<section class="data-list profesores">

		<table cellspacing="50">
			<thead>
				<tr>
					<th>
						
					</th>
					<th>
						Foto
					</th>
					<th>
						Nombre completo
					</th>
					<th>
						No. Calificaciones
					</th>
					<th>
						Calificación
					</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>

				<tr class="active" data-id="15" id="15">
					<td class="foto" colspan="2">
						<span class="pic">
							<img src="img/default.png" alt="Icono">
						</span>
					</td>
					<td class="text-left">
						<a href="#detail" class="title pop-detail">
							<span class="apellido">RENGIFO CORNEJO</span>, 
							<span class="nombre"> Fernando Manuel</span>
						</a>
					</td>
					<td class="num_calificacion" >
						9
					</td>
					<td class="prom_calificacion">
						5
					</td>
					
					<td>
						<a href="#editar-profesor" onclick="set_current_id(15);" class="edit pop-edit-profesor"></a>
						<div class="hidden">
							
							<span class="url_bio">http://linkedin.pe</span>
							<span class="estudios" data-estudios="bachiller">Bachiller</span>
							<span class="cuanto_aprendiste">5.4</span>
							<span class="alto_califica">4.5</span>
							<span class="buena_gente">9.3</span>
							<ul class="cursos">
								<li>Matematica,</li>
								<li>Fisica II,</li>
								<li>Gestion</li>
							</ul>
						</div>
					</td>

				</tr>

				<tr class="active" data-id="16" id="16">
					<td class="foto" colspan="2">
						<span class="pic">
							<img src="img/team.png" alt="Icono">
						</span>
					</td>
					<td class="text-left">
						<a href="#detail" class="title pop-detail">
							<span class="apellido">SARAVIA VERGARA</span>, 
							<span class="nombre"> Enrique Andres</span>
						</a>
					</td>
					<td class="num_calificacion" >
						10
					</td>
					<td class="prom_calificacion">
						3.5
					</td>
					
					<td>
						<a href="#editar-profesor" onclick="set_current_id(16);" class="edit pop-edit-profesor"></a>
						<div class="hidden">
							
							<span class="url_bio">http://facebook.pe</span>
							<span class="estudios" data-estudios="bachiller">Bachiller</span>
							<span class="cuanto_aprendiste">2.6</span>
							<span class="alto_califica">9</span>
							<span class="buena_gente">7.3</span>
							<ul class="cursos">
								<li>Lenguaje corporal,</li>
								<li>Psicologia II,</li>
								<li>Marketing neuronal</li>
							</ul>
						</div>
					</td>

				</tr>

			</tbody>
		</table>

	</section>

	<section class="hidden boxes ">

		<!-- Desactivar -->
		<div id="desactivar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Desactivar Profesor
			</div>
			<div class="body">
				<p>¿Está seguro que desea desactivar al <br> siguiente Profesor?</p>
				<h3 class="title"></h3>
				<p><small>Al desactivar no se mostrará en el aplicativo</small></p>

				

			</div>

			<div class="actions">
				<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
				<a href="javascript:;" onclick="desactivar_profesor();" class="btn-confirm bg-green">Aceptar</a>
			</div>
		</div>
		<!-- Activar -->
		<div id="activar" class="pop-ups">
			<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
			<div class="heading">
				Activar Profesor
			</div>
			<div class="body">
				<p>¿Está seguro que desea activar al <br> siguiente Profesor?</p>
				<h3 class="title"></h3>
				<p><small>Al activar se mostrará en el aplicativo</small></p>

				

			</div>

			<div class="actions">
				<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
				<a href="javascript:;" onclick="activar_profesor();" class="btn-confirm bg-green">Aceptar</a>
			</div>
		</div>

		<!-- Nuevo -->
		<div id="nuevo-profesor" class="pop-ups profesores main-content">
			<form action="#" method="post" id="form-nuevo-profesor" class="form-new container content-form floating-effect" data-parsley-validate="" enctype="multipart/form-data">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Nuevo Profesor
				</div>

				<div class="body row">
					
					<div class="box-form row text-left info">
						<div class="col-xs-12 text-center">
							<div class="img-preview">
								<input type="file" id="files" />
								<div class="img-container">
									<img id="image" class="absolute-center" src="img/default.png"/>
								</div>
								<div class="upload-btn">
									<img src="img/ic-camera.png">
									<span>Cargar imagen</span>
								</div>
							</div>												
							<!-- <div class="preview-image">
								<img id="preview-image" src="img/default.png" >
							</div>

							<input type="file" name="file-image" id="file-image-new" class="inputfile" onchange="onFileSelected(event, 'preview-image')" required>
							<label for="file-image-new" class="lbl-inputFile">Subir Foto</label>
							<div class="error-image"></div> -->
						</div>
						<div class="col-xs-12 col-sm-6">			
							<label class="label-floating">Nombre</label>
							<br>
							<input type="text" name="nombre" class="nombre" data-parsley-pattern="^[A-Za-záíéóúÁÉÍÓÚ ]+$" required>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="label-floating">Apellido</label>
							<br>
							<input type="text" name="apellido" class="apellido" data-parsley-pattern="^[A-Za-záíéóúÁÉÍÓÚ ]+$" required>
						</div>
						<div class="col-xs-12 col-sm-6">							
							<label class="label-floating">Estudios superiores</label>
							<br>
							<select name="estudios" class="estudios" required>
								<option value=""></option>
								<option value="superior">Superior</option>
								<option value="bachiller">Bachiller</option>
							</select>
						</div>
						
						<div class="col-xs-12 col-sm-6">							
							<label class="label-floating">URL Bio</label>
							<br>
							<input type="text" name="url_bio" class="url_bio" value="http://google.com" required>
						</div>
						
					</div>

					<div class="box-form row questions">
						<h3>Calificación Inicial</h3>
						<div class="item col-md-8 col-md-offset-2">
							<label class="pull-left">¿Qué tanto aprendiste?</label>
							<input type="number" min="0" step="any" name="cuanto_aprendiste" class="cuanto_aprendiste pull-right" required>
						</div>
						<div class="item col-md-8 col-md-offset-2"">
							<label class="pull-left">¿Qué tan alto califica?</label>
							<input type="number" min="0" step="any" name="alto_califica" class="alto_califica pull-right" required>
						</div>
						<div class="item col-md-8 col-md-offset-2"">
							<label class="pull-left">¿Qué tan buena gente es?</label>
							<input type="number" min="0" step="any" name="buena_gente" class="buena_gente pull-right" required>
						</div>
					</div>
					<div class="box-form row questions">
						<div class="col-xs-12 col-sm-6">
							<label class="col-md-8">Promedio Calificación</label>
							<input type="number" min="0" step="any" name="prom_calificacion" class="prom_calificacion"  required>
						</div>
						<div class="col-xs-12 col-sm-6">						
							<label class="col-md-8">Número de Calificaciones</label>
							<input type="number" min="0" step="any" name="num_calificacion" class="num_calificacion" required>
						</div>				
					</div>

				</div>

				<div class="actions">
					<a href="#" onclick="$.fancybox.close();" class="btn-cancel">Cancelar</a>
					<button type="submit" class="btn-confirm bg-green">Aceptar</button>
				</div>
			</form>
		</div>

		<!-- Editar -->
		<div id="editar-profesor" class="pop-ups profesores">
			<form action="#" method="post" id="form-editar-profesor" class="form-new container" data-parsley-validate="" enctype="multipart/form-data">
				<div class="loading"><div class='uil-reload-css' style='-webkit-transform:scale(0.15)'><div></div></div></div>
				<div class="heading">
					Editar Profesor
				</div>

				<div class="body">
					
					<div class="box-form row text-left info">



						<div class="col-xs-12 text-center">
							<a href="javascript:;" class="remove-image"></a>
							<div class="preview-image">
								
								<img id="preview-image-edit" src="img/default.png" >
							</div>

							<input type="file" name="file-image-edit" id="file-image-edit" class="inputfile" onchange="onFileSelected(event, 'preview-image-edit')" required>
							<label for="file-image-edit" class="lbl-inputFile disabled">Subir Foto</label>
							<div class="error-image"></div>

						</div>

						<div class="col-xs-12 col-sm-6">
							
							<label fornombre">Nombre</label>
							<input type="text" name="nombre" value="Enrique Andrés" class="nombre" class="nombre" data-parsley-pattern="^[A-Za-záíéóúÁÉÍÓÚ ]+$" required>

						</div>
						
					

						<div class="col-xs-12 col-sm-6">
							
							<label>Apellido</label>
							<input type="text" name="apellido" value="Saravia V" class="apellido" data-parsley-pattern="^[A-Za-záíéóúÁÉÍÓÚ ]+$" required>

						</div>

						<div class="col-xs-12 col-sm-6">
							
							<label>Estudios superiores</label>
							<select name="estudios" class="estudios" required>
								<option value="">[Selecciona Estudios]</option>
								<option value="superior" selected>Superior</option>
								<option value="bachiller">Bachiller</option>
							</select>

						</div>
						
						<div class="col-xs-12 col-sm-6">
							
							<label>URL Bio</label>
							<input type="text" name="url_bio" class="url_bio" value="http://google.com" placeholder="http://" required>

						</div>
						
					</div>

					<div class="box-form row questions">
						<h3>Calificación Inicial</h3>

						<div class="item">
							<label>¿Qué tanto aprendiste?</label>
							<input type="number" min="0" step="any" name="cuanto_aprendiste" class="cuanto_aprendiste" required>
						</div>

						<div class="item">
							<label>¿Qué tan alto califica?</label>
							<input type="number" min="0" step="any" name="alto_califica" class="alto_califica" required>
						</div>

						<div class="item">
							<label>¿Qué tan buena gente es?</label>
							<input type="number" min="0" step="any" name="buena_gente" class="buena_gente" required>
						</div>


					</div>

					<div class="box-form row questions">

						<div class="col-xs-12 col-sm-6">
							
							<label>Promedio Calificación</label>
							<input type="number" min="0" step="any" name="prom_calificacion" class="prom_calificacion" value="1" required>

						</div>

						<div class="col-xs-12 col-sm-6">
							
							<label>Número de Calificaciones</label>
							<input type="number" min="0" step="any" name="num_calificacion" class="num_calificacion" value="2" required>

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
		<div id="detail" class="pop-ups profesores detail">
			<div class="heading">
				Detalle Profesor
			</div>

			<div class="body">
				<div class="preview-image">
					<img src="img/team.png" alt="">
				</div>
				<h3 class="color-black">
					<span class="apellido">SARAVIA VERGARA</span>,
					<span class="nombre"> Enrique Andres</span>
				</h3>
				<div class="rating">
					<span class="fill"></span>
					<span class="fill"></span>
					<span class="fill"></span>
					<span></span>
					<span></span>

					<div class="count num_calificacion"> 150 </div><i></i>
				</div>
				<h4>
					Educacion Superior
				</h4>
				<p class="estudios">Doctorado en Sociedad de la Información</p>

				<h4>Cursos</h4>
				<ul class="cursos">
					<li>Microeconomia Aplicada,</li>
					<li>Macroeconomia II,</li>
					<li>Administración de Operaciones</li>
				</ul>

				<div class="questions">
					<p>¿Que tanto aprendiste <span class="cuanto_aprendiste">3.5</span></p>
					<p>¿Qué tan alto califica? <span class="alto_califica">4.5</span></p>
					<p>¿Qué tan buena gente es? <span class="buena_gente">2.5</span></p>
				</div>

			</div>
		</div>
	</section>
</section>

<?php $script = "profesores.js"; ?>
<?php $script2 = "administradores.js"; ?>
<?php $script3 = "file-preview.js"; ?>

<?php include 'includes/footer.php' ?>