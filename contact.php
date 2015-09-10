<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About Us</title>
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/css.css" />
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
				<button class="login">Login</button>
			</div>
		</div>
	</header>
	<section class="map">
		<div id="gmap-canvas" class="map-canvas"></div>
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