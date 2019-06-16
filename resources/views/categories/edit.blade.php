@extends('layouts.master_product')

@section('title')

Update Category
@endsection

@section('content')
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Update Category</h1>
			</div>
			<div class="signup-block">
				<form method="post" enctype="multipart/form-data" action="{{url('categories/edit/'.$category->id)}}">
					@csrf
					<input type="text" name="name" placeholder="Name" required="" value="{{$category->categoryName}}">
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
					<input type="submit" name="Sign In" value="Update Category">														
				</form>
				<div class="sign-down">
								  <h5><a href="{{url('all_cartegories')}}">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
@endsection