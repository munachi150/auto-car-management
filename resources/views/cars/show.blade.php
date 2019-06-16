@extends('layouts.master_product')
@section('title')
Car Details

@endsection

@section('content')

<div class="inner-block">
    <div class="product-block">
    	
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="images/pro1.jpg" alt="">
					</div>
	    		
    		</div>
    	
    	</div>
    	
    	
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro7.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="{{url($car->picture)}}" alt="">
				</div>
	    		<div class="produ-cost">
	    			<h4>Car &nbsp&nbsp{{$car->make}}</h4>
	    			<h5>Car Price&nbsp&nbsp&nbsp{{$car->price}}</h5>
	    			<h5>Transmission&nbsp&nbsp&nbsp{{$car->transmission}}</h5>
	    			<h5>Year of manufacture&nbsp&nbsp&nbsp{{$car->year}}</h5>
	    			<h5>Condition of car&nbsp&nbsp&nbsp{{$car->condition}}</h5>
	    			<h5>Color&nbsp&nbsp&nbsp{{$car->color}}</h5>
	    			
	    		</div>
    		</div>
    	</div>
    	
    	
    	
      <div class="clearfix"> </div>
    </div>
</div>
@endsection