

// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
                
	});
$(document).ready( function () {
  $(document).foundation();  
});
        







function previewFile() {
    if (document.querySelector('input[type=file]') != null) {
        var preview = document.getElementById('Pro_prev'); //selects the query named img
        var file = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file); //reads the data as a URL
        } else {
            preview.src = "";
        }
    }
}

previewFile(); 

