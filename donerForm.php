<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doner - Form</title>
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
				<button class="login">Register</button>
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