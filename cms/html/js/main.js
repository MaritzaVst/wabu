//Common scripts
jQuery(document).ready(function($) {

	$(".pop-ups form input, .pop-ups form select").on("focus", function(){
		$(this).prev("label").addClass("focus");
	})
	$(".pop-ups form input, .pop-ups form select").on("blur", function(){
		$(this).prev("label").removeClass("focus");
	})

	if ( $(".main-content").length > 0 ) {
		var baside = $("body > aside").height();
		$(".main-content").css({ "min-height": baside });
	}

});
//Seleccionar la fila de la tabla.
function reload_events(){

	if ( $(".data-list table").length > 0 ) {
		//Escoger fila de la tabla, recoger id de universidad.
		$(".data-list table tbody tr").on("click", function(){
			$(".data-list table tbody tr").removeClass("current");
			$(this).addClass("current");
			$(".btn-disable").prop("disabled", false);
			
			//Asignando el ID actual seleccionado
			set_current_id( $(this).data("id") );

			if ( !$(this).hasClass("active")) {
				$(".btn-disable").hide();
				$(".btn-active").fadeIn();
			}else{
				$(".btn-disable").removeClass("disabled");
				$(".btn-disable").fadeIn();
				$(".btn-active").hide();
			}

		})
		/*Selecciona todas las filas*/
		$(".btn-select-all").on("click", function(){
			$(this).toggleClass("select");
			if($("tr.current").length == 1) {
				$(".data-list table tbody tr").removeClass("current");
			}
			$(".data-list table tbody tr").toggleClass("current");
		});
	}

}

//Preview Image
function onFileSelected(event, idImg) {

	if ( isValidExtension() ) {

		var selectedFile = event.target.files[0];
		var reader = new FileReader();

		var imgtag = document.getElementById(idImg);
		imgtag.title = selectedFile.name;

		reader.onload = function(event) {
			imgtag.src = event.target.result;
		};

		reader.readAsDataURL(selectedFile);
	  	if ( $(".error-image").length > 0 ) {
			$(".error-image").html("");
		}
		
	}else{
		if ( $(".error-image").length > 0 ) {
			$(".error-image").html("Este tipo de archivo no esta soportado");
		}
		
	}

}

//Valid Extensions Photo
var _validFileExtensions = [".jpg", ".jpeg", ".png"];    
function isValidExtension() {
	//Image only
    var arrInputs = document.getElementsByClassName("inputfile");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    return false;
                }
            }
        }
    }
  
    return true;
}