<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doner - Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/demo.css'); ?>" />
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/normalize.css'); ?>" />
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/style2.css'); ?>" />
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/theme.css'); ?>" />
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<img src="<?php echo base_url('images/path1.png'); ?>" alt="">
			</div>
			<div class="menu">
				<nav>
					<ul class="navigation-menu">
						<li><a href="index">ഹൊം</a></li>
						<li><a href="donate">നല്കാം</a></li>
						<li><a href="about">എന്തിന്</a></li>
						<li><a href="contact">ബന്ധപെടൽ</a></li>
					</ul>
				</nav>
				<div class="search">
					<input type="text">
				</div>
				<div class="en-ml">
					<a href="../donerForm">English</a>
				</div>
				<a href="registerForm" class="login">ആപേക്ഷ</a>
			</div>
		</div>
	</header>
	<section>
		<div class="container">
			<form class="doner-form" method="POST">
				<div class="form-box">
				<h2>Doner Info</h2>
					<div class="grp">
						<label for="name">Name / Organization</label><br>
						<input id="name" type="text" required>
					</div>
					<div class="grp">
						<label for="emai">Emali</label><br>
						<input id="email" type="email" required>
					</div>
					<div class="grp">
						<label for="phone">Phone</label><br>
						<input id="phone" type="text" required>
					</div>
					<div class="grp">
						<label for="city">City</label><br>
						<input id="city" type="text">
					</div>
					<div class="grp">
						<label for="address">Address</label><br>
						<textarea name="address" id="address" cols="30" rows="5"></textarea>
					</div>
					<div class="grp">
						<button>Submit</button>
						<button>Back</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</body>
</html>