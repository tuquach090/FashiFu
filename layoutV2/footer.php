<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Copyright Reserved 2022 FaShiFu</p>
            </div>
        </div>
    </div>
</footer>


<!----------------------------Footer End-------------------------->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="slider/owl.carousel.js"></script>  



<script>
    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this),
                settings = $.extend({
                    format: "dropdown",
                    sticky: false
                }, options);
            return this.each(function() {
                $(this).find(".button").on('click', function() {
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideToggle().removeClass('open');
                    } else {
                        mainmenu.slideToggle().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').show();
                        }
                    }
                });
                cssmenu.find('li ul').parent().addClass('has-sub');
                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideToggle();
                        } else {
                            $(this).siblings('ul').addClass('open').slideToggle();
                        }
                    });
                };
                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');
                if (settings.sticky === true) cssmenu.css('position', 'fixed');
                resizeFix = function() {
                    var mediasize = 1000;
                    if ($(window).width() > mediasize) {
                        cssmenu.find('ul').show();
                    }
                    if ($(window).width() <= mediasize) {
                        cssmenu.find('ul').hide().removeClass('open');
                    }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);
            });
        };
    })(jQuery);

    (function($) {
        $(document).ready(function() {
            $("#cssmenu").menumaker({
                format: "multitoggle"
            });
        });
    })(jQuery);
</script>

<script>
    $(document).ready(function() {

        var owl1 = $("#owl-demo1");
        var owl12 = $("#owl-demo12");
        var owl13 = $("#owl-demo13");
        var owl14 = $("#owl-demo14");

        owl1.owlCarousel({

            items: 5, //10 items above 1000px browser width
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: [460, 2], // itemsMobile disabled - inherit from itemsTablet option
            autoplaySpeed: 100

        });

        // Custom Navigation Events
        $(".next1").click(function() {
            owl1.trigger('owl.next');
        })
        $(".prev1").click(function() {
            owl1.trigger('owl.prev');
        })
        $(".play").click(function() {
            owl1.trigger('owl.play', 1000);
        })
        $(".stop").click(function() {
            owl1.trigger('owl.stop');
        })
        owl12.owlCarousel({

            items: 5, //10 items above 1000px browser width
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: [460, 2], // itemsMobile disabled - inherit from itemsTablet option
            autoplaySpeed: 100

        });

        // Custom Navigation Events
        $(".next1").click(function() {
            owl12.trigger('owl.next');
        })
        $(".prev1").click(function() {
            owl12.trigger('owl.prev');
        })
        $(".play").click(function() {
            owl12.trigger('owl.play', 1000);
        })
        $(".stop").click(function() {
            owl12.trigger('owl.stop');
        })
        owl13.owlCarousel({

            items: 5, //10 items above 1000px browser width
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: [460, 2], // itemsMobile disabled - inherit from itemsTablet option
            autoplaySpeed: 100

        });

        // Custom Navigation Events
        $(".next1").click(function() {
            owl13.trigger('owl.next');
        })
        $(".prev1").click(function() {
            owl13.trigger('owl.prev');
        })
        $(".play").click(function() {
            owl13.trigger('owl.play', 1000);
        })
        $(".stop").click(function() {
            owl13.trigger('owl.stop');
        })
        owl14.owlCarousel({

            items: 5, //10 items above 1000px browser width
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: [460, 2], // itemsMobile disabled - inherit from itemsTablet option
            autoplaySpeed: 100

        });

        // Custom Navigation Events
        $(".next1").click(function() {
            owl14.trigger('owl.next');
        })
        $(".prev1").click(function() {
            owl14.trigger('owl.prev');
        })
        $(".play").click(function() {
            owl14.trigger('owl.play', 1000);
        })
        $(".stop").click(function() {
            owl14.trigger('owl.stop');
        })

    });
</script>

<script>
    $(document).ready(function() {

        var owl2 = $("#owl-demo2");

        owl2.owlCarousel({

            items: 3, //10 items above 1000px browser width
            itemsDesktop: [1000, 2], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: [460, 1], // itemsMobile disabled - inherit from itemsTablet option
            autoplaySpeed: 400

        });

        // Custom Navigation Events
        $(".next2").click(function() {
            owl2.trigger('owl.next');
        })
        $(".prev2").click(function() {
            owl2.trigger('owl.prev');
        })
        $(".play").click(function() {
            owl2.trigger('owl.play', 1000);
        })
        $(".stop").click(function() {
            owl2.trigger('owl.stop');
        })

    });
</script>

<script>
    $(document).ready(function() {

        var owl3 = $("#owl-demo3");

        owl3.owlCarousel({

            items: 1, //10 items above 1000px browser width
            itemsDesktop: [1000, 1], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
            itemsTablet: [600, 1], //2 items between 600 and 0;
            itemsMobile: [460, 1], // itemsMobile disabled - inherit from itemsTablet option
            autoplaySpeed: 600

        });

        // Custom Navigation Events
        $(".next3").click(function() {
            owl3.trigger('owl.next');
        })
        $(".prev3").click(function() {
            owl3.trigger('owl.prev');
        })
        $(".play3").click(function() {
            owl3.trigger('owl.play', 1000);
        })
        $(".stop3").click(function() {
            owl3.trigger('owl.stop');
        })

    });
</script>


<script>
    $(document).ready(function() {

        var owl = $("#owl-demo4");

        owl.owlCarousel({

            items: 2, //10 items above 1000px browser width
            itemsDesktop: [1000, 2], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: [460, 2], // itemsMobile disabled - inherit from itemsTablet option
            autoplaySpeed: 800

        });

        // Custom Navigation Events
        $(".next4").click(function() {
            owl.trigger('owl.next');
        })
        $(".prev4").click(function() {
            owl.trigger('owl.prev');
        })
        $(".play").click(function() {
            owl.trigger('owl.play', 1000);
        })
        $(".stop").click(function() {
            owl.trigger('owl.stop');
        })

    });
</script>
<script src="js/app.js"></script>



</body>

</html>