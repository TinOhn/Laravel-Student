<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking</title>
	<link rel="stylesheet" type="text/css" href="{{asset('myassets/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myassets/bootstrap/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myassets/bootstrap/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myassets/fontawesome/css/all.min.css')}}">
	<script type="text/javascript" src="{{asset('myassets/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('myassets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<!-- Navbar -->
	<div class="container-float fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 menu">
			<div class="container">
				<a href="{{route('homepage')}}"><h3 class="navlogo">hotel booking</h3></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="myNav" class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto px-5">
						<li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-4">Home</a></li>
						<li class="nav-item"><a href="{{route('roompage')}}" class="nav-link px-4">Rooms</a></li>
						<li class="nav-item"><a href="{{route('servicepage')}}" class="nav-link px-4">Service</a></li>
						<li class="nav-item"><a href="{{route('blogpage')}}" class="nav-link px-4">Blog</a></li>
						<li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link px-4">About</a></li>
						<li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link px-4">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	@yield('content')

	<!-- Footer -->
	<div class="container-fluid footer">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-xl-3 py-3 text-center">
				<a href="{{route('homepage')}}"><h3 class="navlogo">hotel booking</h3></a><br>
				<a href="https://www.twitter.com">
					<span class="fa-stack fa-2x">
					<i class="fas fa-square fa-stack-2x text-info"></i>
					<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
					</span></a> 
				<a href="https://www.facebook.com">
					<span class="fa-stack fa-2x">
					<i class="fas fa-square fa-stack-2x text-primary"></i>
					<i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
					</span></a> 
				<a href="https://www.instagram.com">
					<span class="fa-stack fa-2x">
					<i class="fas fa-square fa-stack-2x twit"></i>
					<i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
					</span></a><br><br> 
				<p class="label">Copyright &copy; Design by Tin</p>				
			</div>
			<div class="col-sm-6 col-md-6 col-xl-3 py-3 text-center">
				<h4>Quick Links</h4><br>
				<p><a href="pages/about.html">About Hotel</a></p> 
				<p><a href="pages/rooms.html">Our Rooms</a></p>
				<p><a href="pages/contact.html">Contact Us</a></p>
				<p class="label"><a href="pages/service.html">Pool Service</a></p>				
			</div>
			<div class="col-sm-6 col-md-6 col-xl-3 py-3 text-center">
				<h4>Reservation</h4><br>
				<p><a href="#">Tel: 09248468427</a></p> 
				<p><a href="#">Skype: ExampleHotel</a></p>
				<p><a href="#">ExampleHotel@gmail.com</a></p>				
			</div>
			<div class="col-sm-6 col-md-6 col-xl-3 py-3 text-center">
				<h4>Our Location</h4><br>
				<p><a href="#">Tanlan Street</a></p> 
				<p><a href="#">Hlaing City, Yangon</a></p>
			</div>
		</div>
	</div>

	

</body>
</html>
