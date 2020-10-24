@extends('master')
@section('content')

<div class="container-float carousel py-5">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('myassets/images/service.jpg')}}" class="d-block w-100" alt="...">
				<div class="img-overlay"></div>
				<div class="carousel-caption">
					<h1>Service</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('myassets/images/cover7.jpg')}}" class="d-block w-100" alt="...">
				<div class="img-overlay"></div>
				<div class="carousel-caption">
					<h1>Service</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container py-2">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<img src="{{asset('myassets/images/ab5.jpg')}}" class="img-fluid">
		</div>
		<div class="col-md-6 col-lg-6 col-sm-12">
			<h2>What we offer</h2>
			<p>Our Hotel have many service that is to make client comfortable relax. We describe some service of our hotel as follow:  </p>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6 text-center py-3 logo">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
						<i class="fas fa-mug-hot fa-stack-1x fa-inverse"></i>
					</span>
					<p class="font-weight-bold text-dark pt-3">Tea Coffee</p>	
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 text-center py-3 logo">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
						<i class="fas fa-shower fa-stack-1x fa-inverse"></i>
					</span>
					<p class="font-weight-bold text-dark pt-3">Hot Showers</p>	
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 text-center py-3 logo">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
						<i class="fas fa-soap fa-stack-1x fa-inverse"></i>
					</span>
					<p class="font-weight-bold text-dark pt-3">Laundry</p>	
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 text-center py-3 logo">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
						<i class="fas fa-wifi fa-stack-1x fa-inverse"></i>
					</span>
					<p class="font-weight-bold text-dark pt-3">Free Wifi</p>	
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 text-center py-3 logo">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
						<i class="fas fa-snowflake fa-stack-1x fa-inverse"></i>
					</span>
					<p class="font-weight-bold text-dark pt-3">Air Conditioning</p>	
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 text-center py-3 logo">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
						<i class="fas fa-sink fa-stack-1x fa-inverse"></i>
					</span>
					<p class="font-weight-bold text-dark pt-3">Kitchen</p>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container my-3">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="container-float carousel py-5">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="{{asset('myassets/images/rt7.jpg')}}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="{{asset('myassets/images/rt8.jpg')}}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="{{asset('myassets/images/rt9.jpg')}}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="{{asset('myassets/images/rt13.jpg')}}" class="d-block w-100" alt="...">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 py-5">
			<h4>Dinning & Drinking</h4>
			<p>Destination Hotels has cultivated its restaurants to become an integral part of every unique Destination experience. A true dining experience isn’t limited to just exquisite food alone. Ambiance, service and atmosphere all play an integral role in creating a memorable meal and Destination takes great care to provide unique and beautiful settings to enhance each and every meal.</p>
			<p>Destination’s restaurants embody the character of each individual location. Whether at home or on vacation, enjoy an amazing dining experience at any of the Destination restaurants located at great hotels – not just hotel restaurants. Each restaurant is a destination in and of itself.</p>
			<p>Café Príncipe Real is located in a central, stylish and comfortable area of the luxury hotel with a beautiful terrace overlooking the pool and the city. The Cocktails focal point is centered within our comprehensive list of craft cocktails, designed to embody Lusophony culture and experience. World renowned cocktails with a dash of Portugal to conquer your day.</p>
		</div>	
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<h4>Swimming</h4>
			<p>After a long day of traveling or sightseeing, there’s nothing like a refreshing dip in the pool. If you’re looking to make a splash on your next vacation, we’ve rounded up the most exquisite pools from five-star hotels around the world. With gorgeous designs and indulgent features, these luxurious hotel pools take an afternoon swim to another level. From Phum Baitang’s breathtaking plunge pool in Cambodia to Amandari’s tranquil infinity pool in Bali, there’s no destination unexplored when it comes to this global collection of flowing masterpieces. Whether perched on a rooftop, or settled into flourishing landscape, these summer-worthy retreats will leave you feeling cool all season long.</p>
			<p>In April 2017 this luxury private island hotel in the Maldives acquired a 21.7 metre Sunseeker 68 Sport Yacht to add to its luxury charter offering, which also includes catamarans and a compact and elegant 17.3 metre Majesty 56, which can sleep up to six people in three cabins.</p>
			<p>The new Sunseeker (pictured) has two double and one twin cabin for up to six people and boasts an elegant main saloon/dining area that leads out to an aft deck lounge. Guests can relax forward on vast sunpads or enjoy an al fresco sunset supper on the sundeck.</p>
			<p>One&Only Reethi Rah offers sunset cruises, sandbank dinners, half-day, full-day and overnight charters for guests who yearn to be back on the ocean waves. Surrounded by clear topaz waters ideal for snorkelling and diving, guests can also go fishing or indulge in a breakfast trail cruise, which involves watching the stunning landscapes pass by while enjoying a delicious feast.</p>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="container-float carousel">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="{{asset('myassets/images/sh.jpg')}}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="{{asset('myassets/images/sh1.jpg')}}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="{{asset('myassets/images/po9.jpg')}}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="{{asset('myassets/images/po7.jpg')}}" class="d-block w-100" alt="...">
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

@endsection