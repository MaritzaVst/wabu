var current_id_carrera = 0;

jQuery(document).ready(function($) { 

	reload_events();

	//Nuevo
	$("#cantidad_ciclos").on("change", function(){
		display_ciclos_nuevo();
	})
	//Editar
	$("#cantidad_ciclos_edit").on("change", function(){

		display_ciclos_edit();
	})

	//PopUp: Desactivar
	$(".pop-desactivar").fancybox({

		autoSize	: true,
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
			var text = $(".current").find(".nombre").text();
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
		autoSize	: true,
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
			var text = $(".current").find(".nombre").text();
			$("#activar").find("h3").html(text);

		},
		beforeShow:function(){
			//Cerrar Pop Up si no ha seleccionado una fila
			if ( $(".data-list tr.current").length < 1 ) {
				$.fancybox.close();
			}
		}
	});

	//PopUp: Detalle Carrera
	$(".pop-detail").fancybox({
		autoSize	: true,
		closeClick	: false,
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		beforeShow:function(){

			$(".data-list tr").removeClass("current");
			$( ".box-show" ).html("");
			$( "#"+current_id_carrera ).find(".box-cursos").clone().appendTo( ".box-show" ).removeClass("hidden");

			$("#detail").find(".box-show .box-cursos .cursos").hide();
			$("#detail").find(".box-show .box-cursos .cursos:eq(0)").fadeIn();
			$("#detail").find("nav span").data("index", 0 );
			$("#detail").find("nav span").html( "1" );
		}
	});

	//PopUp: Nuevo Carrera
	$(".pop-nueva-carrera").fancybox({

		autoSize	: true,
		closeClick	: false,
		helpers     : { 
	        overlay : {closeClick: false}
	    },
	    wrapCSS    : 'fancy-carrera',
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : false,
		beforeShow:function(){
			$(".data-list tr").removeClass("current");
		}
	}); 

	//PopUp: Editar Carrera
	$(".pop-edit-carrera").fancybox({
		autoSize	: true,
		closeClick	: false,
		helpers     : { 
	        overlay : {closeClick: false}
	    },
	    wrapCSS    : 'fancy-carrera',
	    padding: 0,
		openEffect	: 'none',
		closeEffect	: 'none',
		closeBtn : false,
		beforeShow:function(){

			$(".data-list tr").removeClass("current");

			$("#form-editar-carrera").find(".carrera").val( $.trim( $("#"+current_id_carrera).find(".nombre").text() ) );
			$("#form-editar-carrera").find(".ciclos").val( $.trim( $("#"+current_id_carrera).find(".ciclos").text() ) );
			$("#form-editar-carrera").find("#id_carrera_edit").val( current_id_carrera );
			

			$("#"+current_id_carrera).find(".box-cursos .cursos").each(function(index, el) {

				var index_ciclo = index;
				var arrCursos = [];
				
				$(el).find("li").each(function(index_curso, el) {
					
					arrCursos.push( $(el).data("id-curso") );

					$(".selects-editar .item select").children('option[value="'+$(el).data("id-curso")+'"]').attr('disabled', true);
					
					$("#form-editar-carrera .item:eq("+index_ciclo+") select").val( arrCursos );

					$(".selects-editar .item:eq("+index_ciclo+") select").children('option[value="'+arrCursos[index_curso]+'"]').attr('disabled', false);

				});


			});

			if ( $(".edit_carrera input").is(":checked") ) {
				$("#form-editar-carrera .nav span").data("index", 0);
				$("#form-editar-carrera .nav span").html(1);
			}

			$('.selects-editar .item select').trigger("chosen:updated");

			maxShowEdit = parseInt( $("#cantidad_ciclos_edit").val( ) );

			display_ciclos_edit();

		},
		afterClose:function(){

			$(".selects-editar .item select").val("");
			$('.selects-editar .item select').trigger("chosen:updated");

		}
	}); 

	//Validacion si falta asginar cursos a los ciclos - Nuevo
	$("#form-nueva-carrera .btn-confirm").on("click", function(){

		if (!$("#form-nueva-carrera").parsley().isValid()) {

			alert("Los ciclos deben contar con almenos un curso, por favor asigne cursos.");
			
		}

	})

	//Validacion si falta asginar cursos a los ciclos - Editar
	$("#form-editar-carrera .btn-confirm").on("click", function(){

		if (!$("#form-editar-carrera").parsley().isValid()) {

			alert("Los ciclos deben contar con almenos un curso, por favor asigne cursos.");
			
		}

	})

	//Validation Nueva Carrera
	$('#form-nueva-carrera').submit(function(e) {

		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            
    		$.post("includes/responses.php", $(this).serialize(), function(data){

    			if ( data.success ) {
					//Cierra pop Up
					$(".loading").hide();
					$.fancybox.close();
					
					var $ciclos ="";

					//Data de los ciclos
					$.each(data.carreras.ciclos, function(arrayID,group) {

						$ciclos += '<ul class="cursos" data-ciclo="'+(arrayID+1)+'">';

							$.each( group , function(index, val) {

								$ciclos += '<li data-id-curso="'+val.id+'">'+val.nombre+'</li>';

							});

						$ciclos += '</ul>';

					})

						
					//Fila del listado de carreras
					var tr ="";
					
					tr+='<tr data-id="'+data.carreras.id+'" id="'+data.carreras.id+'">';
						tr+='<td class="nombre" >'+data.carreras.nombre+'</td>';
						tr+='<td class="text-center ciclos"><a href="#detail" class="title pop-detail">'+data.carreras.cantidad_ciclos+'</a></td>';
						tr+='<td>';
							tr+='<a href="#editar-carrera" onclick="set_current_id('+data.carreras.id+');" class="edit pop-edit-carrera"></a>';
							tr+='<div class="hidden box-cursos">'+$ciclos+'</div>';
						tr+='</td>';
					tr+='</tr>';


					$(tr).insertBefore('.data-list tbody tr:eq(0)');


					reload_events();
					
				}

    		}, 'json'); 

        }

    	
	});


	//Validation Editar Carrera
	$('#form-editar-carrera').submit(function(e) {

		e.preventDefault(); 
		$(".loading").fadeIn();
    	
    	if ( $(this).parsley().isValid() ) {
            
            
            $("#id_carrera").val( current_id_carrera );

    		$.post("includes/responses.php", $(this).serialize(), function(data){

    			if ( data.success ) {
					//Cierra pop Up
					$(".loading").hide();
					$.fancybox.close();
					
					var $ciclos ="";

					//Data de los ciclos
					$.each(data.carreras.ciclos, function(arrayID,group) {

						$ciclos += '<ul class="cursos" data-ciclo="'+(arrayID+1)+'">';

							$.each( group , function(index, val) {

								$ciclos += '<li data-id-curso="'+val.id+'">'+val.nombre+'</li>';

							});

						$ciclos += '</ul>';

					})

					$("#"+current_id_carrera).find(".box-cursos").html( $ciclos );
					//Fila del listado de carreras
					
					$("#"+current_id_carrera).find(".nombre").html( data.carreras.nombre );
					$("#"+current_id_carrera).find(".ciclos a").html( data.carreras.cantidad_ciclos );

					reload_events();
					
				}

    		}, 'json'); 

        }

    	
	});

	display_ciclos_nuevo();
	//display_ciclos_edit();

	//Choosen Select Profesores - Nuevo
	$(".selects-nuevo .item select").chosen({no_results_text: "No se encontró cursos de nombre: "});

	//Choosen Select Profesores - Editar
	$(".selects-editar .item select").chosen({no_results_text: "No se encontró cursos de nombre: "});



	//Validacion de cantidad de ciclos NUEVO.
	$(".selects-nuevo .item select").on("change", function(e, val){

	
		var str = $(this).val();
		

		if ( str ) {

			for (var i = 0; i < str.length; i++) {
				
				$(".selects-nuevo .item select").children('option[value="'+str[i]+'"]').attr('disabled', true);

			}

			for (var i = 0; i < str.length; i++) {
				
				$(this).children('option[value="'+str[i]+'"]').attr('disabled', false);

			}

			$('.selects-nuevo .item select').trigger("chosen:updated");

		}

		if ( val.deselected ) {


			$(".selects-nuevo .item select").children('option[value="'+val.deselected+'"]').attr('disabled', false);
			$('.selects-nuevo .item select').trigger("chosen:updated");

		}

	})

	//Validacion de cantidad de ciclos EDITAR.
	$(".selects-editar .item select").on("change", function(e, val){

	
		var str = $(this).val();
		

		if ( str ) {

			for (var i = 0; i < str.length; i++) {
				
				$(".selects-editar .item select").children('option[value="'+str[i]+'"]').attr('disabled', true);

			}

			for (var i = 0; i < str.length; i++) {
				
				$(this).children('option[value="'+str[i]+'"]').attr('disabled', false);

			}

			$('.selects-editar .item select').trigger("chosen:updated");

		}

		if ( val.deselected ) {


			$(".selects-editar .item select").children('option[value="'+val.deselected+'"]').attr('disabled', false);
			$('.selects-editar .item select').trigger("chosen:updated");

		}

	})

	//Muestra el primer selector de cursos.


	if ( $(".new_carrera input").is(":checked") ) {
		$(".selects-nuevo .item").hide();
		$(".selects-nuevo .item:eq(0)").fadeIn();
	}else{
		$(".selects-nuevo .item").hide();
		$(".selects-nuevo .item:eq(1)").fadeIn();
	}


	if ( $(".edit_carrera input").is(":checked") ) {
		$(".selects-editar .item").hide();
		$(".selects-editar .item:eq(0)").fadeIn();
	}else{
		$(".selects-editar .item").hide();
		$(".selects-editar .item:eq(1)").fadeIn();
	}


	//Checkboxs habilitar ciclo 0
	$(".new_carrera input").on("change", function(event){
		
		if ( !$(".new_carrera input").is(":checked") ) {

			$(".selects-nuevo .item:eq(0) select").prop("required", false);
			//alert("verificar si hay cursos en el select 0");
			if ( $(".selects-nuevo .item:eq(0) select").val() !== null ) {

				alert("Para eliminar un ciclo primero debe quitar los cursos asignados a este.");

				$(".new_carrera input").prop('checked', true);
			}

		}else{
			$(".selects-nuevo .item:eq(0) select").prop("required", true);
		}


	})

	$(".edit_carrera input").on("change", function(event){
		
		if ( !$(".edit_carrera input").is(":checked") ) {

			$(".selects-editar .item:eq(0) select").prop("required", false);

			//alert("verificar si hay cursos en el select 0");
			if ( $(".selects-editar .item:eq(0) select").val() !== null ) {

				alert("Para eliminar un ciclo primero debe quitar los cursos asignados a este.");

				$(".edit_carrera input").prop('checked', true);
			}

		}else{
			$(".selects-editar .item:eq(0) select").prop("required", true);
		}


	})

	//Navegacion entre ciclos.
	$("#form-nueva-carrera .prev").on("click", function(){

		var index = parseInt( $(this).parent().find("span").data("index") );

		
		if ( $(".new_carrera input").is(":checked") ) {

			if ( index > 0) {
				index --;
			}

		}else{
			if ( index > 1) {
				index --;
			}
		}

		if (index == 0) {
			$(".new_carrera input").prop("disabled", true);
		}else{
			$(".new_carrera input").prop("disabled", false);
		}

		$(this).parent().parent().find(".item").hide();
		$(this).parent().parent().find(".item:eq("+index+")").fadeIn();
		$(this).parent().find("span").data("index", index );
		$(this).parent().find("span").html( index );
		

		
	})

	$("#form-nueva-carrera .next").on("click", function(){

		var index = parseInt( $(this).parent().find("span").data("index") );
		maxShow = parseInt( $("#cantidad_ciclos").val() );

		if ( index < maxShow ) {

			if ( index < 13) {
				index ++;
			}

			$(this).parent().parent().find(".item").hide();
			$(this).parent().parent().find(".item:eq("+index+")").fadeIn();
			$(this).parent().find("span").data("index", index );
			$(this).parent().find("span").html( index );
		}
		
		if (index > 0 ) {
			$(".new_carrera input").prop("disabled", false);
		}else{
			$(".new_carrera input").prop("disabled", true);
		}

	})

	//Navegacion entre Ciclos / Editar

	$("#form-editar-carrera .prev").on("click", function(){

		var index = parseInt( $(this).parent().find("span").data("index") );

		
		if ( $(".edit_carrera input").is(":checked") ) {

			if ( index > 0) {
				index --;
			}

		}else{
			if ( index > 1) {
				index --;
			}
		}

		if (index == 0) {
			$(".edit_carrera input").prop("disabled", true);
		}else{
			$(".edit_carrera input").prop("disabled", false);
		}

		$(this).parent().parent().find(".item").hide();
		$(this).parent().parent().find(".item:eq("+index+")").fadeIn();
		$(this).parent().find("span").data("index", index );
		$(this).parent().find("span").html( index );

	})

	$("#form-editar-carrera .next").on("click", function(){

		var index = parseInt( $(this).parent().find("span").data("index") );
		maxShowEdit = parseInt( $("#cantidad_ciclos_edit").val() );
		

		if ( index < maxShowEdit ) {

			if ( index < 13) {
				index ++;
			}

			$(this).parent().parent().find(".item").hide();
			$(this).parent().parent().find(".item:eq("+index+")").fadeIn();
			$(this).parent().find("span").data("index", index );
			$(this).parent().find("span").html( index );
		}

		if (index > 0 ) {
			$(".edit_carrera input").prop("disabled", false);
		}else{
			$(".edit_carrera input").prop("disabled", true);
		}

	})


	$("#detail .prev").on("click", function(){

		var index = parseInt( $(this).parent().find("span").data("index") );

		if ( index > 0) {
			index --;
		}

		$(this).parent().parent().find(".box-show .box-cursos .cursos").hide();
		$(this).parent().parent().find(".box-show .box-cursos .cursos:eq("+index+")").fadeIn();
		$(this).parent().find("span").data("index", index );
		$(this).parent().find("span").html( index + 1 );
	})

	$("#detail .next").on("click", function(){

		var index = parseInt( $(this).parent().find("span").data("index") );
			
		var maxShowDetail = parseInt( $("#"+current_id_carrera).find(".ciclos").text() );

		if ( index < maxShowDetail-1) {

			if ( index < 12) {
				index ++;
			}

			$(this).parent().parent().find(".box-show .box-cursos .cursos").hide();
			$(this).parent().parent().find(".box-show .box-cursos .cursos:eq("+index+")").fadeIn();
			$(this).parent().find("span").data("index", index );
			$(this).parent().find("span").html( index + 1 );
		}
	})

});



