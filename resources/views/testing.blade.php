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

@foreach($a as $row)
	<p>Name:{{$row['name']}}</p>
	<p>Age:{{$row['age']}}</p>
@endforeach

@endsection