@extends('layouts.master_product')

@section('title')

Delete Category
@endsection

@section('content')
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Delete Category</h1>
			</div>
			<div class="signup-block">
				<form method="post" enctype="multipart/form-data" action="{{url('categories/delete/'.$category->id)}}">
					@csrf
					<p>{{$category->categoryName}}</p>
					
     
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									@if($category->picture)
                <img src="{{url($category->picture)}}">  
                @endif     
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Delete Category">														
				</form>
				<div class="sign-down">
								  <h5><a href="{{url('all_cars')}}">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
@endsection