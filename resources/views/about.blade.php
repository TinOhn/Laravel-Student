@extends('master')
@section('content')

<div class="container py-5 my-5">
		<h2 class="text-center">About Hotel</h2><br>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="{{asset('myassets/images/r12.jpg')}}" class="img-fluid">
				<div class="container-float carousel py-2">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{asset('myassets/images/fit.jpg')}}" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="{{asset('myassets/images/bath1.jpg')}}" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="{{asset('myassets/images/bath.jpg')}}" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="{{asset('myassets/images/fit1.jpg')}}" class="d-block w-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<ul>
					<li>Allow an easy, simple and intelligent planning and booking process</li>
					<li>Fast, easy, discreet Checkin & Checkout</li>
					<li>Amazing service: Guests should get the feeling that they are known and valued. Your staff 	should know them by name, be friendly (smiling!) and respectful. Housekeeping and gardeners 	should be quiet and not interfere with a guest’s enjoyment of the property, maintenance 	personnel should appear at guests room within minutes etc.</li>
					<li>The room offered is exact what a guest wanted (in terms of category, classification, 		physical location in the hotel, bed size…)</li>
					<li>Outstanding hotel dining: great breakfast (quality and quantity wise), Michelin-starred 	restaurants, 24 hours room service</li>
					<li>Guest activities and amenities: High-end spa treatments, pool, 24-hour fitness center, 		laundry service, unpacking and packing service, babysitting, petsitting, dog-walking, 		personal trainer referrals, a concierge who knows more than Google…</li>
					<li>Luxury room features: High-quality furnishings with opulent, expensive touches, attention to aesthetic detail, a quiet room with fresh air, original art on the walls, windows that open, robes and slippers, adequate storage, hangers, desk, reading chair, safe, good-size flat-screen TV, iPhone/iPod dock, coffee maker, full-length mirror, effective heating/AC system…And of course a King bed with a good mattress, high-quality sheets and a variety of pillow types (or a pillow menu)!</li>
					<li>Luxury bathrooms: Tub for two, his-and-hers sinks, sufficient counter space, good water pressure, prestige or artisan toiletries, plenty of fluffy, high-quality towels, makeup mirror that lights, enough racks or hooks, bidet (or a TOTO-toilet), ventilation…</li>
				</ul>
			</div>	
		</div>
</div>

@endsection