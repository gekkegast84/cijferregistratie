
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="http://www.rit.edu/fa/cpd/sites/all/themes/cpd/images/logo_nav.gif">
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<title>Mick Rijneveld | School Opdracht</title>    	
</head>
	<body>
	<?php session_start(); ?>
		<div id='sidebar'>
			<a href='index.php?content=pagina/home' ><img src='img/logo.png'/></a>
			<div id='menu'>
				<?php include("link.php"); ?>
			</div>
		</div>
			<div id='container'>
				<div id='content'>
				<?php
	echo (isset($_GET['url'])) ? "url=".$_GET['url'] :'';
	include("navigatie.php"); ?>
				</div>
			</div>
		</div>
	</body>
</html>
	