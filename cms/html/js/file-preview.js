$(function(){
	$(".upload-btn").click(function(){
		$("#files").click();
	});
	$("#files").change(function () {
	  var reader = new FileReader();
	  reader.onload = function (e) {
	      // get loaded data and render thumbnail.
	      $("#image").attr("src", e.target.result);
	  };
	  // read the image file as a data URL.
	  reader.readAsDataURL(this.files[0]);
	  $(".img-container").addClass("active");
	});
})


