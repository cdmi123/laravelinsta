/* ----------------- Start Document ----------------- */
(function ($) {
    "use strict";

    $(document).ready(function () {

        /*----------------------------------------------------*/
        /* Dashboard Scripts
        /*----------------------------------------------------*/

        // Dashboard Nav Submenus
        $('.sidebar_inner ul li a').on('click', function (e) {
            if ($(this).closest("li").children("ul").length) {
                if ($(this).closest("li").is(".active-submenu")) {
                    $('.sidebar_inner ul li').removeClass('active-submenu');
                } else {
                    $('.sidebar_inner ul li').removeClass('active-submenu');
                    $(this).parent('li').addClass('active-submenu');
                }
                e.preventDefault();
            }
        });

        $('.profile').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots:false,
            navText:['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        $('.profile_mob').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots:false,
            navText:['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })













        // ------------------ End Document ------------------ //
    });

})(this.jQuery);
