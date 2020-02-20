@extends('layout.plantilla')
@section('title', 'Blog - Contenido')
@section('background', '#123')
@section('content')
<section class="mb-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<a href="{{route('home.index')}}" class="text-dark text-decoration-none h2"><i class="fa fa-arrow-left"></i></a>
						<div class="mb-3"></div>
						<img src="{{$publicacion->photo}}" alt="..." class="card-img-top mb-3" width="800" height="400">
						<h1 class="font-weight-bold">{{$publicacion->title}}</h1>
						<hr class="mb-5">
						<div>
							<p class="m-2">
								{!!$publicacion->text!!}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection