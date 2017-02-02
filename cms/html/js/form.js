$(function(){
	/*Elimina información añadida*/
	$(".btn-delete").click(function(){
		$(this).parents(".user-information").remove();
	});
})