<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('../css/normalize.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('../css/demo.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('../css/slippry.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('mal/css/theme.css'); ?>" />
		<script src="../js/jquery-1.7.1.min.js"></script>
		<script src="../js/slippry.js"></script>
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
					<img src="../images/path1.png" alt="">
				</div>
				<div class="menu">
					<nav>
						<ul class="navigation-menu">
							<li><a href="home">ഹൊം</a></li>
							<li><a href="donate">നല്കാം</a></li>
							<li><a href="about">എന്തിന്</a></li>
							<li><a href="contact">ബന്ധപെടൽ</a></li>
						</ul>
					</nav>
					<div class="search">
						<input type="text">
					</div>
					<div class="en-ml">
						<a href="../home">English</a>
					</div>
					<a href="registerForm" class="login">ആപേക്ഷ</a>
				</div>
			</div>
		</header>
		<section class="demo_wrapper">
			<article class="demo_block">
			<ul id="demo1">
				<!-- <li><a href="#slide1"><img src="img/image-1.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li> -->
				<li><a href="#slide1"><img src="../images/image-1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ex aut, laborum tempora obcaecati earum nesciunt totam ad nulla fuga nam veniam. "></a></li>
				<li><a href="#slide2"><img src="../images/image-2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni reiciendis omnis eius quisquam inventore suscipit ipsum dolor, ad cumque "></a></li>
				<li><a href="#slide3"><img src="../images/image-4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis rem accusantium omnis dolorum eius assumenda voluptate, alias suscipit qu"></a></li>
			</ul>
			</article>
		</section>
		<section class="help-sec">
			<div class="help-head">
				<div class="align-h1">
					<h1>ഞങ്ങളെ എങ്ങനെ സഹായിക്കാം</h1>
				</div>
			</div>
			<ul class="how-help">
				<li>
					<div class="kunipp"></div>
					<a href="donerForm.php">
						<h3>സഹായിക്കാൻ</h3>
					</a>
				</li>
				<li>
					<a href="#joinUs.php">
						<h3>ഞങ്ങളുടെ ഭാഗമാകൂ</h3>
					</a>
				</li>
			</ul>
		</section>
		<section>
			<div class="container">
				<ul class="pathayam-details">
					<li>
						<h2>സ്‌നേഹപത്തായം</h2>
						<p>നിലമ്പൂര്‍ നഗരസഭയുടെ അന്വേഷണമാണ് സ്‌നേഹപത്തായം എന്ന കാരുണ്യ പദ്ധതി, സാങ്കേതിക നൂലാമാലകളെല്ലാം തട്ടിനീക്കി സുമനസുകളുടെ സഹായത്തോടെ ദുരിതബാധിതരെ കണ്ടെത്തി അവര്‍ക്ക് ആവശ്യമുള്ള സഹായം എത്തിക്കുന്ന പദ്ധതിയാണിത്. ആവശ്യത്തിന് വസ്ത്രങ്ങളില്ലാത്ത കുടുംബങ്ങള്‍ക്ക് പുതുവസ്ത്രമായും സ്‌നേഹപത്തായം തുറക്കും. പണ്ട് പഞ്ഞമാസത്തേക്കുള്ള വിഭവങ്ങള്‍ സൂക്ഷിച്ചിരുന്ന പത്തായത്തില്‍ സുമനസുകളുടെ സഹായത്തോടെ നമുക്കു ചുറ്റുമുള്ള പാവങ്ങള്‍ക്കായുള്ള വിഭവങ്ങള്‍ നിറക്കുകയാണ് നമ്മള്‍. വിലകൂടിയ കാന്‍സര്‍ മരുന്നുകള്‍ വാങ്ങാന്‍ പണമില്ലാതെ ചികിത്സ നിലച്ചവര്‍ക്ക് മരുന്നായും ഭക്ഷണത്തിനു പ്രയാസമനുഭവിക്കുന്നവര്‍ക്ക് മുന്നില്‍ ഭക്ഷണമായും ആവശ്യത്തിന് വസ്ത്രങ്ങളില്ലാത്ത കുടുംബങ്ങള്‍ക്ക് പുതുവസ്ത്രമായും സ്‌നേഹപത്തായം തുറക്കും.</p>
						<button class="read-more">കൂടുതൽ.</button>
					</li>
					<li>
						<h2>എങ്ങനെ സഹായിക്കാം</h2>
						<p>നഗരസഭ നടത്തിയ ഓണാഘോഷത്തില്‍ അളക്കല്‍ കോളനി മൂപ്പന്‍ ചാത്തനും ഭാര്യ ചന്ദ്രികയും കാട്ടില്‍ നിന്നും ശേഖരിച്ച തേനും കുടമ്പുളിയും സമ്മാനിച്ചാണ് സ്‌നേഹപത്തായത്തിലേക്കുള്ള വിഭവ സമാഹരണം ഉദ്ഘാടനം ചെയ്തത്. വിവിധ തുറകളില്‍ നിന്നായി നരവധി പേരാണ് സഹായവുമായെത്തിയത്. പണമായി സ്വീകരിക്കാതെ മരുന്നും വസത്രവും ഭക്ഷണവുമായാണ് സഹായങ്ങള്‍ ശേഖരിച്ചത്. നഗരസഭ നടത്തിയ ഓണാഘോഷത്തില്‍ അളക്കല്‍ കോളനി മൂപ്പന്‍ ചാത്തനും ഭാര്യ ചന്ദ്രികയും കാട്ടില്‍ നിന്നും ശേഖരിച്ച തേനും കുടമ്പുളിയും സമ്മാനിച്ചാണ് സ്‌നേഹപത്തായത്തിലേക്കുള്ള വിഭവ സമാഹരണം ഉദ്ഘാടനം ചെയ്തത്. വിവിധ തുറകളില്‍ നിന്നായി നരവധി പേരാണ് സഹായവുമായെത്തിയത്. പണമായി സ്വീകരിക്കാതെ മരുന്നും വസത്രവും ഭക്ഷണവുമായാണ് സഹായങ്ങള്‍ ശേഖരിച്ചത്.</p>
						<button class="read-more">കൂടുതൽ.</button>
					</li>
				</ul>
			</div>
		</section>
		<section class="testimonial">
			<div class="container">
				<h1>പ്രതികരണങ്ങൾ</h1>
				<ul class="testimonial-list">
					<li>
						<div class="caption">
							<p>നിലമ്പൂര്‍ നഗരസഭയുടെ അന്വേഷണമാണ് സ്‌നേഹപത്തായം എന്ന കാരുണ്യ പദ്ധതി, സാങ്കേതിക നൂലാമാലകളെല്ലാം തട്ടിനീക്കി സുമനസുകളുടെ സഹായത്തോടെ ദുരിതബാധിതരെ കണ്ടെത്തി അവര്‍ക്ക് ആവശ്യമുള്ള സഹായം എത്തിക്കുന്ന പദ്ധതിയാണിത്.</p>
						</div>
						<img src="../images/aryadan-shoukath.jpg" alt="">
						<h4>പേര്</h4>
						<p>തസ്തിക</p>
					</li>
					<li>
						<div class="caption">
							<p>ആവശ്യത്തിന് വസ്ത്രങ്ങളില്ലാത്ത കുടുംബങ്ങള്‍ക്ക് പുതുവസ്ത്രമായും സ്‌നേഹപത്തായം തുറക്കും. പണ്ട് പഞ്ഞമാസത്തേക്കുള്ള വിഭവങ്ങള്‍ സൂക്ഷിച്ചിരുന്ന പത്തായത്തില്‍ സുമനസുകളുടെ സഹായത്തോടെ നമുക്കു ചുറ്റുമുള്ള പാവങ്ങള്‍ക്കായുള്ള വിഭവങ്ങള്‍ നിറക്കുകയാണ് നമ്മള്‍. </p>
						</div>
						<img src="../images/demo.jpg" alt="">
						<h4>പേര്</h4>
						<p>തസ്തിക</p>
					</li>
					<li>
						<div class="caption">
							<p>വിലകൂടിയ കാന്‍സര്‍ മരുന്നുകള്‍ വാങ്ങാന്‍ പണമില്ലാതെ ചികിത്സ നിലച്ചവര്‍ക്ക് മരുന്നായും ഭക്ഷണത്തിനു പ്രയാസമനുഭവിക്കുന്നവര്‍ക്ക്  മുന്നില്‍ ഭക്ഷണമായും ആവശ്യത്തിന് വസ്ത്രങ്ങളില്ലാത്ത കുടുംബങ്ങള്‍ക്ക് പുതുവസ്ത്രമായും സ്‌നേഹപത്തായം തുറക്കും.</p>
						</div>
						<img src="../images/demo.jpg" alt="">
						<h4>പേര്</h4>
						<p>തസ്തിക</p>
					</li>
				</ul>
			</div>
		</section>
		