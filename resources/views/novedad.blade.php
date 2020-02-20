@extends('layout.plantilla')
@section('title', 'Blog - Novedades')
@section('background', '#123')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			@foreach($publicaciones as $public)
			<div class="col-6">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-body">
							<img src="{{$public->photo}}" alt="..." class="card-img-top mb-3" width="800" height="400">
							<h1 class="font-weight-bold"><a href="#" class="text-decoration-none text-dark">{{$public->title}}</a></h1>
							<hr>
							<p>{{$public->resume}}</p>
							<small class="text-muted">Fecha de publicación {{$public->created_at->format('Y-m-d')}}</small>
							<a href="{{route('contenido.index')}}/{{$public->id}}" class="btn btn-primary float-right">Ver más</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection