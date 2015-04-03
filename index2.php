<!DOCTYPE html>
<html>
<head>
	<title>Raul Sosa</title>
	<link rel="shortcut icon" href="Images/favicon.png">
	<meta charset="UTF-8"/>
	<meta name="description" content="graphic web designer, dise&ntilde;ador grafico y programador web">
	<meta name="keywords" content="Raul Sosa, Raul, Sosa, Graphic Design, Dise&ntilde;o grafico, usabilidad web, ui design, ux design, illustration, business cards, website design, dise&ntilde;o web">
	<meta name="web_author" content="Raul Sosa Mariano">    
	<meta name="author" content="Raul Sosa Mariano"> 
	<style type="text/css">	</style>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:200' rel='stylesheet' type='text/css'/>
	<!--<link rel="stylesheet" type="text/css" href="Css/styles.css">-->
	<link rel="stylesheet" type="text/css" href="Css/gridstyles.css">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize(){
			var mapCanvas = document.getElementById('map-canvas');
			var myLatlng = new google.maps.LatLng(-2.221391, -79.896701)
			var mapOptions = {
				center: myLatlng,
				zoom: 12,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(mapCanvas,mapOptions)

			var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 id="firstHeading" class="firstHeading">Raul & Sara Sosa Design</h4>'+
      '<div id="bodyContent">'+
      '<ul><li>Mexico 1301 y Oriente,</li><li>Guayaquil, Ecuador</li></ul>'+
      '</div>'+
      '</div>';

			var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map,
			      title: 'Raul & Sara Sosa Design'
			  });

			var infowindow = new google.maps.InfoWindow({
			      content: contentString
			  });

			google.maps.event.addListener(marker, 'click', function() {
	    	infowindow.open(map,marker);});
		}
		google.maps.event.addDomListener(window,'load',initialize);
	</script>
</head>

<body>


<!--<?php require('pages/introduction.php'); ?>
<?php require('pages/navigation.php'); ?>-->
<?php require('pages/header.php'); ?>
<script type="text/javascript" src="JavaScript/xmlResponse.js"></script>
<?php 
require('pages/portfolio.php');
include('pages/resume.php');
require('pages/contactForm.php');
require('pages/footer.php'); 
?>

</body>

</html>