var current_id_categoria = 0;

jQuery(document).ready(function($) {

	//Eventos
	reload_events();

	

	//PopUp: Editar Universidad
	$(".pop-edit-categoria").fancybox({
		maxWidth	: 480,
		maxHeight	: 500,
		width 		: "90%",
		height      : "90%",
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
			
			var nombre = $.trim($("#"+current_id_categoria).find(".nombre").text()); 
			var pregunta = $.trim($("#"+current_id_categoria).find(".pregunta").text()); 
			var descripcion = $.trim($("#"+current_id_categoria).find(".descripcion").text()); 

			$("#form-editar-categoria").find("#id_categoria").val( current_id_categoria );
			$("#form-editar-categoria").find("#nombre_categoria").val( nombre );
			$("#form-editar-categoria").find("#pregunta").val( pregunta );
			$("#form-editar-categoria").find("#descripcion").val( descripcion );

		}
	});
	




	//Validation Editar Universidad
	$('#form-editar-categoria').submit(function(e) {
		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            

    		$.post("includes/responses.php", $(this).serialize(), function(data){

    			if ( data.success ) {
					//Cierra pop Up
					$(".loading").hide();
					$.fancybox.close();
					
					$("#"+current_id_categoria).find(".pregunta a").html( data.universidad.nombre )
					$("#"+current_id_categoria).find(".nombre").html( data.universidad.nombre )
					$("#"+current_id_categoria).find(".descripcion a").html( data.universidad.nombre )
					
				}

    		}, 'json'); 

        }
    	
	});

});



/*Asignar id universidad*/
function set_current_id(id){
	current_id_categoria = id;
}


