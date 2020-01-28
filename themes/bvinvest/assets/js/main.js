(function($) {
var windowWidth = $(window).width();
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]


$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
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


/*Google Map*/


if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

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


if( $('#prmap').length ){
var locations = [];

$('#prmapdata span').each(function(){
  var title = $(this).data('title');
  var price = $(this).data('price');
  var type = $(this).data('type');
  var latitude = $(this).data('latitude');
  var longitude = $(this).data('longitude');
  var link = $(this).data('link');
  var data = [latitude, longitude, type, title, link, price];
  locations.push( data );
});
// map center points
var clat = $('#prmap').data('lat');
var clon = $('#prmap').data('lon');
var homeurl = $('#prmap').data('uri');
var myCenter = new google.maps.LatLng(clat,  clon);

    var map = new google.maps.Map(document.getElementById('prmap'), {
      zoom: 10,
      center: myCenter,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      styles : CustomMapStyles

    });

    var infowindow = new google.maps.InfoWindow({maxWidth: 210});

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      var markerimg = homeurl + '/assets/images/pindark.svg';
      if( locations[i][2] == 'rent' ){
        markerimg = homeurl + '/assets/images/pindark.svg';
      }
      if( locations[i][2] == 'sold' ){
        markerimg = homeurl + '/assets/images/pindark.svg';
      }
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][0], locations[i][1]),
        map: map,
        icon: markerimg
      });
      var content = '<div class="kImmoinfoWindow"><span class="kiiwicon"><img src="'+markerimg+'"/></span><strong>'+locations[i][3]+'</strong><span class="kiipprice">€ '+locations[i][5]+'</span><a href="'+locations[i][4]+'">MEER INFO</a></div>';
      google.maps.event.addListener(marker, 'click', (function(marker,content,infowindow) {
        return function() {
          infowindow.setContent(content);
          infowindow.open(map, marker);
        }
      })(marker,content,infowindow));
    }
}




if( $('#prmap2').length ){
var locations = [];

$('#prmapdata span').each(function(){
  var title = $(this).data('title');
  var price = $(this).data('price');
  var type = $(this).data('type');
  var latitude = $(this).data('latitude');
  var longitude = $(this).data('longitude');
  var link = $(this).data('link');
  var data = [latitude, longitude, type, title, link, price];
  locations.push( data );
});
// map center points
var clat = $('#prmap2').data('lat');
var clon = $('#prmap2').data('lon');
var homeurl = $('#prmap2').data('uri');
var myCenter = new google.maps.LatLng(clat,  clon);

    var map = new google.maps.Map(document.getElementById('prmap2'), {
      zoom: 10,
      center: myCenter,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      styles : CustomMapStyles

    });

    var infowindow = new google.maps.InfoWindow({maxWidth: 210});

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      var markerimg = homeurl + '/assets/images/pinorange.svg';
      if( locations[i][2] == 'rent' ){
        markerimg = homeurl + '/assets/images/pinorange.svg';
      }
      if( locations[i][2] == 'sold' ){
        markerimg = homeurl + '/assets/images/pinorange.svg';
      }
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][0], locations[i][1]),
        map: map,
        icon: markerimg
      });
      var content = '<div class="kImmoinfoWindow"><span class="kiiwicon"><img src="'+markerimg+'"/></span><strong>'+locations[i][3]+'</strong><span class="kiipprice">€ '+locations[i][5]+'</span><a href="'+locations[i][4]+'">MEER INFO</a></div>';
      google.maps.event.addListener(marker, 'click', (function(marker,content,infowindow) {
        return function() {
          infowindow.setContent(content);
          infowindow.open(map, marker);
        }
      })(marker,content,infowindow));
    }
}

/*
mixitup  filter
*/
if( $('.mixContainer').length ){
  var config = document.querySelector('.mixContainer');
  var mixer = mixitup(config);

}

if (windowWidth <= 639) {
  $('.xs-cat-select').selectpicker();
}



/*
  Proshanto
*/

