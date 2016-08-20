$(document).ready(function (){

  // create a LatLng object containing the coordinate for the center of the map
  var latlng1 = new google.maps.LatLng(39.625392, 19.925368); // garden
  var latlng2 = new google.maps.LatLng(39.6235955,19.9226416); // catholic
  var latlng3 = new google.maps.LatLng(39.6246014,19.9210386); // orthodox

var styles = [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]


  // prepare the map properties
  var options = {
    zoom: 15,
    center: latlng1,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    navigationControl: true,
    scrollwheel: false,
    disableDoubleClickZoom: true,
    draggable: !("ontouchend" in document),
    styles: styles
  };

  // initialize the map object
  var map = new google.maps.Map(document.getElementById('map'), options);

  // add Marker
  var marker1 = new google.maps.Marker({
    map: map,
    place: {location: latlng1, query: 'Kafenio Technis, Corfu'}
  });
  var marker2 = new google.maps.Marker({
    map: map,
    place: {location: latlng2, query: 'Ιερός καθολικός Μητροπολοτικός ναός, Corfu'}
  });
  var marker3 = new google.maps.Marker({
    map: map,
    place: {location: latlng3, query: 'Ekklisia Agios Vasilios ke Stefanos, Corfu'}
  });

  // add listener for a click on the pin
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow1.open(map, marker1);
  });
  google.maps.event.addListener(marker2, 'click', function() {
    infowindow2.open(map, marker2);
  });
  google.maps.event.addListener(marker3, 'click', function() {
    infowindow3.open(map, marker3);
  });

  // add information window
  var infowindow1 = new google.maps.InfoWindow({
    content:  '<div class="info"><strong>Κήπος του λαού</strong><br><br>Garden of the people<br>Corfu Town</div>'
  });
  var infowindow2 = new google.maps.InfoWindow({
    content:  '<div class="info"><strong>Καθολική εκκλησία</strong><br><br>Saint Jacobs cathedral (Duomo)<br>Corfu Town</div>'
  });
  var infowindow3 = new google.maps.InfoWindow({
    content:  '<div class="info"><strong>Άγιος Βασίλειος και Στέφανος</strong><br><br>Orthodox Church of St Basil and St Stephen<br>Corfu Town</div>'
  });

  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#navbar-collapse-main a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });

    // hide .navbar first
    $(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) {
                $('.navbar').fadeIn();
            } else {
                $('.navbar').fadeOut();
            }
        });
    });


});

