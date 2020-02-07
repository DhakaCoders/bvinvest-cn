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