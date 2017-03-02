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


	$(".content-form").on("click", ".btn-delete", function(){/*Pasa el evento click de un elemento existente al button delete que existirá después de cargar la página*/
		/*Elimina información añadida*/
			$(this).parents(".user-information").remove();
	});

	
	$(".content-form").on("click", ".toggle-button", function(){/*Pasa el evento click de un elemento existente al button delete que existirá después de cargar la página*/
		/*toggle disabled de btn fecha actual*/
		var enDate = $(this).parents(".user-information").find(".end-date");
		if ($(this).is(":checked")) {
			$(this).addClass("select");
			enDate.attr("disabled", "true");
			enDate.removeAttr("required");
		} else {
			$(this).removeClass("select");
			enDate.removeAttr("disabled");
			enDate.attr("required", "true");
		}
	});

	/*Award type*/
	var diario = $("#daily-form-template").html();
	var semanal = $("#weekly-form-template").html();
	var mensual = $("#monthly-form-template").html();
	$(".input-type").change(function(){
		var selectValue = $(this).parent().find("select");
		if(selectValue.val() == 1) {
			$(".award-dates").html("");
			$(".award-dates").append(diario);
		} else if (selectValue.val() == 2) {
			$(".award-dates").html("");
			$(".award-dates").append(semanal);
		} else if (selectValue.val() == 3) {
			$(".award-dates").html("");
			$(".award-dates").append(mensual);
		}
	});
})