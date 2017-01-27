<?php 
	$universidad = array(
		'id' => 20, 
		'nombre' => 'Universidad ...', 
		'pais' => 'Ecuador', 
		'codigo_pais' => 'EC', 
		'carreras' => 52, 
		'dominio'=>'@upc.edu.pe' 
	);

	$profesor = array(
		'id' => 20, 
		'nombre' => 'Fernando Manuel', 
		'apellido' => 'Rengifo Cornejo', 
		'foto' => 'img/fill-copy.png', 
		'url_bio' => 'http://gmail.com',
		'estudios' => 'bachiller',
		'cuanto_aprendiste' => 6,
		'alto_califica' => 6,
		'buena_gente' => 6,
		'num_calificacion' => 100, 
		'prom_calificacion' => 5 
	);

	$cursos = array(
		'id' => 35, 
		'nombre' => 'Astrología', 
		'codigo' => 'AA0001TP',
		'profesores' => array( 
				array( 'id' => 1, 'nombre' => 'Alan', 'apellido' => 'Garcia'),
				array( 'id' => 3, 'nombre' => 'Ollanta', 'apellido' => 'Humala')
				)
	);


	$carreras = array(

		'id' => 18,
		'nombre' => 'Contabilidad',
		'cantidad_ciclos' => 2,
		'ciclos' =>

			array(

				array( 

					array( 'id' => 7, 'nombre' => 'Matematica finaciera'  ),
					array( 'id' => 8, 'nombre' => 'Analisis del Mercado'  )
				),
				array( 

					array( 'id' => 3, 'nombre' => 'Economia'  ),
					array( 'id' => 4, 'nombre' => 'Ecuaciones Difrenciales'  )
				)

			)

	);

	$reponses = array('success' => true, 'message' => 'Operacion realizada con éxito', 'universidad' => $universidad, 'profesor' => $profesor, 'cursos' => $cursos, 'carreras' => $carreras );


	echo json_encode($reponses);


 ?>