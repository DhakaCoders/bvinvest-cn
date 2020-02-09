(function($) {
// Animation adpated from: 
// http://stackoverflow.com/questions/15692353/animate-a-canvas-circle-to-draw-on-load & 
// http://jsfiddle.net/loktar/uhVj6/4/
// http://www.javascriptkit.com/javatutors/requestanimationframe.shtml
if( $('.bv-progress-bar').length ){
  
  function circleCounter(el){
// Enables browser-decided smooth animation (60fps)
  var raf =
      window.requestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.msRequestAnimationFrame;
  window.requestAnimationFrame = raf;

// CANVAS
    var canvas = $(el).find('canvas'),
    width = canvas.width(),
    height = canvas.height();

// CANVAS PROPERTIES    
    var ctx = canvas.get(0).getContext('2d');
    ctx.lineWidth = 20;
    ctx.strokeStyle = '#15B615';
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    ctx.shadowBlur = 0;
    ctx.shadowColor = '#15B615';

// CANVAS MATHS    
    var 
    x       = width / 2,
    y       = height / 2,
    radius  = 70,
    circum  = Math.PI * 2,
    start   = Math.PI / -2, // Start position (top)
    curr    = 0, // Current position (in %)
    draw_to = 0,
    finish  = parseInt($(el).find('canvas').attr('data-percent')); // Finish (in %)
    if( !finish ){
      finish = 100;
    }
    
    function animate1(draw_to, finish) {
      ctx.clearRect(0, 0, 200, 200);
      ctx.beginPath();
      ctx.arc(100, 100, radius, start, draw_to, false);
      ctx.stroke();
      curr++;
      if (curr < finish + 1) {
        requestAnimationFrame(function () {
          animate1(circum * curr / 100 + start, finish);
        });
      }
    }
    animate1(0, finish);
}

function textCounter(el) {
    $(el).prop('Counter',0).animate({
        Counter: $(el).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(el).text(Math.ceil(now));
        }
    });
}

if( $('.circle1').length ){
  $('.circle1').onScreen({
    tolerance: 0,
    toggleClass: false,
    doIn: function() {
      if(!$('.circle1').hasClass('bvp-loaded') ){
        circleCounter('.circle1');
        textCounter('.circle1 .number');
      }
      $('.circle1').addClass('bvp-loaded');
    },
    doOut: function() {
      
    }
  });
}
if( $('.circle2').length ){
  $('.circle2').onScreen({
    tolerance: 0,
    toggleClass: false,
    doIn: function() {
      if(!$('.circle2').hasClass('bvp-loaded') ){
        circleCounter('.circle2');
        textCounter('.circle2 .number');
      }
      $('.circle2').addClass('bvp-loaded');
    },
    doOut: function() {
      
    }
  });
}

if( $('.circle3').length ){
  $('.circle3').onScreen({
    tolerance: 0,
    toggleClass: false,
    doIn: function() {
      if(!$('.circle3').hasClass('bvp-loaded') ){
        circleCounter('.circle3');
        textCounter('.circle3 .number');
      }
      $('.circle3').addClass('bvp-loaded');
    },
    doOut: function() {
      
    }
  });
}

if( $('.circle4').length ){
  $('.circle4').onScreen({
    tolerance: 0,
    toggleClass: false,
    doIn: function() {
      if(!$('.circle4').hasClass('bvp-loaded') ){
        circleCounter('.circle4');
        textCounter('.circle4 .number');
      }
      $('.circle4').addClass('bvp-loaded');
    },
    doOut: function() {
      
    }
  });
}

if( $('.circle5').length ){
  circleCounter('.circle5');
  textCounter('.circle5 .number');
}

}

})(jQuery);