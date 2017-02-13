$(function(){
	/*Floating Label Effect*/
		$(".content-form").on("focus", "input, select", function(){
			var father = $(this)
			father.parent().find("label").addClass("active");

			/*Add select placeholder*/
			if ($(".datetime").length != 0) {
				setTimeout(function(){
					father.parent().find(".datetime").attr("placeholder", "DD/MM/AA");
				}, 100);
			}
			console.log("Evento heredado");
		});

		$(".content-form").on("focusout", "input, select", function(){
			if ($(this).val() == "") {
				$(this).parent().find("label").removeClass("active");

				/*Remove select placeholder*/
				$(".datetime").removeAttr("placeholder");
				
			} else {
				$(this).parent().find("label").addClass("active");
			}
		});

		/*Nice Select floating active*/
		$(".nice-select").on("click", function(){
			$(this).addClass("active");
		});

		/*Select*/
		$(".content-form").on("click", ".nice-select", function(){
			$(this).addClass("active");
			$(this).parent().find("label").addClass("active");
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