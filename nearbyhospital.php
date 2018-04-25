<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;

      function setpos() {
        if (navigator.geolocation) {
                try {
                  navigator.geolocation.getCurrentPosition(function(position) {
                    var myLocation = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };
                    var pyrmont = myLocation;

                    map = new google.maps.Map(document.getElementById('map'), {
                      center: pyrmont,
                      zoom: 15
                    });

                    infowindow = new google.maps.InfoWindow();
                    var service = new google.maps.places.PlacesService(map);
                    service.nearbySearch({
                      location: pyrmont,
                      radius: 10000,
                      type: ['hospital']
                    }, callback);
                  });
                } catch (err) {
                  var myLocation = {
                    lat: 23.8701334,
                    lng: 90.2713944
                  };
                  setPos(myLocation);
                }
              }
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent("Name : " + place.name + "<br />" + "Website : " + place.website + "<br />" + "Rating : " + place.rating + "<br />" + "Phone Number : " +  place.formatted_phone_number);
          infowindow.open(map, this);
        });
      }
    </script>
  </head>
  <!DOCTYPE html>
<html lang="en">
<?php include("mainheader.php") ?>
<div class="services-breadcrumb" style="padding-top: 5%">
    <div class="container">
      <ul>
        <li><a href="index.html" style="font-family: Balthazar; font-size: 1.4em">Home</a><i>|</i></li>
        <li style="font-family: Balthazar; font-size: 1.4em">Nearby Hospitals</li>
      </ul>
    </div>
  </div>
</div>
<div class = "container-fluid">
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsnwEBXytszp6-3uz7YEJjmCD01h1xZFg&libraries=places&callback=setpos"></script>
    </div>
  </body>
</html>