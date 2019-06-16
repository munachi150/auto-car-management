@extends('layouts.master_aboutus')
@section ('title')

About Us
@endsection

@section('content')

<div class="banner-bottom agile" id="auto">
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

<!-- Intro -->
	<div class="about">
		<div class="container">
			<h3>We make your dreams as real</h3>
			<div class="about-grids">
				<div class="col-md-6 about-grid about-one">
					<div class="about-grid-left">
						<h4>Magnam aliquam quaerateets</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="about-grid-right">
						<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 about-grid about-one">
					<div class="about-grid-right aliquam">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					</div>
					<div class="about-grid-left non">
						<h4>Voluptate velit esse cillum</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-grids">
				<div class="col-md-6 about-grid">
					<div class="about-grid-left">
						<h4>Dolore eu fugiat nulla voluptate</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="about-grid-right">
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 about-grid">
					<div class="about-grid-right aliquam">
						<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
					</div>
					<div class="about-grid-left non">
						<h4>Quis nostrum ullam corporis</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //Intro -->

<!-- Services -->
<div class="services" id="services">
		<h3 class="title-w3">Our Latest Events</h3>
			<div class=" col-md-3 section-grid-wthree one">
				<div class="services-info-w3-agileits">
					<h5 class="sub-title">Nulla Auctor</h5>
					<p class="para-w3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="services-img-agileits-w3layouts">
					<img src="images/ev.jpg" alt="service-img">
				</div>
			</div>
			<div class=" col-md-3 section-grid-wthree">
				<div class="services-img-agileits-w3layouts">
					<img src="images/ev3.jpg" alt="service-img">
				</div>
				<div class="services-info-w3-agileits mid">
					<h5 class="sub-title">Lorem Ipsum</h5>
					<p class="para-w3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
			<div class=" col-md-3 section-grid-wthree">
				<div class="services-info-w3-agileits">
					<h5 class="sub-title">Maecenas Dolor</h5>
					<p class="para-w3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="services-img-agileits-w3layouts">
					<img src="images/ev2.jpg" alt="service-img">
				</div>
			</div>
			<div class=" col-md-3 section-grid-wthree">
				<div class="services-img-agileits-w3layouts">
					<img src="images/ev4.jpg" alt="service-img">
				</div>
				<div class="services-info-w3-agileits mid">
					<h5 class="sub-title">Dolor Amet</h5>
					<p class="para-w3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
		<div class="clearfix"></div>
</div>
<!-- //Services -->

<!-- Count -->
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
<!-- Count -->

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

@endsection