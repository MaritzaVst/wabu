$(function(){
	/*Floating Label Effect*/
		$(".content-form").on("focus", "input, select", function(){
			var father = $(this)
			father.parent().find("label").addClass("active");

			/*Add select placeholder*/
			if ($(".datetime").length != 0) {
				setTimeout(function(){
					father.parent().find(".datetime").attr("placeholder", "dd/mm/aa");
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

		/*Nice Select floating effect*/
		$(".content-form").on("click", ".nice-select", function(e){
			$(this).addClass("active");
			$(this).parent().find("label").addClass("active");
			if($(this).hasClass("open") && !$(this).find("li").is(e.target)) {
				$(this).removeClass("active");
				$(this).parent().find("label").removeClass("active");
			}
		});
		/*Hide Floating Effect when clicked out nice select*/
		$("body").on("click", function(e){
			var target = e.target;
			$(".nice-select").each(function(){
				var click = !$(this).is(target) && $(this).has(target).length == 0;
				var parent = $(this).parent();
				if (click && parent.find("select").val() == "" && parent.find("label").hasClass("active")) {
					parent.find("label").removeClass("active");
					$(this).removeClass("active");
				} else if (click) {
					$(this).removeClass("active");
				}
			});
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