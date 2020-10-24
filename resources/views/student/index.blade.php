@extends('master')
@section('content')

<div class="container-float carousel py-5">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('myassets/images/service.jpg')}}" class="d-block w-100" alt="...">
				<div class="img-overlay"></div>
				<div class="carousel-caption">
					<h1>Student</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('myassets/images/cover7.jpg')}}" class="d-block w-100" alt="...">
				<div class="img-overlay"></div>
				<div class="carousel-caption">
					<h1>Student</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			@foreach($students as $row)
				<p>{{$row->id}} | {{$row->rollno}} | {{$row->name}} | {{$row->phone}} | {{$row->email}} | {{$row->address}}</p>
			@endforeach
		</div>
	</div>
</div>


@endsection