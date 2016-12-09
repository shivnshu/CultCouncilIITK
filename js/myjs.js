$(window).bind("load", function() {
	// Adjust heigt of Left Sidebar
  $('.topBar').width( $(window).width() + 20);
  $('.leftBar').height( $(window).height() - 30 );
  $('.bottomBar').width( $(window).width() );

	$(function() {
	    $('.navigation li.has-sub').hoverIntent(function(){
	        $(this).addClass("active").find('.sub-menu').fadeIn("fast");
	    },
	    function(){ //Close when not hovered
	        $(this).removeClass("active").find('.sub-menu').fadeOut("fast");
	    });
	});

});

$( document ).ready(function() {
	window.onresize = function() {
		// Adjust heigt of Left Sidebar
    $('.topBar').width( $(window).width() + 15);
    $('.leftBar').height( $(window).height() - $('.topBar').height() - $('.bottomBar').height() );
    $('.bottomBar').width( $(window).width()  );
    ///$('.council-nav').height(($(window).height() - 400)/6);
	};
});
