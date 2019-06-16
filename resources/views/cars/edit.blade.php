@extends('layouts.master_product')

@section('title')

Update Cars
@endsection

@section('content')
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Update Car</h1>
			</div>
			<div class="signup-block">
				<form method="post" enctype="multipart/form-data" action="{{url('cars/edit/'.$car->id)}}">
					@csrf
					<input type="text" name="name" placeholder="Name" required="" value="{{$car->name}}">
					<input type="text" name="email" placeholder="Email" required="" value="{{$car->email}}">
					<input type="text" name="phone_no" placeholder="Phone Number" required="" value="{{$car->phone_no}}">
					<input type="text" name="price" placeholder="Price" required="" value="{{$car->price}}">
					
     <select class="form-control show-tick" name="condition" required="" value="{{$car->condition}}">
                <option value="">-- Condition --</option>
                <option value="new">New</option>
                <option value="White">Nigerian Used</option>
                <option value="Blue">Foriegn Used</option>
                                </select>
                                <select class="form-control show-tick" name="transmission" required="" value="{{$car->transmission}}">
                <option value="">-- Transmission --</option>
                <option value="new">Automatic</option>
                <option value="White">Manual</option>
                                </select>
                                <select class="form-control show-tick" name="year" required="" value="{{$car->year}}">
                <option value="">-- Year Of Manufactured --</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                                </select>
                                <select class="form-control show-tick" name="make" required="" value="{{$car->make}}">
                <option value="">-- Make --</option>
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="Nissan">Nissan</option>
                <option value="Mercedes-Bez">Mercedes-Bez</option>
                <option value="Volkswargen">Volkswargen</option>
                <option value="Infiniti">Infiniti</option>
                <option value="mitsubishi">Mitsubishi</option>
                <option value="land rover">Land Rover</option>
                <option value="peugeot">Peugeot</option>
                <option value="ford">Ford</option>
                <option value="acura">Acura</option>
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Aprilia">Aprilia</option>
                <option value="Astin Martin">Astin Martin</option>
                <option value="Audi">Audi</option>
            </select>
              <select class="form-control show-tick" name="color" required="" value="{{$car->color}}">
                <option value="">-- Color --</option>
                <option value="Red">Red</option>
                <option value="White">White</option>
                <option value="Blue">Blue</option>
                <option value="Purple">Purple</option>
                <option value="black">Black</option>
                <option value="brown">Brown</option>
                <option value="Gold">Gold</option>
                <option value="gray">gray</option>
                <option value="Orange">Orange</option>
                <option value="Pink">Pink</option>
                <option value="Silver">Silver</option>
                <option value="Yellow">Yellow</option>
                <option value="Other">Other</option>
                </select>
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
					<input type="submit" name="Sign In" value="Add Car">														
				</form>
				<div class="sign-down">
								  <h5><a href="{{url('all_cars')}}">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
@endsection