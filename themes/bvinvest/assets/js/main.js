(function($) {
var windowWidth = $(window).width();

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.property-title').length){
  $('.property-title').matchHeight();
};
if($('.mHel2').length){
  $('.mHel2').matchHeight();
};
//$('[data-toggle="tooltip"]').tooltip();


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


/*
  Ronojit
*/
if( $('.dfpGrdSlider').length ){
    $('.dfpGrdSlider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

if( $('.dfpProgressAreaSlider').length ){
    $('.dfpProgressAreaSlider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

/*
mixitup  filter
*/
if( $('.mixContainer').length ){
  var config = document.querySelector('.mixContainer');
  var $sortSelect = $('#itemSort');
  var mixer = mixitup(config);
  
  $sortSelect.on('change', function(){
    mixer.sort(this.value);
  });
}

if (windowWidth <= 639) {
  $('.xs-cat-select').selectpicker();
}
$('.tab-btns-filter .tab-btns-filter-btn a.thisactive').on('click', function(e){
  e.preventDefault();
  $(this).parents('.tab-btns-filter').toggleClass('showtoggle');
});


/*
  Proshanto
*/
if( $('.hmTestimonialSlider0, .hmTestimonialSlider ul.listing').length ){
  $('.hmTestimonialSlider, .hmTestimonialSlider ul.listing').slick({
    pauseOnHover: false,
    autoplay: false,
    dots: false,
    infinite: true,
    arrows:true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $('.testimonialLeftArrow'),
    nextArrow: $('.testimonialRightArrow'),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          dots: true,
        }
      }
    ]
  });
}

if( $('.detailpagina-slider-sec').length ){
  $('.detailpagina-slider').slick({
    pauseOnHover: false,
    autoplay: false,
    dots: false,
    infinite: true,
    arrows:true,
    speed: 1000,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: $('.detailpaginaLeftArrow'),
    nextArrow: $('.detailpaginaRightArrow'),
    asNavFor: '.detailpagina-thumb-slider',
  });

  $('.detailpagina-thumb-slider').slick({
      dots: false,
      autoplay: false,
      infinite: true,
      speed: 1000,
      slidesToShow: 6,
      //slidesToScroll: 1,
      arrows:false,
      focusOnSelect: true,
      asNavFor: '.detailpagina-slider',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 5,
            //slidesToScroll: 1,
            //focusOnSelect: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            //slidesToScroll: 1
          }
        }
      ]
    });
}


var windowWidth = $(window).width();

if(windowWidth < 768){
  if( $('.pregressSlider').length ){
    $('.pregressSlider').slick({
        dots: true,
        autoplay: false,
        infinite: false,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows:true,
        prevArrow: $('.pregressLeftArrow'),
        nextArrow: $('.pregressRightArrow'),
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows:false,
              dots: true
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false,
              dots: true
            }
          }
        ]
      });
  }


  if( $('.detailTestimonialSlider').length ){
    $('.detailTestimonialSlider').slick({
      pauseOnHover: false,
      autoplay: false,
      dots: false,
      infinite: true,
      arrows:true,
      speed: 1000,
      //fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.detailTestimonialLeftArrow'),
      nextArrow: $('.detailTestimonialRightArrow'),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            dots: true
          }
        }
      ]
    });
  }
}


if( $('.sm-slider-filter-bar').length ){
  $('.sm-filter-link > a.lft-filter').on('click', function(e){
    e.preventDefault();
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    $('.huizen').css('opacity', '1');
    $('.opkomede').css('opacity', '0');
    $('.switch-btn > i').css('left', '3px');
  });

  $('.sm-filter-link > a.rgt-filter').on('click', function(e){
    e.preventDefault();
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    $('.huizen').css('opacity', '0');
    $('.opkomede').css('opacity', '1');  
    $('.switch-btn > i').css('left', '14px');
  });
}

if( $('.hmGrdSlider').length ){
  $('.hmGrdSlider').slick({
      dots: false,
      autoplay: false,
      infinite: true,
      speed: 1000,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows:true,
      prevArrow: $('.hmGrdSliderLeftArrow'),
      nextArrow: $('.hmGrdSliderRightArrow'),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        }
      ]
    });
  
  //init filter
  var initfilter = $('.slider-filter-bar a.active').attr('value');
  $('.hmGrdSlider').slick('slickFilter', initfilter).slick('refresh');
  //filter based on class
  $('.slider-filter-bar a').on('click', function(e){
    e.preventDefault();
    $('.slider-filter-bar a').removeClass('active');
    $(this).addClass('active');
    var filter = $(this).attr('value');
    var key = filter;
    $('.hmGrdSlider').slick('slickUnfilter');
    $('.hmGrdSlider').slick('slickFilter', key).slick('refresh');
    $('.hmGrdSlider').slick('slickGoTo', 0);
  });
}


//sm-popup-main-menu
var windowWidth = $(window).width();
if (windowWidth <= 991) {
  if( $('.md-menu-btn-bar').length ){
    $('.nav-opener-popup').on('click', function(){
      $('.md-popup-main-menu-wrap').fadeIn(500);
      $('.md-popup-main-menu-wrap').addClass('add-cls-show');
      $('.md-menu-close-btn-controller').addClass('with-popup');
      $('.header').addClass('show-up');
      $('body').addClass('bdyslroff');
    });
  };

  if( $('.md-popup-main-menu-wrap').length ){
    $('.md-menu-close-btn-controller').on('click', function(){
      $(this).removeClass('with-popup')
      $('.md-popup-main-menu-wrap').fadeOut(500);
      $('.md-popup-main-menu-wrap').removeClass('add-cls-show');
      $('.header').removeClass('show-up');
      $('body').removeClass('bdyslroff');
    });

    $('.md-popup-main-nav > ul > li.menu-item-has-children > a').on('click', function(e){
      e.preventDefault();
      $(this).parent().find('ul.sub-menu').slideToggle(500);
      $(this).toggleClass('sub-menu-expend')
    });
  };

}



/*
  Milon
*/
if (windowWidth <= 767) {
  $('.ftr-menu-item h5').on('click', function(e){
    e.preventDefault();
    $(this).parent().find('ul').slideToggle(500);
    $(this).toggleClass('sub-menu-expend-sm')
  });
  
  $('.ftr-contact h5').on('click', function(e){
    e.preventDefault();
    $(this).parent().find('ul').slideToggle(500);
    $(this).toggleClass('sub-menu-expend-sm')
  });

}
if( $('.middleElement').length ){
  window.onscroll=function(){
    scrollTimeline();
  };
  function scrollTimeline(){
    var mE = $('.middleElement').offset().top;
    var fL = $('.firstLine').offset().top;
    ofH = mE - fL;
      $('.activeLine').css('height', ofH);
  }
}


/*
  Shoriful
*/
$('.psearch-form-flt-btn').on('click', function(){
  $('.psearch-form-wrap').fadeToggle();
});

if( $('.product-inr-tab-wrp .img-change-pagi').length ){
  var prpgofstop = $('.product-inr-tab-wrp .img-change-pagi').offset().top;
  $('.prPaginationOutside').css('top', prpgofstop);
}

})(jQuery);