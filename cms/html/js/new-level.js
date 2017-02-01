/*Hide and show options*/
$(function(){
	var select = $(".select-type"),
			inputPercentage = $(".input-type-percentage"),
			inputRango = $(".input-type-rango");

	select.change(function(){
		if (select.val() == 2) {
			inputPercentage.addClass("hidden");
			inputPercentage.find("input").removeAttr("required");
			inputRango.removeClass("hidden");
			inputRango.find("input").attr("required", "true");
		} else {
			inputPercentage.removeClass("hidden");
			inputPercentage.find("input").attr("required", "true");
			inputRango.addClass("hidden");
			inputRango.find("input").removeAttr("required");
		}		
	});
})