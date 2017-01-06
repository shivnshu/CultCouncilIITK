$( document ).ready(function() {
    $(window).bind("load", function() {

        // $('.carousel-inner .item').css("background", "url(../images/home.png) !important");

    	// Adjust heigt of Left Sidebar
      $('.topBar').width( $(window).width() +12);
      $('.bottomBar').width( $(window).width() );
      $('.leftBar').height( $(window).height() - 50 );
      $('.sub-menu').css('left',($('.leftBar').width()));
      $('.sub-menu').css('top',$('.council-nav').height());
      $('.scrollBar').height($(window).height()*.72);




      $('#animateit').addClass('animated fadeInLeft'); //example animate.css


    	$(function() {
    	    $('.navigation li.has-sub').hoverIntent(function(){
    	        $(this).addClass("active").find('.sub-menu').fadeIn("fast");
    	    },
    	    function(){ //Close when not hovered
    	        $(this).removeClass("active").find('.sub-menu').fadeOut("fast");
    	    });
    	});

        $(function () {
            // Dealing with 1080 screens
            if($('body').height() > 800){
                // $('.logo').css("width", "150px");
                $('.navigation li a').css("font-size", "20px");
            }
            else{
                // $('.logo').css("width", "150px");
            }
        })

    });




    $('.navigation li.has-sub').click(function () {
        $(this).addClass("active").find('.sub-menu').fadeIn("fast");
    });

    $('.mobile-nav-toggle').click(function() {
      $('.mobile-nav').show(500);
    });

    $('#mobile-nav-clubs-btn').click(function() {
      $('.mobile-nav-clubs').show(500);
    });

    // $('.mobile-nav').dialog({modal: true});

    $(document).mouseup(function (e)
    {
        var container = $(".mobile-nav-clubs");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.hide(500);
        }
    });

    $(document).mouseup(function (e)
    {
        var container = $(".mobile-nav");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.hide(500);
        }
    });

    $('.gallery-box').hover(function () {
        $(this).addClass('animated pulse');
    }, function () {
        $(this).removeClass('animated pulse');
    });

    $('.team-content').hover(function () {
        $(this).addClass('animated pulse');
    }, function () {
        $(this).removeClass('animated pulse');
    });

});

$( document ).ready(function() {

	window.onresize = function() {
		// Adjust heigt of Left Sidebar
    $('.scrollBar').height($(window).height()*.72);
    $('.topBar').width( $(window).width() );
    $('.leftBar').height( $(window).height() - $('.topBar').height() - $('.bottomBar').height() );
    $('.bottomBar').width( $(window).width()  );
    $('.sub-menu').css('left',($('.leftBar').width()));
    $('.sub-menu').css('top',$('.council-nav').height());
    ///$('.council-nav').height(($(window).height() - 400)/6);
	};





});
