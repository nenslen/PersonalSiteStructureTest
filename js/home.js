window.addEventListener("beforeunload", function(event) {
	console.log("scrolling");
    window.scrollTo(0, 0);
});


var initialHeight = 0;

$(function() {
	//console.log("kdjf");
	//$(this).scrollTop(0);
	initialHeight = $('#header').outerHeight();
});

$(document).on("scroll", function(){

	var scrollDistance = $(document).scrollTop();
	var wrapperMargin = parseInt($(".wrapper").css("marginTop"));
	var target = wrapperMargin - 45;

	//$('#header').height(initialHeight - scrollDistance);
	if(scrollDistance > target){
		$("#header").removeClass("header-large");
		$("#header").addClass("header-small");
	} else {
		$("#header").removeClass("header-small");
		$("#header").addClass("header-large");
	}
});
