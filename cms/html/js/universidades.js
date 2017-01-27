var current_id_universidad = 0;

jQuery(document).ready(function($) {

	//Eventos
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

	//PopUp: Nueva Universidad
	$(".pop-nueva-universidad").fancybox({
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
		}
	});

	//PopUp: Editar Universidad
	$(".pop-edit-universidad").fancybox({
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
			
			var nombre = $.trim($("#"+current_id_universidad).find(".nombre").text());
			var pais = $.trim($("#"+current_id_universidad).find(".pais").data("codigo"));
			var carreras = $.trim($("#"+current_id_universidad).find(".carreras").text());
			var dominio = $.trim($("#"+current_id_universidad).find(".dominio").text());

			$("#form-editar-universidad").find("#id_universidad").val( current_id_universidad );
			$("#form-editar-universidad").find("#universidad").val( nombre );
			$("#form-editar-universidad").find("#pais").val( pais );
			$("#form-editar-universidad").find("#dominio").val( dominio );

		}
	});
	


	//Validation Nueva Universidad
	$('#form-nueva-universidad').submit(function(e) {
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
					tr  ='<tr data-id="'+data.universidad.id+'" id="'+data.universidad.id+'">';
						tr +='<td colspan="2" class="nombre"><a href="#" class="title">'+data.universidad.nombre+' </a></td>';
						tr +='<td class="pais" data-codigo="'+data.universidad.codigo_pais+'">'+data.universidad.pais+'</td>';
						tr +='<td class="carreras">'+data.universidad.carreras+'</td>';
						tr +='<td class="dominio">'+data.universidad.dominio+'</td>';
						tr +='<td><a href="#edit-universidad" class="edit pop-edit-universidad"></a><a href="profesores.php" class="view"></a></td>';
					tr +='</tr>';

					$(tr).insertBefore('.data-list tbody tr:eq(0)');

					reload_events();
					
				}

    		}, 'json'); 

        }
    	
	});


	//Validation Editar Universidad
	$('#form-editar-universidad').submit(function(e) {
		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            

    		$.post("includes/responses.php", $(this).serialize(), function(data){

    			if ( data.success ) {
					//Cierra pop Up
					$(".loading").hide();
					$.fancybox.close();
					
					$("#"+current_id_universidad).find(".nombre a").html( data.universidad.nombre )
					$("#"+current_id_universidad).find(".pais").html( data.universidad.pais )
					$("#"+current_id_universidad).find(".pais").data("codigo", data.universidad.codigo_pais )
					$("#"+current_id_universidad).find(".carreras").html( data.universidad.carreras )
					$("#"+current_id_universidad).find(".dominio").html( data.universidad.dominio )
					
				}

    		}, 'json'); 

        }
    	
	});

});


/*Desactivar Universidad*/

function desactivar_universidad(){
	//aparece loading
	$(".loading").fadeIn();
	$.post('includes/responses.php', {id_universidad: current_id_universidad}, function(data) {
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

function activar_universidad(){
	//aparece loading
	$(".loading").fadeIn();
	$.post('includes/responses.php', {id_universidad: current_id_universidad}, function(data) {
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
	current_id_universidad = id;
}


