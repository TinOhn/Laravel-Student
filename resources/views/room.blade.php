@extends('master')
@section('content')

<div class="container-float py-5">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('myassets/images/cover6.jpg')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1>Our Rooms</h1>
					</div>
				</div>
			</div>
		</div>
</div>
<div class="container py-5">
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
						<a href="#"><img src="{{asset('myassets/images/r2.jpg')}}" class="card-img-top border image"></a>
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
						<p>$150/ par night</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 py-2">
				<div class="card">
					<div class="card_img">
						<a href="#"><img src="{{asset('myassets/images/r10.jpg')}}" class="card-img-top border image"></a>
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
						<a href="#"><img src="{{asset('myassets/images/r9.jpg')}}" class="card-img-top border image"></a>
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
						<a href="#"><img src="{{asset('myassets/images/r7.jpg')}}" class="card-img-top border image"></a>
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
						<a href="#"><img src="{{asset('myassets/images/r6.jpg')}}" class="card-img-top border image"></a>
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
						<p>$150/ par night</p>
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
						<p>$200/ par night</p>
					</div>
				</div>
			</div>
		</div>
</div>
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
							<h4>Standard Room</h4>
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