<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
	<title>Raul Sosa | Graphic Web Designer</title>	
	<link rel="shortcut icon" href="Images/favicon.png">
	<meta name="language" content="english"> 
	<meta name="robots" content="all, index, follow">
	<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />		
	<meta name="description" content="Hello, I'm Raul Sosa a freelance designer always looking for the next opportunity. Whether it be raw coding or frameworks, design or fine tuned technical work; I will provide you with the upmost experience and designs.">
	<meta name="keywords" content="Raul Sosa, Raul, Sosa, Graphic Design, Dise&ntilde;o grafico, usabilidad web, ui design, ux design, illustration, business cards, website design, dise&ntilde;o web">
	<meta name="web_author" content="Raul Sosa Mariano">    
	<meta name="author" content="Raul Sosa Mariano"> 
	<style type="text/css">	</style>
	<link href="https://plus.google.com/u/0/b/118329445811411217986/118329445811411217986/about?sig=ALjLGbMZEeNvsx1FJz5z3WT4u1P0PPLsSg" rel="publisher"/>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:200' rel='stylesheet' type='text/css'/>
	<!--<link rel="stylesheet" type="text/css" href="Css/styles.css">-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="Css/gridstyles.css">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/magnific-popup.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.3.0/handlebars.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>


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
<?php  ?>-->
<?php require('pages/header.php'); ?>

<?php 
echo "<div class=\"main-contain\">";
require('pages/navigation.php');
echo "<div class='main'>";
require('pages/bio.php');
require('pages/portfolio.php');
include('pages/resume.php');
echo '<script type="text/javascript" src="JavaScript/xmlResponse.js"></script>';
require('pages/contactForm.php');
require('pages/footer.php'); 
echo "</div></div>";
?>
<script>

var mn = $(".main-nav");

$(window).scroll(function(){
	if($(this).scrollTop() > 400){
		mn.addClass("main-nav-scrolled");
	}
	else{
		mn.removeClass("main-nav-scrolled");
	}
});
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
}); 

</script>
</body>
</html>