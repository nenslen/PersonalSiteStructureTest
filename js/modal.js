$(document).ready(function(){

	
    $(".card-media").click(function(){

        // Don't zoom images with a no-zoom class
        if($(this).hasClass('no-zoom')) {
            return;
        }

    	$(".modal-content").css('animation-name', 'animatezoom');


    	// Display media in modal
    	if(this.id.toLowerCase().includes('png') === true) {

    		// Image
    		$(".modal-content").html('<img id="modal-media" src="media/' + this.id + '" style=""></img>');
    	} else if(this.id.toLowerCase().includes('webm') === true) {

    		// Webm
    		$(".modal-content").html('<video controls autoplay loop muted><source src="media/' + this.id + '" type="video/webm"></video>');
    	}


        $('#modal').css('display','flex');
    });



    $("#modal").click(function() {

    	// Shrink modal
    	if($(".modal-content").css('animation').includes('animatezoom')) {
    		$(".modal-content").css('animation-name', 'animateshrink');
    	}

    	// Close modal
    	var mod = this;
    	setTimeout(function() {
    	  mod.style.display='none';
    	}, 450);
    });
});