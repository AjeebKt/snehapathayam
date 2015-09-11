<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registerf - Form</title>
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
				<a href="registerForm.php" class="login">Register</a>
			</div>
		</div>
	</header>
	<section>
		<div class="container">
			<form class="registration-form" method="POST" action="">
				<div class="form-box">
					<h2>Registration Form</h2>
					<ul>
						<li class="form-list">
							<label for="name">Name</label><br>
							<input id="name" type="text" required>
						</li>
						<li class="form-list">
							<label for="address">Address</label><br>
							<input id="address" type="text" required>
						</li>
						<li class="form-list">
							<label for="houseNo">House No</label><br>
							<input id="houseNo" type="text" required>
						</li>
						<li class="form-list">
							<label for="wardNo">Ward No</label><br>
							<input id="wardNo" type="text">
						</li>
						<li class="form-list">
							<label for="wardName">Ward nmae</label><br>
							<input id="wardName" type="text" required>
						</li>
						<li class="form-list">
							<label for="contactName">Contact Number</label><br>
							<input id="contactName" type="text" required>
						</li>
						<li class="form-list">
							<label for="gender">Gender</label><br>
							<label for="male">Male</label>
							<input id="male" type="radio">
							<label for="female">Female</label>
							<input id="female" type="radio">
							<label for="other">Other</label>
							<input id="other" type="radio">
						</li>
						<li class="form-list">
							<label for="date">date of birth</label><br>
							<select name="date" id="date">
								<?php for ($i=1; $i <=31 ; $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>

							<select name="month" id="month">
								<?php for ($i=1; $i <=12 ; $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<select name="year" id="year">
								<?php for ($i=1945;  $i <= 2015 ; $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</li>
						<li class="form-list">
							<label for="religion">Religion</label><br>
							<input id="religion" type="text" required>
						</li>
						<li class="form-list">
							<label for="cast">Cast</label><br>
							<input id="cast" type="text" required>
						</li>
						<li class="form-list">
							<label for="aadharNo">Adhaar</label><br>
							<input id="aadharNo" type="text" required>
						</li>
						<li class="form-list">
							<label for="ratioCardNo">Ration Card No</label><br>
							<input id="ratioCardNo" type="text" required>
						</li>
						<li class="form-list">
							<label for="eduQul">Education Qualification</label><br>
							<input id="eduQul" type="text" required>
						</li>
						<li class="form-list">
							<label for="occupaton">Occupaton</label><br>
							<input id="occupaton" type="text" required>
						</li>
						<li class="form-list">
							<label for="meritalStatus">Marital Status</label><br>
							<select name="meritalStatus" id="meritalStatus">
								<option value="single">Single</option>
								<option value="marrid">Marrid</option>
								<option value="devosed">Devosed</option>
								<option value="widow">Widow</option>
							</select>
						</li>
						<li class="form-list">
							<label for="noOfChildren">No Of Children</label><br>
							<input id="noOfChildren" type="text" required>
						</li>
						<li class="form-list">
							<label for="fatherName">Name of Father</label><br>
							<input id="fatherName" type="text" required>
						</li>
						<li class="form-list">
							<label for="motherName">Name of Mother</label><br>
							<input id="motherName" type="text" required>
						</li>
						<li class="form-list">
							<label for="monthlyIncome">Monthly income</label><br>
							<input id="monthlyIncome" type="text" required>
						</li>
						<li class="form-list">
							<label for="noOfMembers">No of Family Members</label><br>
							<input id="noOfMembers" type="text" required>
						</li>
						<li class="form-list">
							<label for="familyDetails">Family Details</label><br>
							<input id="familyDetails" type="text" required>
						</li>
					</ul>
					<div class="grp grp-txa">
						<button>Submit</button>
						<button>Back</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</body>
</html>