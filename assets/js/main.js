/*------------------------------------------------------------------------------------

JS INDEX
=============

01 - Main Slider
02 - Review Slider
03 - Back To Top
04 - Sticky Header
05 - xZoom
06 - Magnific PopUp
07 - Site Preloader
08 - Responsive Menu
-------------------------------------------------------------------------------------*/
(function ($) {
    "use strict";

    jQuery(document).ready(function($){
        /* 
        =================================================================
        01 - Main Slider
        =================================================================	
        */
        if($('.fiscal-slider-carousel').length){
            $('.fiscal-slider-carousel').owlCarousel({
                loop:true,
                margin:0,
                dots:false,
                nav:true,
                responsiveClass:true,
                mouseDrag:false,
                touchDrag:false,
                navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:1,
                        nav:true,
                    }
                }
            });

            $(".fiscal-slider-carousel").on("translate.owl.carousel", function(){
                $(".slide-caption h4, .slide-caption h2, .slide-caption p").removeClass("animated fadeInUp").css("opacity", "0");
                $(".slide-caption .fiscal-btn").removeClass("animated fadeIn").css("opacity", "0");
            });
            $(".fiscal-slider-carousel").on("translated.owl.carousel", function(){
                $(".slide-caption h4, .slide-caption h2, .slide-caption p").addClass("animated fadeInUp").css("opacity", "1");
                $(".slide-caption .fiscal-btn").addClass("animated fadeIn").css("opacity", "1");
            });
        }
        /* 
        =================================================================
        02 - Review Slider
        =================================================================	
        */
        if($('.review-carousel').length){
            $('.review-carousel').owlCarousel({
                loop:true,
                margin:0,
                dots:true,
                nav:false,
                autoplay:true,
                autoplayTimeout:5000,
                responsiveClass:false,
                mouseDrag:false,
                touchDrag:false,
                navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:1,
                    },
                    1000:{
                        items:1,
                    }
                }
            });
            $(".review-carousel").on("translate.owl.carousel", function(){
                $(".client-review > h3, .client-review > p").removeClass("animated fadeInUp").css("opacity", "0");
                $(".client-review > h4,.owl-carousel .owl-item img").removeClass("animated fadeIn").css("opacity", "0");
            });
            $(".review-carousel").on("translated.owl.carousel", function(){
                $(".client-review > h3, .client-review > p").addClass("animated fadeInUp").css("opacity", "1");
                $(".client-review > h4, .owl-carousel .owl-item img").addClass("animated fadeIn").css("opacity", "1");
            });
        }
        
        /* 
        =================================================================
        03 - Back To Top
        =================================================================	
        */
        if ($("body").length) {
            var btnUp = $('<div/>', {
                'class': 'btntoTop'
            });
            btnUp.appendTo('body');
            $(document).on('click', '.btntoTop', function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 700);
            });
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 200) $('.btntoTop').addClass('active');
                else $('.btntoTop').removeClass('active');
            });
        }

        /* 
        =================================================================
        04 - Sticky Header
        =================================================================	
        */
        if ($(".sticky").length) {
            var stickyTop = $(".sticky").offset().top;
            jQuery(window).scroll(function() {
                var windowTop = jQuery(window).scrollTop();
                if (windowTop > stickyTop) {
                    jQuery(".sticky").addClass("stuck fadeInDown animated");
                } else {
                    jQuery(".sticky").removeClass("stuck fadeInDown animated");
                }
            });
        }

        /* 
        =================================================================
        05 - xZoom
        =================================================================	
        */
        
        
        if($('body').length){
            $(".xzoom").xzoom({
                // top, left, right, bottom, inside, lens, fullscreen, #ID
                position: 'right', 
                // Fade in effect, when zoom is opening.
                fadeIn: true,
                // Fade transition effect, when switching images by clicking on thumbnails.
                fadeTrans: true,
                // Fade out effect, when zoom is closing.
                fadeOut: false,
                // Enable smooth effects
                smooth: true,
                // Smooth move effect of the big zoomed image in the zoom output window. 
                // The higher value will make movement smoother.
                smoothZoomMove: 3,
                // Smooth move effect of lens.
                smoothLensMove: 1,
                // Smooth move effect of scale.
                smoothScale: 6
            });
        }
   
        
        /* 
        =================================================================
        06 - Magnific PopUp
        =================================================================	
        */
        
        if($('body').length){
            $('.project-more a, .lightbox').magnificPopup({type:'image'});
            $('.popup').magnificPopup({type:'inline'});
        }
        /* 
        =================================================================
        07 - Site Preloader
        =================================================================	
        */

        if ($("#preloader").length) {
            (function() {
                var myDiv = document.getElementById("preloader"),
                    show = function() {
                        myDiv.style.opacity = "1";
                        setTimeout(hide, 3000); // 3 seconds
                    },
                    hide = function() {
                        jQuery(".fiscal-site-preloader").fadeOut(1000);
                    };
                show();
            })();
        }
        /* 
        =================================================================
        08 - Responsive Menu
        =================================================================	
        */
        $(".fiscal-mainmenu").slicknav({
            prependTo: ".fiscal-responsive-menu"
        });
        
    });

}(jQuery));	