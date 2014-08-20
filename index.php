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
			<nav class="snp-navigation">
				<a href="#" class=""><i class="fa fa-bars"></i>&nbsp;</a>
				<span>Menu</span>
				<ul>
					<li><a href="#"><span>Tentang</span> Buddy Meter</a></li>
					<li><a href="#"><span>Cara Kerja</span> Buddy Meter</a></li>
					<li><a href="#"><span>Manfaat Nasabah</span> HSBC Advance</a></li>
					<li><a href="#"><span>FAQ</span> Buddy Meter</a></li>
					<li><a href="#"><span>Hubungi</span> Kami</a></li>
				</ul>
			</nav>
		</header>
		<section class="content">
			<?php 
				$page = (isset($_GET['page'])) ? $_GET['page'] : "home";
				include_once($page . '.php') 
			?>
		</section>
		<footer class="snp-footer">
			<p>&copy; Copyright HSBC Bank Indonesia <?php echo date('Y') ?> . ALL RIGHTS RESERVED</p>
			<p>
				Our privacy policy explains how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Google can use such data in accordance with our privacy policy. You will ensure that at all times you use the Services, the Properties have a clearly labeled and easily accessible privacy policy that provides end users with clear and comprehensive information about cookies, device-specific information, location information and other information stored on, accessed on, or collected from end users’ devices in connection with the Services, including, as applicable, information about end users’ options for cookie management.  You will use commercially reasonable efforts to ensure that an end user gives consent to the storing and accessing of cookies, device-specific information, location information or other information on the end user's device in connection with the Services where such consent is required by law.
			</p>
		</footer>
	</div>
</body>
</html>

