<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">

	<script src="js/jquery.js"></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/packery.pkgd.min.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
	 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		 <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	 </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie-8.css">
	<![endif]-->
	</head>
<body class="index-2">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<div class="social">
						<a href="#"><span class="bd-ra fa fa-facebook"></span></a>
						<a href="#"><span class="bd-ra fa fa-tumblr"></span></a>
						<a href="#"><span class="bd-ra fa fa-google-plus"></span></a>
					</div>
					<h1><a href="index.html">Zamboanga Peninsula<span> </span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href=" ">Provinces</a>
									<ul>
										<li><a href="{{ route('zamdelnorte') }}">Zamboanga del Norte</a></li>
										<li><a href="{{ route('zamdelsur') }}">Zamboanga del Sur</a>
											<!--<ul>
												<li><a href="#">Lorem ipsum</a></li>
												<li><a href="#">Lorem ipsum</a></li>
												<li><a href="#">Lorem ipsum</a></li>
											</ul>-->
										</li>
										<li><a href="{{ route('zamsibugay') }}">Zamboanga Sibugay</a></li>
									</ul>
								</li>
							<li class="current"><a href="{{ route('index') }}">Destination</a></li>
							<li><a href="{{ route('blog') }}">Forum</a></li>
							<li><a href="{{ route('index') }}">About Us</a></li>
							<li><a href="{{ route('contacts') }}">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>


<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Our Projects</span></h2>
					</header>
				</div>
				<div id="touch_gallery">
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-1-big.jpg"><img src="images/index-2_img-1.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Anderson Group Philippines</h4>
							<p>To all my fellow, wanna be devs on their internship. please, dont apply here. just sayin. thnks. 
							hope it helps.
					</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-2-big.jpg"><img src="images/index-2_img-2.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Aliquam nibh ante</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-3-big.jpg"><img src="images/index-2_img-3.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Cliqum nibh anteter</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-4-big.jpg"><img src="images/index-2_img-4.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Gyloiqum nibh ante</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-5-big.jpg"><img src="images/index-2_img-5.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Hqum nibh antetem</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-6-big.jpg"><img src="images/index-2_img-6.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Hoiqum nibh antetew</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-7-big.jpg"><img src="images/index-2_img-7.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Cliqum nibh anteter</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-8-big.jpg"><img src="images/index-2_img-8.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Moqum nibh untetek</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-2_img-9-big.jpg"><img src="images/index-2_img-9.jpg" alt="Services"><i></i></a></div>
						<article>
							<h4>Dliqum nibh anteta</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
				</div>
				<div class="grid_12">
					<div class="pagination"><a href="#" class="active">1</a><a href="#">2</a></div>
				</div>
			</div>
		</div>

	</div>
</section>

<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<div class="copyright">
					<pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom"><a href="http://www.templatemonster.com/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>
<script>
	$(function(){
		$('#touch_gallery a').touchTouch();
	});
</script>

</body>
</html>
