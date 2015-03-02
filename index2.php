<!DOCTYPE html>
<html>
<head>
	<title>Raul Sosa</title>
	<link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
	<meta charset="UTF-8"/>
	<meta name="description" content="graphic web designer, dise&ntilde;ador grafico y programador web">
	<meta name="keywords" content="Raul Sosa, Raul, Sosa, Graphic Design, Dise&ntilde;o grafico, usabilidad web, ui design, ux design, illustration, business cards, website design, dise&ntilde;o web">
	<meta name="web_author" content="Raul Sosa Mariano">    
	<meta name="author" content="Raul Sosa Mariano"> 
	<style type="text/css">	</style>
	<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:200' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="Css/styles.css">
</head>

<body>


<!--<?php require('pages/introduction.php'); ?>
<?php require('pages/navigation.php'); ?>-->
<?php require('pages/header.php'); ?>
<?php require('pages/portfolio.php'); ?>
<?php require('pages/footer.php'); ?>
<?php require('pages/contactForm.php');?>
<!--


<script type="text/javascript">
	var xhr = new XMLHttpRequest();

	xhr.onload = function(){
		if(xhr.status === 200){
			responseObject = JSON.parse(xhr.responseText);

		//BUILD UP STRING WITH NEW CONTENT (could also use DOM manipulation)
			var newContent = '';
			for(var i=0; i<responseObject.portfolio.length; i++){
				newContent += '<div class=portfolioOb>';
				newContent += '<img src ="' + responseObject.portfolio[i].image + '" ';
				newContent += 'alt ="' + responseObject.portfolio[i].portTitle + '" />';
				newContent += '<p><b>' + responseObject.portfolio[i].portTitle + '</b><br/>';
				newContent += responseObject.portfolio[i].date + '</p>';
				newContent += '</div>';
			}

		//UPDATE THE PAGE WITH THE NEW CONTENT
			document.getElementById('portfolio').innerHTML = newContent;
		}
	};

	xhr.open('GET', 'JavaScript/portfolio.json', true);
	xhr.send(null);

	</script>
-->
</body>
</html>