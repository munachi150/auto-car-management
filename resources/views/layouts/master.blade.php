<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')::</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auto Car Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link href="{{url('css/mislider.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('css/mislider-custom.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{url('css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="{{('//fonts.googleapis.com/css?family=Jockey+One&amp;subset=latin-ext')}}" rel="stylesheet">
<link href="{{('//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese')}}" rel="stylesheet">
<link href="{{('//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext')}}" rel="stylesheet">
<!-- //online-fonts -->
</head>
	
<body>
<!-- banner -->
	@include('partials.header')

	@yield('content')
<!-- //banner -->

<!-- Main -->
<!-- About -->
<div class="banner-bottom agile" id="about">
	<div class="container">
		<h2 class="tittle-one wow fadeInDown">About Us</h2>
		<div class="bottom-grids agileinfo">
			<div class="col-md-6 bottom-grid fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<img src="images/ab1.jpg" alt="">
			</div>
			<div class="col-md-6 bottom-grid grid-one wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
				<h4>Lorem Ipsum is simply</h4>
				<p>Libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus  ut et voluptates repudiandae sint et molestiae non recusandae</p>
				<p>Libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus  ut et voluptates repudiandae sint et molestiae non recusandae</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //About -->

<!--count-->
			<div class="count-agileits">
				<canvas id="myCanvas"></canvas>
				<div class="count-grids">
					<div class="count-bgcolor-w3ls">
						<div class="col-md-4 count-grid">
						<i class="fa fa-users" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2046' data-delay='.5' data-increment="100">2046</div>
									<span></span>
									<h5>Happy Clients</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='768' data-delay='.5' data-increment="100">768</div>
									<span></span>
									<h5>Our Products</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10762' data-delay='.5' data-increment="100">102762</div>
									<span></span>
									<h5>Likes</h5>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
<!--count-->

<!-- Services -->
	<div class="why-choose-agile">
		<div class="container">
			<h3 class="w3l_head">Best Services</h3>
			<div class="why-choose-agile-grids-top">
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Service 1</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-truck" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Service 2</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Service 3</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 agileits-w3layouts-grid img">
					<img src="images/abs.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
					<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Service 4</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
					<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-cogs" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Service 5</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
					<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Service 6</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
						
						<div class="clearfix"> </div>
					</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
<!-- //services -->

<!-- Team -->
	<div class="team-agile">
				<div class="w3-agile-he">
					<h3>Our Excellent Team</h3>
				</div>
			<div class="mis-stage"> 
				<!-- The element to select and apply miSlider to - the class is optional -->
				<ol class="mis-slider">
					<!-- The slider element - the class is optional -->
					<li class="mis-slide"> 
					<!-- A slide element - the class is optional --> 
						<a href="#" class="mis-container"> 
						<!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
						<figure> 
						<!-- Slide content - whatever you want --> 
						<img src="images/t1.jpg" alt=" " class="" />
						<figcaption>Carl Lii</figcaption>
						</figure>
						</a> </li>
					<li class="mis-slide"> <a href="#" class="mis-container">
						<figure> <img src="images/t2.jpg" alt=" " class="" />
						<figcaption>Michael Paul</figcaption>
						</figure>
						</a> </li>
					<li class="mis-slide"> <a href="link" class="mis-container">
						<figure> <img src="images/t3.jpg" alt=" " class="img" />
						<figcaption>Henry Doe</figcaption>
						</figure>
						</a> </li>
					<li class="mis-slide"> <a href="#" class="mis-container">
						<figure> <img src="images/t4.jpg" alt=" " class="img" />
						<figcaption>Laura James</figcaption>
						</figure>
						</a> </li>
					<li class="mis-slide"> <a href="#" class="mis-container">
						<figure> <img src="images/t5.jpg" alt=" " class="img" />
						<figcaption>Thomas Carl</figcaption>
						</figure>
						</a> </li>
					<li class="mis-slide"> <a href="#" class="mis-container">
						<figure> <img src="images/t7.jpg" alt=" " class="img" />
						<figcaption> Korth Jrnt</figcaption>
						</figure>
						</a> </li>
					<li class="mis-slide"> <a href="#" class="mis-container">
						<figure> <img src="images/t6.jpg" alt=" " class="img" />
						<figcaption>Nukrt Knls</figcaption>
						</figure>
						</a> </li>
				</ol>
			</div>
	</div>
<!-- //Team -->
<!-- //Main -->

<!-- Footer -->
@include('partials.footer')

<!-- Footer -->	


<!-- js-scripts -->						
		<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
		
		<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
		
							
								
		<!-- Starts-Number-Scroller-Animation-JavaScript -->
				<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		<!-- //Starts-Number-Scroller-Animation-JavaScript -->
		
		
		
			<!-- particles-JavaScript -->
			<script src="js/particles.min.js"></script>
				<script>
				  window.onload = function() {
					Particles.init({
					  selector: '#myCanvas',
					  color: '#b3b3b3',
					  connectParticles: true,
					  minDistance: 100
					});
				  };
				</script>
	
		<!-- //particles-JavaScript -->
		
		<!-- team-plugin -->
			<script src="js/mislider.js" type="text/javascript"></script>
				<script type="text/javascript">
						jQuery(function ($) {
							var slider = $('.mis-stage').miSlider({
								//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
								stageHeight: 380,
								//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
								slidesOnStage: false,
								//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
								slidePosition: 'center',
								//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
								slideStart: 'mid',
								//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
								slideScaling: 150,
								//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
								offsetV: -5,
								//  Center slide contents vertically - Boolean. Default: false
								centerV: true,
								//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
								navButtonsOpacity: 1,
							});
						});
					</script>
		<!-- //team-plugin -->

		<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- start-smoth-scrolling -->


<!-- //js-scripts -->
</body>
</html>