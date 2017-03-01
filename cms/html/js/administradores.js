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
		$("body").on("click", function(e){
			var target = e.target;
			
			$(".nice-select").each(function(){
				var click = !$(this).is(target) && $(this).has(target).length == 0;
				var parent = $(this).parent();
				if (click && parent.find("select").val() == "" && parent.find("label").hasClass("active")) {
					parent.find("label").removeClass("active");
					$(this).removeClass("active");
				}
			});
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