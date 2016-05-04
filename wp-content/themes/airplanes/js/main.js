(function($, window, document, undefined) {

    function Squares() {
        $(".square").each(function() {
            var width = $(this).width();
            $(this).height(width);
        });
    }

    function nagivation() {
        $(".page_item_has_children").hover(function() {
            var child = $(this).find('.children');
            child.show();
        }, function() {
            var child = $(this).find('.children');
            child.hide();
        });
    }

    function init() {
        Squares();
        nagivation();

        $("#to-top").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        if ($("#map").length) {
            var map = new GMaps({
                el: '#map',
                lat: 32.8250144,
                lng: -116.9763854
            });

            map.addMarker({
                lat: 32.8249403,
                lng: -116.9741766,
                title: 'San Diego Aircraft Sales',
            });    
        }      

        if ($("#testimonialSlideshow").length) {
            $("#testimonialSlideshow").skippr();
        }  

        $('.page_item_has_children .children').hide();
    };

    $(document).ready(function() {
        init();
    });

    

})(jQuery, window, document);