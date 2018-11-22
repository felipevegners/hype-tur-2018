$(document).ready(function(){

    $('.promo-package').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        animateOut: 'fadeOut',
        mouseDrag: false,
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

    $('.single-testimonial').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
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

    $('.more-info-btn').click(function() {
        var owl = $('.promo-package');
        owl.trigger('stop.owl.autoplay');
        $('.destination-about').slideDown(450);
        $('html, body').animate({
            scrollTop: $(".destination-about").offset().top + 60
        }, 450);
    });

  });

function myFunction(e) {
    var elems = document.querySelector(".menu-active");
    if(elems !==null){
     elems.classList.remove("menu-active");
    }
   e.target.className = "nav-link menu-active";
  }