//Google Maps
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: {lat: 49.23587, lng: 6.97589}
  });

  var image = 'img/marker.png';
  
  var marker = new google.maps.Marker({
    position: {lat: 49.23587, lng: 6.97589},
    map: map,
    icon: image
  });
  
	//Info-Fenster, das sich beim Klicken des Markers öffnet
	var infowindow = new google.maps.InfoWindow({ content:
	"<div style='widht:200px;height:75px'>Mathe-Magier<br/>G&ouml;benstra&szlig;e 40<br/>66117 Saarbr&uuml;cken</div>" 
	});
		
	google.maps.event.addListener(marker, 'click', function (){
	infowindow.open(map, marker);
	});	
}

