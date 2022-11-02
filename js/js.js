$(document).ready(function () {


    jQuery('#info1').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide').css({ "display": "block" });
        } else {
            jQuery('.hide').css({ "display": "none" });
        }
    });
    jQuery('#info2').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide1').css({ "display": "block" });
        } else {
            jQuery('.hide1').css({ "display": "none" });
        }
    });
    jQuery('#blueinfo1').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide2').css({ "display": "block" });
        } else {
            jQuery('.hide2').css({ "display": "none" });
        }
    });
    jQuery('#info3').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide3').css({ "display": "block" });
        } else {
            jQuery('.hide3').css({ "display": "none" });
        }
    });
    jQuery('#info4').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide4').css({ "display": "block" });
        } else {
            jQuery('.hide4').css({ "display": "none" });
        }
    });
    jQuery('#info5').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide5').css({ "display": "block" });
        } else {
            jQuery('.hide5').css({ "display": "none" });
        }
    });
    jQuery('#blueinfo2').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide6').css({ "display": "block" });
        } else {
            jQuery('.hide6').css({ "display": "none" });
        }
    });
    jQuery('#info7').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide7').css({ "display": "block" });
        } else {
            jQuery('.hide7').css({ "display": "none" });
        }
    });
    jQuery('#info8').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide8').css({ "display": "block" });
        } else {
            jQuery('.hide8').css({ "display": "none" });
        }
    });
    jQuery('#info9').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide9').css({ "display": "block" });
        } else {
            jQuery('.hide9').css({ "display": "none" });
        }
    });
    jQuery('#info10').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide10').css({ "display": "block" });
        } else {
            jQuery('.hide10').css({ "display": "none" });
        }
    });
    jQuery('#info11').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide11').css({ "display": "block" });
        } else {
            jQuery('.hide11').css({ "display": "none" });
        }
    });
    jQuery('#info12').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide12').css({ "display": "block" });
        } else {
            jQuery('.hide12').css({ "display": "none" });
        }
    });
    jQuery('#info13').click(function () {
        open = !open;

        if (open) {
            jQuery('.hide13').css({ "display": "block" });
        } else {
            jQuery('.hide13').css({ "display": "none" });
        }
    });

    jQuery(function ($) {
        $(window).scroll(function fix_element() {
            $('.could-it-be-migrain').css(
                $(window).scrollTop() >= 0
                    ? { 'position': 'fixed', 'bottom': '20px', 'right': '20px' }
                    : { 'position': 'relative', 'bottom': 'auto', 'right': 'auto' }
            );
            return fix_element;
        }());
    });

    jQuery(function ($) {
        $(window).scroll(function fix_element() {
            $('.take-quiz-btn-round').css(
                $(window).scrollTop() >= 0
                    ? { 'position': 'fixed', 'bottom': '20px', 'right': '20px' }
                    : { 'position': 'relative', 'bottom': 'auto', 'right': 'auto' }
            );
            return fix_element;
        }());
    });

    /* Code for changing active 
              link on clicking */
    $(document).ready(function () {
        $(".nav-item").click(function () {
            $(".nav-item").removeClass("active");

            setTimeout(
                function () {
                    $(this).addClass("active");
                }, 5000);
           
        });
    });
 $(window).scroll(function () {
        var distance = $(window).scrollTop();
        $('.page-section').each(function (i) {

            if ($(this).position().top
                <= distance + 250) {

                $('.nav-pills a.active')
                    .removeClass('active');

                $('.nav-pills a').eq(i)
                    .addClass('active');
            
                }
            })
        
            
    }).scroll();
    $(window).scroll(function () {
        var distance = $(window).scrollTop();
        $('#Slider').each(function () {

            if ($("#Slider").position().top
                >= distance - 400 ) {

                $('.nav-pills a.active')
                    .removeClass('active');

            
                }
            })
        
            
    }).scroll();



});