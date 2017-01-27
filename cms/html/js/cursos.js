var current_id_curso = 0;

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

	//PopUp: Nuevo Curso
	$(".pop-nuevo-curso").fancybox({
		maxWidth	: 480,
		maxHeight	: 380,
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
		beforeShow:function(){
			$(".data-list tr").removeClass("current");
		},
		beforeClose:function(){
			$("#form-nuevo-curso input").val("");
			$("#form-nuevo-curso select").val('').trigger("chosen:updated");
		}
	});

	//PopUp: Editar Curso
	$(".pop-edit-curso").fancybox({
		maxWidth	: 480,
		maxHeight	: 380,
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
		beforeShow:function(){

			$(".data-list tr").removeClass("current");
			var arrIDS = [];
			$("#"+current_id_curso).find(".profesores li").each(function(index, el) {
				var id = $(this).data("id-profesor");
				
				arrIDS.push( id );

			});
			$("#chosen-profesores-edit").val(arrIDS);
			$('#chosen-profesores-edit').trigger('chosen:updated');

			$("#form-editar-curso").find(".codigo").val( $.trim( $("#"+current_id_curso ).find(".codigo").text() ) );
			$("#form-editar-curso").find(".nombre").val( $.trim( $("#"+current_id_curso ).find(".nombre").text() ) );
		},
		
	});

	//PopUp: Detalle Curso
	$(".pop-detail").fancybox({
		maxWidth	: 480,
		maxHeight	: 380,
		width 		: "90%",
		height      : "80%",
		autoSize	: false,
		closeClick	: false,
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		beforeShow:function(){

			$(".data-list tr").removeClass("current");
			$("#detail").find(".codigo").html( $.trim( $("#"+current_id_curso).find(".codigo").html() ) );
			$("#detail").find(".nombre").html( $.trim( $("#"+current_id_curso).find(".nombre").text() ) );
			$("#detail").find(".profesores").html( $.trim( $("#"+current_id_curso).find(".profesores").html() ) );

		}
	});

	//Choosen Select Profesores
	$(".chosen-profesores").chosen({no_results_text: "No se encontró profesores de nombre: "});

	//Validation Nueva Curso
	$('#form-nuevo-curso').submit(function(e) {
		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            

    		$.post("includes/responses.php", $(this).serialize(), function(data){

    			if ( data.success ) {
					//Cierra pop Up
					$(".loading").hide();
					$.fancybox.close();
					//Agregar Fila a la Lista
					var tr ="";
					tr+='<tr data-id="'+data.cursos.id+'" id="'+data.cursos.id+'">';
						tr+='<td class="codigo" >'+data.cursos.codigo+'</td>';
						tr+='<td class="text-center nombre">';
							tr+='<a href="#detail" class="title pop-detail">'+data.cursos.nombre+'</a>';
						tr+='</td>';
						tr+='<td>';
							tr+='<a href="#editar-curso" onclick="set_current_id('+data.cursos.id+');" class="edit pop-edit-curso"></a>';
							tr+='<div class="hidden">';
								tr+='<ul class="profesores">';
									var li="";

									$.each(data.cursos.profesores, function(arrayID,group) {
										li+='<li data-id-profesor="'+data.cursos.profesores[arrayID].id+'">';
											li+='<span class="apellido_profesor">'+data.cursos.profesores[arrayID].nombre+'</span>, ';
											li+='<span class="nombre_profesor">'+data.cursos.profesores[arrayID].apellido+'</span>';
										li+='</li>';
									});
									tr+= li;
								tr+='</ul>';
							tr+='</div>';
						tr+='</td>';
					tr+='</tr>';

					$(tr).insertBefore('.data-list tbody tr:eq(0)');

					reload_events();
					
				}

    		}, 'json'); 

        }
    	
	});


	//Validation Editar Curso
	$('#form-editar-curso').submit(function(e) {
		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            

    		$.post("includes/responses.php", $(this).serialize(), function(data){

    			if ( data.success ) {
					//Cierra pop Up
					$(".loading").hide();
					$.fancybox.close();
					
					$("#"+current_id_curso).find(".codigo").html( data.cursos.codigo );
					$("#"+current_id_curso).find(".nombre").html( data.cursos.nombre );

					var li="";

					$.each(data.cursos.profesores, function(arrayID,group) {
						li+="<li data-id-profesor='"+data.cursos.profesores[arrayID].id+"'>"+data.cursos.profesores[arrayID].nombre+"</li>";									    
					});

					$("#"+current_id_curso).find(".profesores").html( li );

					reload_events();
					
				}

    		}, 'json'); 

        }
    	
	});
});


/*Desactivar Universidad*/

function desactivar_curso(){
	//aparece loading
	$(".loading").fadeIn();
	$.post('includes/responses.php', {id_curso: current_id_curso}, function(data) {
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

/*Activar Universidad*/

function activar_curso(){
	//aparece loading
	$(".loading").fadeIn();
	$.post('includes/responses.php', {id_curso: current_id_curso}, function(data) {
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
	current_id_curso = id;
}
