$(function(){
	/*Añade template de info academica y laboral*/
	var infoAcademic = $("#academic-template").html();
	var infoLaboral = $("#laboral-template").html();
	$(".add-information").click(function(){
		$(this).parent().find(".new-laboral-information").append(infoLaboral);
	});
	$(".add-information").click(function(){
		$(this).parent().find(".new-academic-information").append(infoAcademic);
	});
	/*Pasa el evento click de un elemento existente al button delete que existirá después de cargar la página*/
	$(".content-form").on("click", ".btn-delete", function(){
		/*Elimina información añadida*/
			$(this).parents(".user-information").remove();
	});
})