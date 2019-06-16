@extends('layouts.master_product')

@section('title')

Delete Cars
@endsection

@section('content')
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Delete Car</h1>
			</div>
			<div class="signup-block">
				<form method="post" enctype="multipart/form-data" action="{{url('cars/delete/'.$car->id)}}">
					@csrf
					<p>{{$car->make}}</p>
					<p>{{$car->email}}</p>
					<p>{{$car->phone_no}}</p>
					<p>{{$car->price}}</p>
                    <p>{{$car->year}}</p>
                    <p>{{$car->condition}}</p>
                    <p>{{$car->transmission}}</p>
                    <p>{{$car->color}}</p>
					
     
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									@if($car->picture)
                <img src="{{url($car->picture)}}">  
                @endif     
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Delete Car">														
				</form>
				<div class="sign-down">
								  <h5><a href="{{url('all_cars')}}">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
@endsection