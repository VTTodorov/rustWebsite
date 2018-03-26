jQuery(document).ready(function () {
    jQuery('.content').niceScroll();

    jQuery('.content').children('section').each(function (index, elem) {
        jQuery(elem).attr('data-parallax-offset', index * -150);
    });


    jQuery('.content').panelSnap({
        onSnapStart: function(obj){
            console.log(obj);
            $('#particles-js').css('top',jQuery(obj).attr('data-parallax-offset') + "px");
        }
    });

    console.log("pizdec");

    particlesJS.load('particles-js', 'js/particles.json', function() {
        console.log('callback - particles.js config loaded');
    });
});
