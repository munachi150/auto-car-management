<div class="banner wthree">
		<div class="container">
			<div class="banner_top">
				<div class="logo wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<h1><a href="{{url('home')}}"><span>A</span>uto Car</a></h1>
				</div>
				<div class="banner_top_right wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
					
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav cl-effect-14">
						<li><a href="{{url('home')}}" class="">Home</a></li>
						<li><a href="{{url('about_us')}}">About Us</a></li>
						<li><a href="{{url('services')}}">Services</a></li>
						<li><a href="{{url('gallery')}}">Gallary</a></li>
						<li><a href="{{('all_cars')}}">Product</a></li>
						<li><a href="{{url('contact_us')}}">Contact Us</a></li>
						@auth
						<li><span style="color: #fff;  text-transform: uppercase;">{{auth()->user()->name}}</span></li>
						
						<li><span class="signout"><a href="{{url('logout')}}" class="" style="color: white">SIGNOUT</a>
	@else
		<a href="{{url('login')}}" class="" style="color: white">SIGNIN</a>
<a href="{{url('register')}}" class="" style="color: white">SIGNUP</a></span>

			@endauth</li>
					</ul>
				</div><!-- /.navbar-collapse -->	
				
			</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- banner -->
			<!--Slider-->
					
			<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
						
							<div class="slider-info">
							    <h3>Fast cars are my <span>only vice.</span> </h3>
							</div>
						</li>
						<li>
							<div class="slider-info">
							     <h3>Cars bring me sheer <span>joy.</span> </h3>
						    </div>
						</li>
						<li>
							
							<div class="slider-info">
							     <h3>Fast cars are my <span>only vice.</span> </h3>
							</div>
						</li>
						

					</ul>
					
				<div class="clearfix"></div>
			</div>
			<!--//Slider-->
		</div>
		<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>