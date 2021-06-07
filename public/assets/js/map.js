function initialize() {
	let adresse_1 = document.getElementById('adresse_1');
	let adresse_2 = document.getElementById('adresse_2');
	let longitude_text =  adresse_1.innerText
	let latitude_text =  adresse_2.innerText
	let longitude =  parseFloat(longitude_text)
	let latitude = parseFloat(latitude_text)
	console.log(longitude)
	console.log(latitude)
	var myOptions = {
		zoom: 15,
		center: new google.maps.LatLng(latitude, longitude), //change the coordinates
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		mapTypeControl: false,
		zoomControl: false,
		streetViewControl: false
	};
	var map = new google.maps.Map(document.getElementById("map-area"), myOptions);
	var marker = new google.maps.Marker({
		map: map,
		position: new google.maps.LatLng(40.801485408197856, -73.96745953467104) //change the coordinates
	});
	google.maps.event.addListener(marker, "click", function() {
		infowindow.open(map, marker);
	});
}
google.maps.event.addDomListener(window, 'load', initialize);

