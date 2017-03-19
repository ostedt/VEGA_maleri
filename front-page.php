<?php get_header(); ?>

<div class="container">

  <div style="background-image: url('<?php echo the_field("header-img"); ?>')" class="header-frontp">

    <div class="row">

      <div class="header-container">

          <?php if( get_field('header-heading') ): ?>
            <h1 class="h1-heading-frontp"><?php the_field('header-heading'); ?></h1>  
          <?php endif; ?>

          <?php if( get_field('header-breadtext') ): ?>
            <div class="section-bread">
              <?php the_field('header-breadtext'); ?>
            </div>
          <?php endif; ?>

          <?php if( get_field('header-btn-text') ): ?>
            <div class="btn-cover">
              <a class="btn-round" href="<?php the_field('header-btn-link'); ?>"><?php the_field('header-btn-text'); ?></a>
            </div>
          <?php endif; ?>

        </div>

    </div>
  	
  </div>

  <div id="case-frontp" class="section">

    <div class="row">

      <div class="section-container">

        <?php if( get_field('case-heading') ) :?>
        <h2><?php the_field('case-heading'); ?></h2>
        <div class="h2-underline-container"><div class="h2-underline"></div></div>
          
          <?php if( get_field('case-breadtext') ) : ?>
            <div class="section-bread">
              <?php the_field('case-breadtext'); ?>
            </div>
          <?php endif; ?>

        <?php endif; ?>
      	
      	<?php VEGA_get_latest_cases(); ?>

          <?php if( get_field('case-btn-text') ): ?>
            <div id="btn-case" class="btn-cover">
              <a class="btn-round" href="<?php the_field('case-btn-link'); ?>"><?php the_field('case-btn-text'); ?></a>
            </div>
          <?php endif; ?>

      </div>

    </div>

  </div>

  <div id="about-frontp" class="section">
  	
  	
  	<div id="about-img-frontpage" class="about-frontp-divided" style="background-image: url('<?php echo the_field("about-img"); ?>')"></div>

    <div id="about-text-frontp" class="about-frontp-divided">

    

    <div class="row">

    <div id="about-text" class="section-container">
     
      <?php if( get_field('about-heading') ) :?>
        <h2><?php the_field('about-heading'); ?></h2>
        <div class="h2-underline-container"><div class="h2-underline"></div></div>
          
          <?php if( get_field('about-breadtext') ) : ?>
            <?php the_field('about-breadtext'); ?>
          <?php endif; ?>

      <?php endif; ?>

      </div>

      </div>

    </div>

  </div>

  <div id="contactform-frontp" class="section">
  	
  	<!-- content-contectform.php ska in här -->
    <div class="row">

      <div class="section-container col-xs-12">
      <?php if( get_field('contact-heading') ) :?>
        <h2><?php the_field('contact-heading'); ?></h2>
        <div class="h2-underline-container"><div class="h2-underline"></div></div>
          
          <?php if( get_field('contact-breadtext') ) : ?>
            <?php the_field('contact-breadtext'); ?>
          <?php endif; ?>

      <?php endif; ?>

      <?php VEGA_get_latest_employees(); ?>

      </div>

    </div>

  </div>

  <div id="map" class="section"></div>

</div>
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