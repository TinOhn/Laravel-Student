@extends('master')
@section('content')


	<!-- Blog -->
	<div class="container-float py-5">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('myassets/images/cover6.jpg')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1>Blog</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container my-3 py-3">
		<div class="row">
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/rt13.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h3>Work Hard And Party Hard</h3>
						<p>Café Príncipe Real is located in a central, stylish and comfortable area of the luxury hotel with a beautiful terrace overlooking the pool and the city. The Cocktails focal point is centered within our comprehensive list of craft cocktails, designed to embody Lusophony culture and experience. World renowned cocktails with a dash of Portugal to conquer your day.</p>
						<span>12/12/2020</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/r5.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h3>Work Hard And Party Hard</h3>
						<p>When it comes to luxury rooms, hotels just keep upping the ante. Just a few of the over-the-top amenities you can expect during a stay in these swanky suites include in-room cinemas and infinity pools, terraces as big as apartments, and butlers who'll cater to your every need. Here are some of the top luxury hotel rooms in the world.</p>
						<span>15/12/2020</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/po8.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h3>Work Hard And Party Hard</h3>
						<p>After a long day of traveling or sightseeing, there’s nothing like a refreshing dip in the pool. If you’re looking to make a splash on your next vacation, we’ve rounded up the most exquisite pools from five-star hotels around the world. With gorgeous designs and indulgent features, these luxurious hotel pools take an afternoon swim to another level.</p>
						<span>17/12/2020</span>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="container my-3 py-3">
		<div class="row">
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/p3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p>Fish Salad Dish</p>
						<span>25/12/2020</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/p9.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p>Bread</p>
						<span>25/12/2020</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<img src="{{asset('myassets/images/p7.jpg')}}" class="card-img-top">
					<div class="card-body">
						<p>Cooked Seafoods</p>
						<span>25/12/2020</span>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="container py-5">
		<nav aria-label="Page navigation">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&lt;</span>
					</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">4</a></li>
				<li class="page-item"><a class="page-link" href="#">5</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&gt;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>

@endsection