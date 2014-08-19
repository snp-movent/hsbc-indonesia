	<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="True" />
	<meta name=apple-mobile-web-app-capable content=yes>
	<meta name=apple-mobile-web-app-status-bar-style content=black>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1"/>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/font/fonts.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/pages.css">

	<title>HSBC iGo</title>
</head>
<body>
	<div class="wrapper">
		<header>
			
		</header>
		<section class="content">
			<?php 
				$page = (isset($_GET['page'])) ? $_GET['page'] : "home";
				include_once($page . '.php') 
			?>
		</section>
		<footer>
			
		</footer>
	</div>
</body>
</html>

