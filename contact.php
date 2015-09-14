<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		 function init_map(){
		 		var myOptions = {
		 				zoom:17,
						scrollwheel: false,
		 				center:new google.maps.LatLng(11.278083,76.228387),
			 			mapTypeId: google.maps.MapTypeId.ROADMAP};
		 			map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
		 			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(11.278083, 76.228387)});
		 			// infowindow = new google.maps.InfoWindow({content:"<b>Nilambur</b>" });
		 			google.maps.event.addListener(marker, "click", 
		 				function(){
		 					infowindow.open(map,marker);
		 					});
 					}
 					google.maps.event.addDomListener(window, 'load', init_map);
	</script>
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<img src="images/path1.png" alt="">
			</div>
			<div class="menu">
				<nav>
					<ul class="navigation-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="give.php">Give</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
				<div class="search">
					<input type="text">
				</div>
				<div class="en-ml">
					<a href="./ml/contact.php">മലയാളം</a>
				</div>
				<a href="registerForm.php" class="login">Register</a>
			</div>
		</div>
	</header>
	<section class="map">
		<div id="gmap_canvas"></div>
	</section>
	<section>
		<div class="container">.
			<div class="connect-links">
				<img src="images/twitter.png" alt="">
				<img src="images/twitter.png" alt="">
				<img src="images/twitter.png" alt="">
				<img src="images/twitter.png" alt="">
			</div>
			<div class="message-container">
				<div class="message">
					<div class="msg-box">
						<div class="group">
							<label for="name">Name</label><br>
							<input id="name" placeholder="Name" type="text">
						</div>
						<div class="group">
							<label for="email">Email</label><br>
							<input id="email" placeholder="Email" type="text">
						</div>
						<div class="group">
							<label for="comments">Comments</label><br>
							<textarea name="comments" id="comments" cols="30" rows="7" placeholder="Write your Comments.." ></textarea>
						</div>
						<button>Send</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
</body>
</html>