<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" href="./css/demo.css">
    <link rel="stylesheet" href="./css/slippry.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css" />
	<script src="./js/jquery-1.7.1.min.js"></script>
	<script src="./js/slippry.js"></script>
	<script>
		$(function() {
			var demo1 = $("#demo1").slippry({
				// transition: 'fade',
				// useCSS: true,
				// speed: 1000,
				// pause: 3000,
				// auto: true,
				// preload: 'visible',
				// autoHover: false
			});
		});
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
						<li><a href="./home">Home</a></li>
						<li><a href="./about">About</a></li>
						<li><a href="./donate">Donate</a></li>
						<li><a href="./contact">Contact</a></li>
					</ul>
				</nav>
				<div class="search">
					<input type="text">
				</div>
				<div class="en-ml">
					<a href="./ml/home">മലയാളം</a>
				</div>
				<a href="registerForm.php" class="login">Application</a>
			</div>
		</div>
	</header>
	<section class="demo_wrapper">
		<article class="demo_block">
		<ul id="demo1">
			<!-- <li><a href="#slide1"><img src="img/image-1.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li> -->
			<li><a href="#slide1"><img src="./images/image-1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ex aut, laborum tempora obcaecati earum nesciunt totam ad nulla fuga nam veniam. <a class='button-donate' href='donerForm'>Donate</a>"></a></li>
			<li><a href="#slide2"><img src="./images/image-2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni reiciendis omnis eius quisquam inventore suscipit ipsum dolor, ad cumque. <a class='button-donate' href='donerForm'>Donate</a>"></a></li>
			<li><a href="#slide3"><img src="./images/image-4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis rem accusantium omnis dolorum eius assumenda voluptate, alias suscipit. <a class='button-donate' href='donerForm'>Donate</a>"></a></li>
		</ul>
		</article>
	</section>		
	<section class="help-sec">
		<!-- <div class="container"> -->
			<div class="help-head">
					<h1>How can You help</h1>
				</div>
			<ul class="how-help">
				<li>
					<div class="kunipp"></div>
					<a href="donerForm.php">
						<h3>Make Donation</h3>
					</a>
				</li>
				<li>
					<a href="#joinUs.php">
						<h3>Join Us</h3>
					</a>
				</li>
			</ul>
		<!-- </div> -->
	</section>
	<section>
		<div class="container">
			<ul class="pathayam-details">
				<li>
					<h2>About Sneha Pathayam</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas atque, voluptates, commodi nihil sequi temporibus provident tempore aliquid expedita cum officia harum, dolores voluptate praesentium adipisci! Quibusdam earum nisi vitae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ea aliquam consequuntur. Adipisci doloribus fuga soluta Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque totam ratione expedita repellendus nihil atque culpa, deleniti id consequuntur, minima nobis fugit eveniet quasi mollitia beatae quam nemo dolorem ullam? praesentium odio, libero dolorum unde quaerat consequatur, rerum cupiditate minima voluptatem doloremque nemo eaque.</p>
					<button class="read-more">Read more</button>
				</li>
				<li>
					<h2>How Can I Donate</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum explicabo, dolorem aspernatur hic accusantium perspiciatis, consequuntur, non labore tempore reiciendis quas sit laudantium. Nihil, quidem in esse veritatis. Assumenda, magni. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, nesciunt saepe quas rem error animi, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quasi error distinctio, amet doloremque eum ipsam, incidunt reprehenderit porro asperiores! Nostrum eos, fugit, sequi qui aspernatur impedit. Tempora, doloremque, voluptatem! quam illum, iusto aliquam, tempore ipsa. Consequuntur sunt, possimus doloribus incidunt cumque totam doloremque accusantium.</p>
					<button class="read-more">Read more</button>
				</li>
			</ul>
		</div>
	</section>
	<section class="testimonial">
		<div class="container">
			<h1>Testimonial</h1>
			<ul class="testimonial-list">
				<li>
					<div class="caption">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi recusandae fugit nulla at, fuga, voluptatibus quis ea? Similique itaque quisquam, ea, molestiae provident eos quam, necessitatibus delectus incidunt exercitationem veniam!</p>
					</div>
					<img src="images/demo.jpg" alt="">
					<h4>Name</h4>
					<p>Position</p>
				</li>
				<li>
					<div class="caption">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae earum enim est quae saepe illo maxime nobis debitis, vero magni neque hic, quaerat omnis error amet! Asperiores, laborum, magnam!</p>
					</div>
					<img src="images/demo.jpg" alt="">
					<h4>Name</h4>
					<p>Position</p>
				</li>
				<li>
					<div class="caption">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, numquam! Necessitatibus optio laudantium dicta, deserunt ratione asperiores neque, et expedita libero a nobis quae officia blanditiis sequi nemo assumenda nulla!</p>
					</div>
					<img src="images/demo.jpg" alt="">
					<h4>Name</h4>
					<p>Position</p>
				</li>
			</ul>
		</div>
	</section>
	