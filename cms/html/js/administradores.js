$(function(){
	$(".personal-information").find("input, select").focus(function(){
		$(this).parent().find("label").addClass("active");
	});
	$(".personal-information").find("input, select").focusout(function(){
		if ($(this).val() == "") {
			$(this).parent().find("label").removeClass("active");
		} else {
			$(this).parent().find("label").addClass("active");
		}
	});
});