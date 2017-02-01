$(function(){

	/*Floating Label Effect*/

	$(".content-form").find("input, select").focus(function(){
		$(this).parent().find("label").addClass("active");
	});
	$(".content-form").find("input, select").focusout(function(){
		if ($(this).val() == "") {
			$(this).parent().find("label").removeClass("active");
		} else {
			$(this).parent().find("label").addClass("active");
		}
	});

	/*Checkbox Click*/
	$(".permisos").find("input").click(function(){
		if($(this).is(":checked")){
			$(this).addClass("checked");
		} else {
			$(this).removeClass("checked");
		}
	});
});