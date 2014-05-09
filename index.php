<html>
	<head>
		<title></title>
		<?php include "includes/coreincludes.php";?>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		 <script>
		      function initialize() {
		        var map_canvas = document.getElementById('map_canvas');
		        var map_options = {
		          center: new google.maps.LatLng(44.5403, -78.5463),
		          zoom: 8,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        }
		        var map = new google.maps.Map(map_canvas, map_options)
		      }
		      google.maps.event.addDomListener(window, 'load', initialize);
    	</script>
	</head>
	<body>

		<?php include ("includes/content/topheaders/topheader1.php");?>
		<?php include ("includes/content/headers/header1.php");?>
		<?php include ("includes/content/content/content7.php");?>
		<?php include ("includes/content/galleries/gallery1.php");?>
		<?php include ("includes/content/forms/form1.php");?>
		<?php include ("includes/content/contact/contact2.php");?>
		<?php include("includes/content/footers/footer1.php");?>

	</body>
</html>