Map excerpt from Funds Library
<!-- Black and white google map 
with custom icon -->
<div class="l-constrained">
  <div id="google-map" class="map">
    <script>
      var map;
        function initMap() {
          map = new google.maps.Map(document.getElementById('google-map'), {
            zoom: 16,
            center: new google.maps.LatLng(51.450238, -2.602911),
            scrollwheel:  false,
            //  Code from Snazzy Maps
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "all",
                    // "stylers": [
                    //     {
                    //         "saturation": "-10"
                    //     }
                    // ]
                },
                {
                    "featureType": "administrative.province",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 30
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": "10"
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": "-100"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": "30"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "all",
                    // "stylers": [
                    //     {
                    //         "lightness": "40"
                    //     }
                    // ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#cecece"
                        },
                        {
                            "lightness": -10
                        },
                        {
                            "saturation": -97
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "lightness": -25
                        },
                        {
                            "saturation": -100
                        }
                    ]
                }
            ]



          });

          var iconBase = '<?php echo get_home_url(); ?>/wp-content/themes/fundslibrary/assets/img/icons/';
          var icons = {
            custom: {
              icon: iconBase + 'map.png'
            }
          };
          var features = [
            {
              position: new google.maps.LatLng(51.450238, -2.602911),
              type: 'custom'
            }
          ];



          // Create markers.
          features.forEach(function(feature) {
            var marker = new google.maps.Marker({
              position: feature.position,
              icon: icons[feature.type].icon,
              map: map
            });
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxKQGUvKArIrWhPvl7sf9zOp-8TZ9E1Q4&callback=initMap">
      </script>
  </div>
</div>
