(function($) {
  "use strict";

  // Preloader
  $(window).on('load', function() {
    $(".preloader").fadeOut(600);
    $('.stat-count').each(function() {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 2000,
        easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  });

  // Sticky Header & Back to Top
  $(window).on("scroll", function() {
    var fromTop = $(window).scrollTop();
    $(".header-sticky").toggleClass("active", fromTop > 100);
    if (fromTop > 300) {
      $('#backToTop').addClass('show');
    } else {
      $('#backToTop').removeClass('show');
    }
  });

  $('#backToTop').on('click', function(e) {
    e.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 500);
  });

  // Mobile Menu (SlickNav)
  $('#menu').slicknav({
    label: '',
    prependTo: '.responsive-menu',
    closedSymbol: '&#9658;',
    openedSymbol: '&#9660;'
  });

  // Hero Swiper
  if (typeof Swiper !== 'undefined') {
    new Swiper('.hero-swiper', {
      loop: true,
      speed: 900,
      autoplay: { delay: 5000, disableOnInteraction: false },
      pagination: { el: '.swiper-pagination', clickable: true },
      navigation: { nextEl: '.hero-button-next', prevEl: '.hero-button-prev' }
    });
  }

  // WOW Animations
  if (typeof WOW !== 'undefined') {
    new WOW({ offset: 50, mobile: false }).init();
  }

  // Magic Cursor (optional)
  $(document).on('mousemove', function(e) {
    var ball = document.getElementById('ball');
    if (ball) {
      ball.style.left = e.clientX + 'px';
      ball.style.top = e.clientY + 'px';
    }
  });

  // Gallery Lightbox (simple alert for demo)
  $('.gallery-item').on('click', function() {
    var imgSrc = $(this).find('img').attr('src');
    alert('Lightbox would open: ' + imgSrc);
  });

})(jQuery);