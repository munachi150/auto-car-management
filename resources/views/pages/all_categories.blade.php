@extends('layouts.master_product')

@section('title')
All Categories
@endsection
@section('content')


    	<div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Categories</h2>
    	</div>

    	
    	@foreach($categories as $category)
    	<div class="col-md-3 product-grid">

    		<div class="product-items">
	    		   <div class="project-eff">
						<div id="nivo-lightbox-demo">
							
						 <p> <a href="images/pro2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="{{$category->picture}}" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4>{{$category->categoryName}}</h4>
	    			<h5><span><a href="{{url('category/'.$category->url)}}" style="color: white">View</a></span> &nbsp &nbsp<span><a href="{{url('categories/edit/'.$category->id)}}" style="color: white">Update</a></span>&nbsp &nbsp
                        <span><a href="{{url('categories/delete/'.$category->id)}}" style="color: white">Delete</a></span></h5>

	    		</div>
    		</div>
    	</div>
    	@endforeach
    	
      <div class="clearfix"> </div>
    </div>
</div>
</div>
        <div class="row clearfix">
            <div class="col-sm-12 text-center">
                <a href="{{url('categories/create')}}" class="btn btn-raised g-bg-cyan">Add category</a>
            </div>
        </div>
    </div>
</section>
@endsection