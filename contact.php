<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>
<body>
<div class="container-fluid">
	<?php
		include_once './header.php';
	?>
</div>

<div class="container-fluid">
	<div class="contact img-responsive no-margin no-padding">
		<div class="container" style="color: black; font-size: 20px;">
			<h2 style="margin-top: 25px;">CONTACT US</h2>
			<caption style="margin-top: 25px;">Don't hesitate to contact with us!</caption>
		</div>
	</div>
	<div class="well" style="margin-top: 60px;">
		<div class="row">
			<div class="col-md-6">
				<div id="map"></div>
    			<script>
      				function initMap() {
        				var uluru = {lat: 28.528454, lng: 77.376945};
        				var map = new google.maps.Map(document.getElementById('map'), {
          				zoom: 13,
          				center: uluru
        			});
        			var marker = new google.maps.Marker({
          			position: uluru,
          			map: map
        			});
      			}
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY2eCn4zYNybGMoTExWfQImos0Ae-fqXk&callback=initMap">
			    </script>
			</div>
			<div class="col-md-6" style="padding-left: 20px; color: #3073CE;">
				<div class="row">
					<u><h2>Corporate Office:</h2></u>
				</div>
				<div class="row">
					<h3><i class="fa fa-map-marker"></i>&nbsp;Address:</h3>
					<p>1st Floor, F-39, Sector – 6, Udyog Marg, Noida – 201 301, Uttar Pradesh, India.</p><br>
				</div>
				<div class="row">
					<h3><i class="fa fa-phone"></i>&nbsp;Phone:</h3>
					<p>0120-4309249, 9313849010</p><br>
				</div>
				<div class="row">
					<h3><i class="fa fa-envelope"></i>&nbsp;Email:</h3>
					<p>query@rcplindia.in</p>
				</div>	
		</div>
	</div>
</div>

<div class="container-fluid no-margin no-padding">
	<?php
		include_once './footer.php';
	?>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/query.js"></script>
</body>
</html>