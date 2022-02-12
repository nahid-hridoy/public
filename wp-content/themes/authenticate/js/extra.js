(function($) {
    "use strict";

     jQuery(document).ready(function($) {


        $(".sf-input-select option[value='0']").addClass('hideit');
        $(".sf-input-select option[value='0']").remove();

        /* CAROUSEL JS */
        $(".intro-carousel").owlCarousel({
            loop: true,
            margin: 0,
            items: 1,
            stagePadding: 0,
            autoplay: true,
            autoplayTimeout: 4000,
            lazyLoad: true,
            dots: true,
            dotsData: false,
            animateOut: "slideOutLeft",
            animateIn: "slideInRight",
            nav: false,
            navText: [
                "<i class='fas fa-chevron-left'></i>",
                "<i class='fas fa-chevron-right'></i>"
            ],
            responsiveClass: true,
            responsive: {
                0: {},
                480: {},
                768: {},
                992: {},
                1200: {}
            }
        });

        $(".hero-carousel").owlCarousel({
            loop: true,
            margin: 0,
            items: 1,
            stagePadding: 0,
            autoplay: true,
            autoplayTimeout: 6000,
            lazyLoad: true,
            dots: false,
            dotsData: false,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            nav: true,
            navText: [
                "<i class='fas fa-chevron-left'></i>",
                "<i class='fas fa-chevron-right'></i>"
            ],
            responsiveClass: true,
            responsive: {
                0: {},
                480: {},
                768: {},
                992: {},
                1200: {}
            }
        });

       
        $(".navbar-toggler").click(function(){
            $(".main-logo-1").addClass("none");
            $(".main-logo-2").addClass("block");
            
        });

        var url_main = $("#url_val").val();
        $("a.reg-link").click(function(){
            window.open(url_main,'_blank');
            
        });

        $("#DayBtn1").trigger('click');
        document.getElementById("DayBtn1").click();

        var containerEl = document.querySelector('.session-grid');

        //var mixer = mixitup(containerEl);

        var mixer = mixitup(containerEl, {
            animation: {
                effects: 'fade scale(0.5)'
            },
            controls: {
                toggleDefault: 'day1'
            },
            load: {
                filter: '.day1'
            }
        });




        // var mixer = mixitup(containerEl, {
        //     animation: {
        //         effects: 'fade scale(0.5)'
        //     },
        //     controls: {
        //         toggleDefault: 'on-demand'
        //     },
        //     load: {
        //         filter: '.on-demand'
        //     }
        // });

       

        $("details.speaker-acc").click(function(){


            if ($(this).attr('open')) {
                $(this).find(".normal-acc").removeClass("hide");
                 $(this).find(".expand-acc").removeClass("show");
            }else{
                 $(this).find(".expand-acc").addClass("show");
                 $(this).find(".normal-acc").addClass("hide");
            }
           
            
        });



    });





})(jQuery);


