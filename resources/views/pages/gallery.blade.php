@extends('layouts.master_aboutus')

@section('title')
Gallary
@endsection

@section('content')
<div class="gallery">
		<div class="container">
			<h2>Gallery</h2>
			
    	
    	@foreach($cars as $car)
    	<div class="col-md-3 product-grid">

    		<div class="product-items">
	    		   <div class="project-eff">
						<div id="nivo-lightbox-demo">
							
						 <p> <a href="images/pro2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="{{$car->picture}}" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4>{{$car->make}}</h4>
	    			<h5><span><a href="{{url('car/'.$car->url)}}" style="color: gray">View</a></span> </h5>

	    		</div>
    		</div>
    	</div>
    	@endforeach
		<div class="clearfix"> </div>
    </div>
</div>
</div>
     
    </div>
</section>
@endsection