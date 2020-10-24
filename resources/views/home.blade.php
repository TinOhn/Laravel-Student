@extends('master')
@section('content')

<!-- Curosel -->
	<div class="container-float carousel py-5">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('myassets/images/cover5.jpg')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1>Top Hotel In The City</h1>
						<p>Hotel & Resort</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('myassets/images/cover2.jpg')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1>Top Hotel In The City</h1>
						<p>Hotel & Resort</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('myassets/images/cover3.jpg')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1>Top Hotel In The City</h1>
						<p>Hotel & Resort</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('myassets/images/cover4.jpg')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1>Top Hotel In The City</h1>
						<p>Hotel & Resort</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container check border border-dark py-4">
		<h3 class="text-center pb-3">Booking Form</h3>
		<form class="">
			<div class="form-row">
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputEmail4">Name</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Enter Full Name">
				</div>
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputPassword4">Phone</label>
					<input type="password" class="form-control" id="inputPassword4" placeholder="Enter Phone">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputEmail4">Address</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Enter Address">
				</div>
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputState">Rooms</label>
					<select id="inputState" class="form-control">
						<option selected>Choose</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputEmail4">Check In</label>
					<input type="date" class="form-control" id="date1">
				</div>
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputPassword4">Check Out</label>
					<input type="date" class="form-control" id="date2">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputState">Adult</label>
					<select id="inputState" class="form-control">
						<option selected>Choose</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="form-group col-md-6 col-lg-6">
					<label for="inputState">Children</label>
					<select id="inputState" class="form-control">
						<option selected>Choose</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="text-center">
				<button type="submit" class="btn1">Book Now</button>
			</div>
		</form>
	</div>
	<div class="container my-5">
		<h2 class="text-center">About Hotel</h2><br>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="{{asset('myassets/images/r12.jpg')}}" class="img-fluid">
			</div>
			<div class="col-md-6 col-sm-12">
				<ul>
					<li>Allow an easy, simple and intelligent planning and booking process</li>
					<li>Fast, easy, discreet Checkin & Checkout</li>
					<li>Amazing service: Guests should get the feeling that they are known and valued. Your staff 	should know them by name, be friendly (smiling!) and respectful. Housekeeping and gardeners 	should be quiet and not interfere with a guest’s enjoyment of the property, maintenance 	personnel should appear at guests room within minutes etc.</li>	
				<a href="pages/about.html"><button class="btn1">Learn More</button></a>
			</div>	
		</div>
	</div><br>
	<div class="container py-1">
		<h3 class="text-center">Our Rooms</h3>
		<div class="row justify-content-center">
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<div class="card_img">
						<a href="#"><img src="{{asset('myassets/images/r1.jpg')}}" class="card-img-top border image"></a>
						<div class="detail" data-toggle="modal" data-target="#myModal">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<h5>Classic Double Bed</h5>
						<p>$250/ par night</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<div class="card_img">
						<a href="#"><img src="{{asset('myassets/images/r14.jpg')}}" class="card-img-top border image"></a>
						<div class="detail" data-toggle="modal" data-target="#myModal">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<h5>Classic Double Bed</h5>
						<p>$150/ par night</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<div class="card_img">
						<a href="#"><img src="{{asset('myassets/images/r13.jpg')}}" class="card-img-top border image"></a>
						<div class="detail" data-toggle="modal" data-target="#myModal">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<h5>Classic Double Bed</h5>
						<p>$200/ par night</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<div class="card_img">
						<a href="#"><img src="{{asset('myassets/images/r4.jpg')}}" class="card-img-top border image"></a>
						<div class="detail" data-toggle="modal" data-target="#myModal">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<h5>Classic Double Bed</h5>
						<p>$250/ par night</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<div class="card_img">
						<a href="#"><img src="{{asset('myassets/images/r5.jpg')}}" class="card-img-top border image"></a>
						<div class="detail" data-toggle="modal" data-target="#myModal">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<h5>Classic Double Bed</h5>
						<p>$150/ par night</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<div class="card_img">
						<a href="#"><img src="{{asset('myassets/images/r11.jpg')}}" class="card-img-top border image"></a>
						<div class="detail" data-toggle="modal" data-target="#myModal">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<h5>Classic Double Bed</h5>
						<p>$200/ par night</p>
					</div>
				</div>
			</div>
			<a href="pages/rooms.html"><button class="btn1">View More</button></a>
		</div>
	</div>
	<div class="container py-3 my-4">
		<h2 class="text-center">Our Service</h2><br>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="{{asset('myassets/images/rt1.jpg')}}" class="img-fluid">
			</div>
			<div class="col-md-6 col-sm-12">
				<h4>Dinning & Drinking</h4>
				<p>Destination Hotels has cultivated its restaurants to become an integral part of every unique Destination experience. A true dining experience isn’t limited to just exquisite food alone. Ambiance, service and atmosphere all play an integral role in creating a memorable meal and Destination takes great care to provide unique and beautiful settings to enhance each and every meal.</p>
				<p>The Cocktails focal point is centered within our comprehensive list of craft cocktails, designed to embody Lusophony culture and experience. World renowned cocktails with a dash of Portugal to conquer your day.</p>
				<a href="pages/service.html"><button class="btn1">Learn More</button></a>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12 my-5">
				<h4>Swimming Pool</h4>
				<p>After a long day of traveling or sightseeing, there’s nothing like a refreshing dip in the pool. If you’re looking to make a splash on your next vacation, we’ve rounded up the most exquisite pools from five-star hotels around the world. With gorgeous designs and indulgent features, these luxurious hotel pools take an afternoon swim to another level. From Phum Baitang’s breathtaking plunge pool in Cambodia to Amandari’s tranquil infinity pool in Bali, there’s no destination unexplored when it comes to this global collection of flowing masterpieces.</p>
				<a href="pages/service.html"><button class="btn1">Learn More</button></a>
			</div>
			<div class="col-md-6 col-sm-12 my-5">
				<img src="{{asset('myassets/images/po5.jpg')}}" class="img-fluid">
			</div>	
		</div>
	</div>
	<div class="container py-3">
		<div class="row justify-content-center">
			<a href="#" class="pt-5"><span class="fa-stack fa-2x text-left text-info">
				<i class="fas fa-circle fa-stack-2x"></i>
				<i class="fas fa-angle-left fa-stack-1x fa-inverse"></i>
				</span>
			</a>
			<div class="col-xl-7 col-lg-7 col-md-7 px-4">
				<div class="font-back-tittle mb-105 text-center">
					<div class="comment">
						<img src="{{asset('myassets/images/tourism.jpg')}}" alt="">
					</div>
				</div>
				<div class="testimonial-caption text-center px-4">
					<p>The service is amazing with nice and ever smiling staff. The beach restaurant is incredible: picture a few table scattered below coconut trees and looking out on the Indian ocean. Food is fresh, delicate and flavourful.
					</p>
					<div class="ratting">
						<a href="#"><i class="fas fa-star"></i></a>
						<a href="#"><i class="fas fa-star"></i></a>
						<a href="#"><i class="fas fa-star"></i></a>
						<a href="#"><i class="fas fa-star"></i></a>
						<a href="#"><i class="fas fa-star"></i></a>
					</div>
					<div class="rattiong-caption px-4">
						<span>William, <span>Regular Client</span> </span>
					</div>
				</div>
			</div>
			<a href="#" class="pt-5">
				<span class="fa-stack fa-2x text-right text-info">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fas fa-angle-right fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="container my-5">
		<h1 class="text-center">Our Latest News And Blog</h1>
		<div class="row">
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/p3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p>News Menu</p>
						<span>25/12/2020</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/p5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p>News Menu</p>
						<span>25/12/2020</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/p7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p>News Menu</p>
						<span>25/12/2020</span>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!-- Modal Box -->
	<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Room Detail</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('myassets/images/r1.jpg')}}" class="img-fluid">
						</div>
						<div class="col-md-6">
							<h4>Suit Room</h4>
							<p>Max: 3 Persons</p>
							<p>Size: 45 m2</p>
							<p>View: Sea View</p>
							<p>Bed: 1</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
@endsection