if( $('.hmTestimonialSlider').length ){
  $('.hmTestimonialSlider').slick({
    pauseOnHover: false,
    autoplay: false,
    dots: false,
    infinite: true,
    arrows:true,
    speed: 1000,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $('.testimonialLeftArrow'),
    nextArrow: $('.testimonialRightArrow')
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
      nextArrow: $('.detailTestimonialRightArrow')
    });
  }



}
  


//
if( $('.slider-filter-bar').length ){
  $('.slider-filter-bar > a').on('click', function(e){
    e.preventDefault();
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
  });
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
  



/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#detailpaginamap').length ){
    var latitude = $('#detailpaginamap').data('latitude');
    var longitude = $('#detailpaginamap').data('longitude');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          mapTypeControl:false,
          scrollwheel: false,

          zoomControl: false,
          disableDefaultUI: true,
          zoom:17,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : CustomMapStyles
        };

        var map= new google.maps.Map(document.getElementById('detailpaginamap'),mapProp);
        var marker= new google.maps.Marker({
          position:myCenter,
          icon:'assets/images/map-marker.png'
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
}


/**/
if( $('#container5').length ){
var bar5 = new ProgressBar.Circle(container5, {
  color: '#aaa',
  // This has to be the same size as the maximum width to
  // prevent clipping
  strokeWidth: 10,
  trailWidth: 10,
  easing: 'easeInOut',
  duration: 1400,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#aaa', width: 10 },
  to: { color: '#15B615', width: 10 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText(0);
    } else {
      circle.setText(7846);
    }

  }
});
bar5.animate(0.68);  // Number from 0.0 to 1.0

}



if( $('#container1').length ){
  var bar1 = new ProgressBar.Circle(container1, {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 10,
    trailWidth: 10,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#aaa', width: 10 },
    to: { color: '#15B615', width: 10 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);

      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText(0);
      } else {
        circle.setText(9248);
      }

    }
  });
  bar1.animate(0.9);  // Number from 0.0 to 1.0
}

if( $('#container2').length ){
  var bar2 = new ProgressBar.Circle(container2, {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 10,
    trailWidth: 10,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#aaa', width: 10 },
    to: { color: '#15B615', width: 10 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);

      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText(0);
      } else {
        circle.setText(1578);
      }

    }
  });
  bar2.animate(0.8);  // Number from 0.0 to 1.0
}

if( $('#container3').length ){
  var bar3 = new ProgressBar.Circle(container3, {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 10,
    trailWidth: 10,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#aaa', width: 10 },
    to: { color: '#15B615', width: 10 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);

      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText(0);
      } else {
        circle.setText(7846);
      }

    }
  });
  bar3.animate(0.68);  // Number from 0.0 to 1.0
}

if( $('#container4').length ){
  var bar4 = new ProgressBar.Circle(container4, {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 10,
    trailWidth: 10,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#aaa', width: 10 },
    to: { color: '#15B615', width: 10 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);

      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText(0);
      } else {
        circle.setText(897);
      }

    }
  });
  bar4.animate(0.55);  // Number from 0.0 to 1.0

}

/*

$('.classname').onScreen({
tolerance: 100,
toggleClass: true,
doIn: function() {
$(this).addClass('onScreen')
},
doOut: function() {
$(this).removeClass('notOnScreen')
}
});


*/



































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




/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#googlemap').length ){
    var latitude = $('#googlemap').data('latitude');
    var longitude = $('#googlemap').data('longitude');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          mapTypeControl:false,
          scrollwheel: false,

          zoomControl: false,
          disableDefaultUI: true,
          zoom:17,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : CustomMapStyles
      };
      var map= new google.maps.Map(document.getElementById('googlemap'),mapProp);

      var marker= new google.maps.Marker({
        position:myCenter,
        icon:'assets/images/map-marker.png'
        });
      marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}



















/*
  Shoriful
*/

  





















new WOW().init();

window.onscroll=function(){
  scrollTimeline();
};
function scrollTimeline(){
  var mE = $('.middleElement').offset().top;
  var fL = $('.firstLine').offset().top;
  ofH = mE - fL;
    $('.activeLine').css('height', ofH);
}

var prpgofstop = $('.product-inr-tab-wrp .img-change-pagi').offset().top;
$('.prPaginationOutside').css('top', prpgofstop);


})(jQuery);