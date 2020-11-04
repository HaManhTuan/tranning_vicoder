const { ready } = require("jquery");

$(document).ready(function () {
    var url      = window.location.pathname;
    $('header .primary-menu-wrapper .primary-menu > li  a[href="'+url+'"]').addClass('active');
    $('.toggle-wrap').on('click', function() {
        $(this).toggleClass('active');
        $('.fl-mobile-nav').animate({width: 'toggle'}, 200);
    });
    $('.close').on('click', function() {
        $('.toggle-wrap').removeClass('active');
        $('.fl-mobile-nav').animate({width: 'toggle'}, 200);

    });

    $("#header-search").click(function(){
        $("form").slideToggle(100);
      });
    $('#lightSlider').lightSlider({
        gallery: true,
        autoWidth: false,
        adaptiveHeight:false,
        item: 1,
        loop:true,
        slideMargin: 0,
        thumbItem:4
    });
    $('.owl-carousel').owlCarousel({
        nav:false,
        dots: true,
        items:1,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:50000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $("#form-contact").validate({
        submitHandler: function(form) {
          form.submit();
        }
    });
});
