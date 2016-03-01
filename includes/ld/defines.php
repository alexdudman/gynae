<?php /*?><?php
$expires = 3600*24*30; //30 days before cookies expire

	// Error check 'area' if set otherwise set to 'uk'
	if (isset($_GET['a']) && $_GET['a'] != "") {
		$area = str_replace(" ", "", $_GET['a']);
		$area = strtolower($area);
		setcookie('area', $area, time()+$expires);
	} elseif(isset($_COOKIE['area'])) {
		$area = $_COOKIE['area'];
	} else {
		$area = "uk";
	}


	// Build Query String add on
	$qs = "a=". $area;
	

	// Error check 'keyword' 
	if (isset($_GET['kw']) && $_GET['kw'] != "") {
		$kw = strip_tags($_GET['kw']);
		$kw = trim($kw);
		$kw = htmlspecialchars($kw);
		$qs .= "&amp;kw=". urlencode($kw);
		setcookie('keyword', $kw, time()+$expires);
	} elseif(isset($_COOKIE['kw'])) {
		$kw = $_COOKIE['kw'];
	}
		
	// Region variables
	switch ($area) {
	// Default values for PPC 
	case "gen":
		$location = "PPC_AREA";
		$phonetag = "Call us NOW on";
		$phonenumber = "0115 123 4567";
		break;
	// Default values for SEO
	default:
		$location = "DEFAULT_SEO_LOCATION";
		$phonetag = "Call us FREE on";
		$phonenumber = "0800 123 4567";
	}
	
	// Check for Email Marketing variable 
	if (isset($_GET['utm_medium']) && $_GET['utm_medium'] == "email") {
		$location = "DEFAULT_LOCATION";
		$phonetag = "Call us NOW on";
		$phonenumber = "0800 123 4567";

		// Adds the Email Markting variable to the query string
		$qs .= "&amp;utm_medium=email";
	} else {
	}
	
	// Add "'s" to location unless already ending in "s"
	if (substr($location, strlen($location)-1) == "s") {
		$location2 = $location . "'";
	} else {
		$location2 = $location . "'s";
	}

?><?php */?>