<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoffeeDrop
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-brown">

	
		<div id="footer-container">
			<div class="container">
				<p>This app is powered by</p>
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="">
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
//toggles mobile menu
$(".mobile-menu-toggle").each(function(){
	$(this).on("click", function(){
		$("#mobile-menu").toggleClass("open");
	})
});
</script>

<script>

//map options for visual styling and positioning of map
var mapOptions = {
	center: {lat: 53.332504, lng: -1.555659},
	zoom: 5,
	styles: [
	{
		"featureType": "administrative",
		"elementType": "all",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "administrative",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#444444"
			}
		]
	},
	{
		"featureType": "administrative.country",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "on"
			},
			{
				"weight": "0.67"
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
		"elementType": "geometry.fill",
		"stylers": [
			{
				"saturation": "-100"
			},
			{
				"lightness": "57"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"lightness": "1"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "labels",
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
		"featureType": "transit",
		"elementType": "geometry",
		"stylers": [
			{
				"visibility": "on"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "labels.text",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"visibility": "off"
			},
			{
				"color": "#484848"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "labels.text.stroke",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "labels.icon",
		"stylers": [
			{
				"visibility": "on"
			}
		]
	},
	{
		"featureType": "transit.station.bus",
		"elementType": "all",
		"stylers": [
			{
				"visibility": "on"
			}
		]
	},
	{
		"featureType": "transit.station.bus",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"saturation": "0"
			},
			{
				"lightness": "0"
			},
			{
				"gamma": "1.00"
			},
			{
				"weight": "1"
			}
		]
	},
	{
		"featureType": "transit.station.bus",
		"elementType": "labels.icon",
		"stylers": [
			{
				"saturation": "-100"
			},
			{
				"weight": "1"
			},
			{
				"lightness": "0"
			}
		]
	},
	{
		"featureType": "transit.station.rail",
		"elementType": "all",
		"stylers": [
			{
				"visibility": "on"
			}
		]
	},
	{
		"featureType": "transit.station.rail",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"gamma": "1"
			},
			{
				"lightness": "40"
			}
		]
	},
	{
		"featureType": "transit.station.rail",
		"elementType": "labels.icon",
		"stylers": [
			{
				"saturation": "-100"
			},
			{
				"lightness": "30"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "all",
		"stylers": [
			{
				"color": "#d2d2d2"
			},
			{
				"visibility": "on"
			}
		]
	}
]
}

function initMap() {
	var locations = [];
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	let marker;
	let data;
	
	//requests json data from api and stores locations as objects in locations array & console logs error code if request failed
	$.ajax({
		type:"GET",
		dataType: "json",
		url: "http://coffeedrop.staging2.image-plus.co.uk/api/locations",
		data: {"locations":data},
		success:function(data){
			data.data.forEach(function(location){
				locations.push(location.coordinates)      
			});
			addMarkers();
		}
	}).fail(function(jqXHR){
		console.log("API Request failed. Request status:", jqXHR.status);
	});

	//attatches custom image to map markers
	var mapMarkerIcon ={
		url: "<?php echo get_template_directory_uri(); ?>/img/map-marker.svg", // url
		scaledSize: new google.maps.Size(50, 50), // scaled size
		origin: new google.maps.Point(0,0), // origin
		anchor: new google.maps.Point(0, 0) // anchor
	};

	//appends map markers to Map object
	function addMarkers(){
		for(let i = 0; i < locations.length; i++){

			let longitude = locations[i].longitude;
			let latitude = locations[i].latitude;

			marker = new google.maps.Marker({
				map: map,
				position: {lat:latitude, lng:longitude},
				icon: mapMarkerIcon
			})    
		};
	}
	//displays Markers on map
	marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0a_8iQ2LgEdEkUURD-I9Wm_OEwydhCoA&callback=initMap"
async defer>
</script>
<?php wp_footer(); ?>

</body>
</html>

