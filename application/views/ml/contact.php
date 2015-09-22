<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/demo.css'); ?>" />
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/normalize.css'); ?>" />
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/style2.css'); ?>" />
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/css.css'); ?>" />
	<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		 function init_map(){
		 		var myOptions = {
		 				zoom:17,
						scrollwheel: false,
		 				center:new google.maps.LatLng(11.278083,76.228387),
			 			mapTypeId: google.maps.MapTypeId.ROADMAP};
		 			map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
		 			// marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(11.278083, 76.228387)});
		 			// infowindow = new google.maps.InfoWindow({content:"<b>Nilambur</b>" });
		 			google.maps.event.addListener(marker, "click", 
		 				function(){
		 					infowindow.open(map,marker);
		 					});
 					}
 					google.maps.event.addDomListener(window, 'load', init_map);
	</script> -->
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<img src="<?php echo base_url('images/path1.png');?> " alt="">
			</div>
			<div class="menu">
				<nav>
					<ul class="navigation-menu">
						<li><a href="index.php">ഹൊം</a></li>
						<li><a href="give.php">നല്കാം</a></li>
						<li><a href="about.php">എന്തിന്</a></li>
						<li><a href="contact.php">ബന്ധപെടൽ</a></li>
					</ul>
				</nav>
				<div class="search">
					<input type="text">
				</div>
				<div class="en-ml">
					<a href="../contact.php">English</a>
				</div>
				<a href="registerForm.php" class="login">ആപേക്ഷ</a>
			</div>
		</div>
	</header>
	<section class="map">
		<img src="../images/map.png" alt="">
		<!-- <div id="gmap_canvas"></div> -->
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
							<label for="name">പേര്</label><br>
							<input id="name" placeholder="പേര്" type="text">
						</div>
						<div class="group">
							<label for="email">ഈമെയിൽ</label><br>
							<input id="email" placeholder="ഈമെയിൽ" type="text">
						</div>
						<div class="group">
							<label for="comments">അഭിപ്രായങ്ങൾ</label><br>
							<textarea name="comments" id="comments" cols="30" rows="7" placeholder="അഭിപ്രായങ്ങൾ രേഖപെടുത്തുക.." ></textarea>
						</div>
						<button>അയക്കുക</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	