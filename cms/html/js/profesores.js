var current_id_profesor = 0;

jQuery(document).ready(function($) {

	reload_events();


	//PopUp: Desactivar
	$(".pop-desactivar").fancybox({
		maxWidth	: 480,
		maxHeight	: 350,
		width 		: "90%",
		height      : "80%",
		autoSize	: false,
		closeClick	: false,
		helpers     : { 
	        overlay : {closeClick: false}
	    },
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : false,
		afterShow: function(){
			//Colocando Nombre de la Fila
			var text = $(".current").find(".title").text();
			$("#desactivar").find("h3").html(text);

		},
		beforeShow:function(){
			//Cerrar Pop Up si no ha seleccionado una fila
			if ( $(".data-list tr.current").length < 1 ) {
				$.fancybox.close();
			}
			if ( !$(".data-list tr.current").hasClass("active") ) {
				$.fancybox.close();
			}
		}
	});

	//PopUp: Activar
	$(".pop-activar").fancybox({
		maxWidth	: 480,
		maxHeight	: 350,
		width 		: "90%",
		height      : "80%",
		autoSize	: false,
		closeClick	: false,
		helpers     : { 
	        overlay : {closeClick: false}
	    },
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : false,
		afterShow: function(){
			//Colocando Nombre de la Fila
			var text = $(".current").find(".title").text();
			$("#activar").find("h3").html(text);

		},
		beforeShow:function(){
			//Cerrar Pop Up si no ha seleccionado una fila
			if ( $(".data-list tr.current").length < 1 ) {
				$.fancybox.close();
			}
		}
	});


	//PopUp: Nueva Profesor
	$(".pop-nuevo-profesor").fancybox({
		maxWidth	: 650,
		maxHeight	: 610,
		width 		: "90%",
		height      : "100%",
		autoSize	: false,
		closeClick	: false,
		helpers     : { 
	        overlay : {closeClick: false}
	    },
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : false,
		beforeShow:function(){
			$(".pop-ups form input, .pop-ups form select").val("");
			$(".data-list tr").removeClass("current");
		}
	});

	//PopUp: Editar Profesor
	$(".pop-edit-profesor").fancybox({
		maxWidth	: 650,
		maxHeight	: 610,
		width 		: "90%",
		height      : "100%",
		autoSize	: false,
		closeClick	: false,
		helpers     : { 
	        overlay : {closeClick: false}
	    },
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : false,
		beforeShow:function(){
			
			$(".lbl-inputFile").addClass("disabled");
			$(".remove-image").fadeIn();
			$("#file-image-edit").removeAttr('required')


			//Asigando valores al firm
			$("#form-editar-profesor").find("#file-image-edit").val("");
			$("#form-editar-profesor").find("#preview-image-edit").attr( "src", $("#"+current_id_profesor).find(".pic > img").attr("src") );
			$("#form-editar-profesor").find(".nombre").val( $.trim( $("#"+current_id_profesor).find(".nombre").text() ) );
			$("#form-editar-profesor").find(".apellido").val( $.trim( $("#"+current_id_profesor).find(".apellido").text() ) );
			$("#form-editar-profesor").find(".estudios").val( $("#"+current_id_profesor).find(".estudios").data("estudios")  );
			$("#form-editar-profesor").find(".url_bio").val( $.trim( $("#"+current_id_profesor).find(".url_bio").text() ) );
			$("#form-editar-profesor").find(".cuanto_aprendiste").val( $.trim( $("#"+current_id_profesor).find(".cuanto_aprendiste").text() ) );
			$("#form-editar-profesor").find(".alto_califica").val( $.trim( $("#"+current_id_profesor).find(".alto_califica").text() ) );
			$("#form-editar-profesor").find(".buena_gente").val( $.trim( $("#"+current_id_profesor).find(".buena_gente").text() ) );
			$("#form-editar-profesor").find(".prom_calificacion").val( $.trim( $("#"+current_id_profesor).find(".prom_calificacion").text() ) );
			$("#form-editar-profesor").find(".num_calificacion").val( $.trim( $("#"+current_id_profesor).find(".num_calificacion").text() ) );
			$("#form-editar-profesor").find(".buena_gente").val( $.trim( $("#"+current_id_profesor).find(".buena_gente").text() ) );

		}
	});

	//PopUp: Detail
	$(".pop-detail").fancybox({
		maxWidth	: 650,
		maxHeight	: 610,
		width 		: "90%",
		height      : "100%",
		autoSize	: false,
		closeClick	: false,
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : true,
		beforeShow:function(){
			
			//Asigando valores al popup
			$("#detail").find(".preview-image img").attr( "src", $("#"+current_id_profesor).find(".pic > img").attr("src") );
			$("#detail").find(".nombre").html( $.trim( $("#"+current_id_profesor).find(".nombre").text() ) );
			$("#detail").find(".apellido").html( $.trim( $("#"+current_id_profesor).find(".apellido").text() ) );
			$("#detail").find(".estudios").html( $("#"+current_id_profesor).find(".estudios").text()  );
			$("#detail").find(".cuanto_aprendiste").html( $.trim( $("#"+current_id_profesor).find(".cuanto_aprendiste").text() ) );
			$("#detail").find(".alto_califica").html( $.trim( $("#"+current_id_profesor).find(".alto_califica").text() ) );
			$("#detail").find(".buena_gente").html( $.trim( $("#"+current_id_profesor).find(".buena_gente").text() ) );
			$("#detail").find(".num_calificacion").html( $.trim( $("#"+current_id_profesor).find(".num_calificacion").text() ) );
			$("#detail").find(".cursos").html( $.trim( $("#"+current_id_profesor).find(".cursos").text() ) );


		}
	});

	//Validation Nuevo
	$("#form-nuevo-profesor").submit(function(e) {

		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            
    		var formData = new FormData();

    		formData.append('foto', document.getElementById("file-image-new").files[0]);
    		formData.append('nombre', $(this).find(".nombre").val());
    		formData.append('apellido', $(this).find(".apellido").val());
    		formData.append('estudios', $(this).find(".estudios").val());
    		formData.append('url_bio', $(this).find(".url_bio").val());
    		formData.append('cuanto_aprendiste', $(this).find(".cuanto_aprendiste").val());
    		formData.append('alto_califica', $(this).find(".alto_califica").val());
    		formData.append('buena_gente', $(this).find(".buena_gente").val());
    		formData.append('prom_calificacion', $(this).find(".prom_calificacion").val());
    		formData.append('num_calificacion', $(this).find(".num_calificacion").val());
    		formData.append('buena_gente', $(this).find(".buena_gente").val());

    		console.log( $(this).find(".nombre").val() );

    		$.ajax({
				type: "POST",
				url: "includes/responses.php",
				data: formData,
				processData: false,
				dataType: 'json',
				success: function(data){
					if ( data.success ) {

						var tr ="";

						tr += '<tr data-id="'+data.profesor.id+'" id="'+data.profesor.id+'">';
							tr += '<td class="foto" colspan="2">';
								tr += '<span class="pic"><img src="'+data.profesor.foto+'" alt="Icono"></span>';
							tr += '</td>';
							tr += '<td class="text-left">';
								tr += '<a href="#" class="title">';
									tr += '<span class="apellido">'+data.profesor.apellido+'</span>, ';
									tr += '<span class="nombre"> '+data.profesor.nombre+'</span>';
								tr += '</a>';
							tr += '</td>';
							tr += '<td class="num_calificacion" >'+data.profesor.num_calificacion+'</td>';
							tr += '<td class="prom_calificacion">'+data.profesor.prom_calificacion+'</td>';
							tr += '<td>';
								tr += '<a href="#editar-profesor" onclick="set_current_id('+data.profesor.id+');" class="edit pop-edit-profesor"></a>';
								tr += '<div class="hidden">';
									tr += '<span class="url_bio">'+data.profesor.url_bio+'</span>';
									tr += '<span class="estudios" data-estudios="'+data.profesor.estudios+'">'+data.profesor.estudios+'</span>';
									tr += '<span class="cuanto_aprendiste">'+data.profesor.cuanto_aprendiste+'</span>';
									tr += '<span class="alto_califica">'+data.profesor.alto_califica+'</span>';
									tr += '<span class="buena_gente">'+data.profesor.buena_gente+'</span>';
									tr += '<span class="num_calificacion">'+data.profesor.num_calificacion+'</span>';
									tr += '<span class="prom_calificacion">'+data.profesor.prom_calificacion+'</span>';
								tr += '</div>';
							tr += '</td>';
						tr += '</tr>';

						$(tr).insertBefore('.data-list tbody tr:eq(0)');

						reload_events();

						//Cierra pop Up
						$(".loading").hide();
						$.fancybox.close();
						//Remueve clase "active" a la fila
						$(".current").removeClass("active current");
					}

				}
			});

        }
    	
	});

	//Validation Nuevo
	$("#form-editar-profesor").submit(function(e) {

		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            
    		var formData = new FormData();

    		formData.append('foto', document.getElementById("file-image-edit").files[0]);
    		formData.append('nombre', $(this).find(".nombre").val());
    		formData.append('apellido', $(this).find(".apellido").val());
    		formData.append('estudios', $(this).find(".estudios").val());
    		formData.append('url_bio', $(this).find(".url_bio").val());
    		formData.append('cuanto_aprendiste', $(this).find(".cuanto_aprendiste").val());
    		formData.append('alto_califica', $(this).find(".alto_califica").val());
    		formData.append('buena_gente', $(this).find(".buena_gente").val());
    		formData.append('prom_calificacion', $(this).find(".prom_calificacion").val());
    		formData.append('num_calificacion', $(this).find(".num_calificacion").val());
    		formData.append('buena_gente', $(this).find(".buena_gente").val());


    		$.ajax({
				type: "POST",
				url: "includes/responses.php",
				data: formData,
				processData: false,
				dataType: 'json',
				success: function(data){
					if ( data.success ) {

						 $("#"+current_id_profesor).find(".pic img").attr( "src", data.profesor.foto );
			    		 $("#"+current_id_profesor).find(".nombre").html( data.profesor.nombre );
			    		 $("#"+current_id_profesor).find(".apellido").html( data.profesor.apellido );
			    		 $("#"+current_id_profesor).find(".estudios").html( data.profesor.estudios );
			    		 $("#"+current_id_profesor).find(".estudios").data( "estudios", data.profesor.estudios );
			    		 $("#"+current_id_profesor).find(".url_bio").html( data.profesor.url_bio );
			    		 $("#"+current_id_profesor).find(".cuanto_aprendiste").html( data.profesor.cuanto_aprendiste );
			    		 $("#"+current_id_profesor).find(".alto_califica").html( data.profesor.alto_califica );
			    		 $("#"+current_id_profesor).find(".buena_gente").html( data.profesor.buena_gente );
			    		 $("#"+current_id_profesor).find(".prom_calificacion").html( data.profesor.prom_calificacion );
			    		 $("#"+current_id_profesor).find(".num_calificacion").html( data.profesor.num_calificacion );
			    		 $("#"+current_id_profesor).find(".buena_gente").html( data.profesor.buena_gente );
						

						//Cierra pop Up
						$(".loading").hide();
						$.fancybox.close();
					}

				}
			});

        }
    	
	});

	$(".remove-image").on("click", function(){
		$(".lbl-inputFile").removeClass("disabled");
		$(this).hide();
		$("#preview-image-edit").attr("src", "img/default.png");
		$("#file-image-edit").attr('required', 'required');
	})

});



/*Desactivar Profesor*/

function desactivar_profesor(){
	//aparece loading
	$(".loading").fadeIn();
	$.post('includes/responses.php', {id_profesor: current_id_profesor}, function(data) {
		/*optional stuff to do after success */
		//Si success es "true" 
		if ( data.success ) {
			//Cierra pop Up
			$(".loading").hide();
			$.fancybox.close();
			//Remueve clase "active" a la fila
			$(".current").removeClass("active current");
		}

	}, 'json');
	

}

/*Activar Profesor*/

function activar_profesor(){
	//aparece loading
	$(".loading").fadeIn();
	$.post('includes/responses.php', {id_profesor: current_id_profesor}, function(data) {
		/*optional stuff to do after success */
		//Si el json llego y "true" todo OK
		if ( data.success ) {
			//Cierra pop Up
			$(".loading").hide();
			$.fancybox.close();
			//Remueve clase "active" a la fila
			$(".current").addClass("active current");
			$(".current").removeClass("current");
		}

	}, 'json');
	

}


/*Asignar id universidad*/
function set_current_id(id){
	current_id_profesor = id;
}