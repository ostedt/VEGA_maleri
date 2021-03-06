<?php 
/*
* Template Name: Contact
*/
?>

<?php get_header(); ?>
<div class="container">

    <!-- Adding header with img and text -->

      <div style="background-image: url('<?php echo the_field("contact_img_top"); ?>')" class="header-frontp">
    <div class="row">
      <div class="header-container">
          <!-- Adding header text -->
          <?php if( get_field('contact_heading_top') ): ?>
            <h1 class="h1-heading-frontp"><?php the_field('contact_heading_top'); ?></h1>  
          <?php endif; ?>

          <!-- Adding small text under header-->
          <?php if( get_field('contact_breadtext_top') ): ?>
            <div class="section-bread section-bread-no-btn">
              <?php the_field('contact_breadtext_top'); ?>
            </div>
          <?php endif; ?>
        
        </div>

    </div>
    
  </div>

    

    <!-- IF there is employees, show em all -->

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="row">
        <div class="employee-page-container">
            <!--activate function from functions.php -->
            <?php VEGA_get_latest_employees(); ?>
        </div>
        </div>

    <?php endwhile; ?>

</div>

<!-- Adding map from google -->

<div id="map" class="section"></div>

	<script>
      function initMap() {
        var uluru = {lat: 59.36451, lng: 17.96665};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru,
          styles: [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#8d8e92"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#98d1a6"
            },
            {
                "weight": "0.25"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#98d1a6"
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
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#98d1a6"
            },
            {
                "lightness": "50"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "weight": "1"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#65c087"
            },
            {
                "visibility": "on"
            },
            {
                "lightness": "50"
            }
        ]
    }
]

        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
            icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 10,
            strokeColor: '#00a850'
          },
        });



      }

    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDQzlR3jlxqQyFSNPdo2DiXg6mS0JZs-U&callback=initMap">
    </script>

<?php get_footer(); ?>