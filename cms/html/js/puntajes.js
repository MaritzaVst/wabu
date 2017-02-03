$(function(){
	$("html").click(function(){
		$("input[type='number']").attr("disabled", "true");
		$("input[type='number']").addClass("disabled");
	});
	$("input").click(function(e){
		e.stopPropagation();
	});
	$(".puntajes").find(".edit").click(function(){
		$("input[type='number']").attr("disabled", "true");
		$("input[type='number']").addClass("disabled");
		$(this).parents(".active").find("input").removeAttr("disabled");
		$(this).parents(".active").find("input").removeClass("disabled");
	});
});