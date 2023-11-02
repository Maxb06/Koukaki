/* Apparition titres au scroll */

$(document).ready(function() {
    function animateTextOnScroll() {
      var windowHeight = $(window).height();
      var scrollPosition = $(window).scrollTop();
  
      $("h2 span.fade-in-text").each(function() {
        var elementTop = $(this).offset().top;
  
        if (scrollPosition > elementTop - windowHeight + 200) {
          $(this).addClass("visible");
        } else {
          $(this).removeClass("visible");
        }
      });
    }
  
    animateTextOnScroll();
  
    $(window).scroll(function() {
      animateTextOnScroll();
    });
  });

/* Init Swiper */

  jQuery(document).ready(function ($) {
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      spaceBetween: 90,
      coverflowEffect: {
        rotate: 30, 
        stretch: 0, 
        depth: 150, 
        modifier: 1, 
        slideShadows: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      initialSlide: 1,
    });
  });

/* Nuages */

jQuery(document).ready(function($) {
  function animateClouds() {
    $('.container-nuages').css({ transform: 'translateX(-300px)' }); // 300px vers la gauche
  }
  var placeSection = document.querySelector('#place');
  var observer = new IntersectionObserver(
    function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          animateClouds();
          observer.unobserve(entry.target); 
        }
      });
    },
    { threshold: 0.5 } 
  );
  observer.observe(placeSection);
});

/* Menu Burger */

$(".menu-toggle").on('click', function() { 
  $(".menu-burger").show();
  $(".menu-toggle").hide(); 
  $(".close-menu").show();
  $("#site-navigation").addClass("toggled");
});

$(".close-menu").on('click', function() {
  $(".menu-burger").hide();
  $(".menu-toggle").show(); 
  $(".close-menu").hide();
  $("#site-navigation").removeClass("toggled");
});

$(".menu-burger ul li a").on('click', function() {
  $(".menu-burger").hide();
  $(".menu-toggle").show(); 
  $(".close-menu").hide();
  $("#site-navigation").removeClass("toggled");
});


