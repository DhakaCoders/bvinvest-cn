(function($) {
var windowWidth = $(window).width();
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

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
  var marker, i, content;

  for (i = 0; i < locations.length; i++) { 
    var markerimg = homeurl + '/assets/images/marker-df.svg';
    if( locations[i][2] == 'tehuur' ){
      markerimg = homeurl + '/assets/images/marker-tehuur.svg';
    }
    if( locations[i][2] == 'tekoop' ){
      markerimg = homeurl + '/assets/images/marker-tekoop.svg';
    }
    if( locations[i][2] == 'verkocht' ){
      markerimg = homeurl + '/assets/images/marker-verkocht.svg';
    }
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][0], locations[i][1]),
      map: map,
      icon: markerimg
    });
    console.log(locations[i][4]);
    var content = '<div class="kImmoinfoWindow">';
       content += '<span class="kiiwicon"><img src="'+markerimg+'"/></span>';
       content += '<strong>'+locations[i][3]+'</strong>';
       if( locations[i][5]!== '' && typeof(locations[i][5]) !== 'undefined' ) content += '<span class="kiipprice">€ '+locations[i][5]+'</span>';
       if( locations[i][4]!== '' && typeof(locations[i][4]) !== 'undefined' ) content += '<a href="'+locations[i][4]+'">MEER INFO</a>';
    content += '</div>';

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

  var infowindow = new google.maps.InfoWindow({maxWidth: 220});
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

})(jQuery);