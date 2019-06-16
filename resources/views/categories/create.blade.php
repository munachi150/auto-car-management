@extends('layouts.master_product')
@section('title')
Create Category
@endsection
@section('content')
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Add Category</h1>
			</div>
			<div class="signup-block">
				<form method="post" enctype="multipart/form-data" action="{{url('categories/create')}}">
					@csrf
					<input type="text" name="name" placeholder="Category Name" required="">
				
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<label for="brand1"><span></span>Add picture</label>
									<input type="file" name="picture"  value="picture">
									
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Add Category">														
				</form>
				<div class="sign-down">
								  <h5><a href="{{url('products')}}">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
@endsection