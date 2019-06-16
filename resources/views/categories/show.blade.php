@extends('layouts.master_product')
@section('title')
Category Details

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
							<img class="img-responsive" src="{{url($category->picture)}}" alt="">
				</div>
	    		<div class="produ-cost">
	    			<h4>Category &nbsp&nbsp{{$category->categoryName}}</h4>
	    			
	    		</div>
    		</div>
    	</div>
    	
    	
    	
      <div class="clearfix"> </div>
    </div>
</div>
@endsection