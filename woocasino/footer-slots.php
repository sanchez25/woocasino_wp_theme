
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slick/slick.min.js"></script>
<script>
    jQuery(document).ready(function ($) {

        $("#owl-slider").owlCarousel ({
            navigation: true,
            dots: true,
            nav: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1, 
            animateOut: false, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

        $("#owl-new-games").owlCarousel ({
            navigation: true,
            dots: false,
            nav: true,
            navText: ["<img class='arrow-prev' src='<?php echo get_template_directory_uri() ?>/images/left.svg' width='20' height='20' alt='Arrow prev'>", "<img class='arrow-next' src='<?php echo get_template_directory_uri() ?>/images/left.svg' width='20' height='20' alt='Arrow next'>"],
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 9, 
            animateOut: false, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
              0: {
                  items: 1,
              },
              426: {
                  items: 2,
              },
              590: {
                  items: 3,
              },
              768: {
                  items: 4,
              },
              940: {
                  items: 5,
              },
              1093: {
                  items: 4,
              },
              1180: {
                  items: 5,
              },
              1360: {
                  items: 6,
              },
              1540: {
                  items: 7,
              },
              1700: {
                  items: 8,
              },
              1880: {
                  items: 9,
              }
            }
        });

        $("#owl-all-games").owlCarousel ({
            navigation: true,
            dots: false,
            nav: true,
            navText: ["<img class='arrow-prev' src='<?php echo get_template_directory_uri() ?>/images/left.svg' width='20' height='20' alt='Arrow prev'>", "<img class='arrow-next' src='<?php echo get_template_directory_uri() ?>/images/left.svg' width='20' height='20' alt='Arrow next'>"],
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 9, 
            animateOut: false, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
              0: {
                  items: 1,
              },
              426: {
                  items: 2,
              },
              590: {
                  items: 3,
              },
              768: {
                  items: 4,
              },
              940: {
                  items: 5,
              },
              1093: {
                  items: 4,
              },
              1180: {
                  items: 5,
              },
              1360: {
                  items: 6,
              },
              1540: {
                  items: 7,
              },
              1700: {
                  items: 8,
              },
              1880: {
                  items: 9,
              }
            }
        });

        $(".slick-slider").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            vertical: true,
            autoplay: true,
            autoplaySpeed: 2000,
            verticalSwiping: true
        });

        $('.menu-mobile-button').on('click', function() {
  			  $('.mobile-menu').addClass('active');
		    });

        $('.close-icon').on('click', function() {
            $('.mobile-menu').removeClass('active');
        });

        $(".language-block").click(function () {
            $("#languages").slideToggle(300);
            return false;
        });

        $('.single-slots-demo-back-play').on('click', function() {
          $('.single-slots-demo-back').removeClass('play');
          $('.single-slots-demo-block').addClass('play');
		});

        document.querySelector('.full-btn').addEventListener('click', function(){
          if(document.documentElement.webkitRequestFullscreen) {
            document.querySelector('.demo-iframe').webkitRequestFullscreen();
          }
          else{
            document.documentElement.mozRequestFullScreen();
          }
        });

    });
</script>
</body>
</html>
