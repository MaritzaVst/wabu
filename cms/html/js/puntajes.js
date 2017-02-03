$(function(){
	$("html").click(function(){
		$("input").attr("disabled", "true");
		$("input").addClass("disabled");
	});
	$("input").click(function(e){
		e.stopPropagation();
	});
	$(".puntajes").find(".edit").click(function(e){
		e.stopPropagation();
		$(this).parents(".active").find("input").removeAttr("disabled");
		$(this).parents(".active").find("input").removeClass("disabled");
	});
});