var maxShow = jQuery("#cantidad_ciclos").val();
function display_ciclos_nuevo(  ){
	maxShow = 0;
	for (var i = 0; i < $(".item").length; i++) {
		if ( i > parseInt( $("#cantidad_ciclos").val() )  ) {

			
			var str = $(".selects-nuevo .item select:eq("+i+")").val();

			if ( str == null ) {
				$(".selects-nuevo .item:eq("+i+")").addClass("hidden");
				$(".selects-nuevo .item:eq("+i+") select").prop("required", false);
			}else{
				
				alert("Para eliminar un ciclo primero debe quitar los cursos asignados a este.");
				maxShow = parseInt( $("#cantidad_ciclos").val() ) ;
				$("#cantidad_ciclos").val(  maxShow );

				return false;
			}
			

		}else{

			maxShow++;
			$(".selects-nuevo .item:eq("+i+")").removeClass("hidden");
			$(".selects-nuevo .item:eq("+i+") select").prop("required", true);
			//$(".selects-nuevo .item select:eq("+i+")").children('option[value="'+str[i]+'"]').attr('disabled', false);
		}

	}
}

var maxShowEdit = jQuery("#cantidad_ciclos_edit").val();
function display_ciclos_edit( ){
	
	maxShowEdit = 0;
	for (var i = 0; i < $(".selects-editar .item").length; i++) {
		if ( i > parseInt( $("#cantidad_ciclos_edit").val() )  ) {

			
			var str = $(".selects-editar .item select:eq("+i+")").val();

			if ( str == null ) {
				$(".selects-editar .item:eq("+i+")").addClass("hidden");
				$(".selects-editar .item:eq("+i+") select").prop("required", false);
			}else{
				
				alert("Para eliminar un ciclo primero debe quitar los cursos asignados a este.");
				maxShowEdit = parseInt( $("#cantidad_ciclos_edit").val() ) + 1;
				$("#cantidad_ciclos_edit").val(  maxShowEdit );

				return false;
			}
			

		}else{

			maxShowEdit++;
			$(".selects-editar .item:eq("+i+")").removeClass("hidden");
			$(".selects-editar .item:eq("+i+") select").prop("required", true);
			//$(".selects-editar .item select:eq("+i+")").children('option[value="'+str[i]+'"]').attr('disabled', false);
		}

	}
}


/*Desactivar Universidad*/

function desactivar_curso(){
	//aparece loading
	$(".loading").fadeIn();
	$.post('includes/responses.php', {id_curso: current_id_carrera}, function(data) {
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
	$.post('includes/responses.php', {id_curso: current_id_carrera}, function(data) {
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
	current_id_carrera = id;
}
