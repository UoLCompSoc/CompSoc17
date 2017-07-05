<?php
$links = array("About"=>"about", "Events"=>"events", "Sponsors"=>"sponsors", "Contact"=>"contact");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?></title>
	<link rel="stylesheet" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Chrome Tab Color -->

	<meta name="theme-color" content="#1e63ee" />

	<!-- Various Icons -->

	<link rel="icon" type="image/png" href="assets/favicon.16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="assets/favicon.png" sizes="128x128">
	<link rel="icon" type="image/png" href="assets/android-chrome-192x192.png" sizes="192x192">

	<!-- iOS Icon and Title -->

	<meta name="apple-mobile-web-app-title" content="CompSoc">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/touch-icon-iphone-retina.png">

	<!-- Social Media -->

	<meta property="og:title" content="CompSoc" />
	<meta property="og:image" content="https://ulcompsoc.org.uk/assets/thumbnail.png" />
	<meta property="og:description" content="The University of Leicester Computing Society" />

	<!-- For Henners -->

	<meta http-equiv="X-Clacks-Overhead" content="GNU Terry Pratchett" />
	
</head>
<body>
<nav>
	<a href="/"><img src="assets/small_logo.svg" alt="CompSoc Logo" /></a>
	<div id="nav_links">
		<?php
			foreach($links as $x => $x_value) 
			{
				echo "<a href='" . $x_value . "'>" . $x . "</a>";
			}
		?>
	</div>
</nav>
<main>