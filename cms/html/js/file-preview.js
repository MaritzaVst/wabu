$(function(){
	$(".upload-btn").click(function(){
		var files = $(this).parent().find(".files");
		console.log(files);
		files.click();
	});
	$(".files").change(function () {
	  var reader = new FileReader();
	  var thisFile = $(this);
	  reader.onload = function (e) {
	      // get loaded data and render thumbnail.
	      thisFile.parent().find(".image").attr("src", e.target.result);
	  };
	  // read the image file as a data URL.
	  reader.readAsDataURL(this.files[0]);
	  thisFile.parent().find(".img-container").addClass("active");
	});
})


