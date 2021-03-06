(function ($) {

    'use strict';

    // ------------------------------------------------------- //
    // Auto Hide
    // ------------------------------------------------------ //	
    $(".basic-scroll").niceScroll({
        railpadding: {
            top: 0,
            right: -2,
            left: 0,
            bottom: 0
        },
        scrollspeed: 60,
        zindex: 1,
        autohidemode: "leave",
        cursorwidth: "4px",
        cursorcolor: "rgba(52, 40, 104, 0.2)",
        cursorborder: "rgba(52, 40, 104, 0.2)"
    });
	
    // ------------------------------------------------------- //
    // Always Visible
    // ------------------------------------------------------ //	
    $(".visible-scroll").niceScroll({
        railpadding: {
            top: 0,
            right: -2,
            left: 0,
            bottom: 0
        },
        scrollspeed: 60,
        zindex: 1,
        autohidemode: false,
        cursorwidth: "4px",
        cursorcolor: "rgba(52, 40, 104, 0.2)",
        cursorborder: "rgba(52, 40, 104, 0.2)"
    });
	
    // ------------------------------------------------------- //
    // Horizontal Scrollbar
    // ------------------------------------------------------ //	
    $(".horizontal-scroll").niceScroll({
        railpadding: {
            top: 0,
            right: -10,
            left: 0,
            bottom: -10
        },
        scrollspeed: 60,
        zindex: 1,
        autohidemode: false,
		horizrailenabled: true,
		railvalign: "bottom",
        cursorwidth: "4px",
        cursorcolor: "rgba(52, 40, 104, 0.2)",
        cursorborder: "rgba(52, 40, 104, 0.2)"
    });
	
    // ------------------------------------------------------- //
    // Grab Content
    // ------------------------------------------------------ //	
    $(".grab-scroll").niceScroll({
        railpadding: {
            top: 0,
            right: -10,
            left: 0,
            bottom: -10
        },
        scrollspeed: 60,
        zindex: 1,
		emulatetouch: true,
		grabcursorenabled: true,
        autohidemode: false,
		horizrailenabled: true,
		railvalign: "bottom",
        cursorwidth: "4px",
        cursorcolor: "rgba(52, 40, 104, 0.2)",
        cursorborder: "rgba(52, 40, 104, 0.2)"
    });

})(jQuery);