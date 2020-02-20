@extends('layout.admin')
@section('title', 'AdminBlog - Admin')
@section('background', '#123')
@section('content')
<section>
	<div class="container py-5">
		<div class="row">
			<div class="col">
				<h1 class="text-center text-white">Panel de Control</h1>
				<a href="{{route('photo.index')}}" class="text-white text-decoration-none float-right h2"><i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container py-2">
		<div class="row">
			<div class="col-12 text-center">
				<a href="{{route('admin.create')}}" class="btn btn-success text-decoration-none btn-lg btn-block h1 font-weight-bold">Subir</a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container py-3">
		<div class="row">
			@foreach($publicaciones as $publico)
			<div class="col-md-4">
				<div class="card mb-4">
					<a href="{{route('contenido.show', ['contenido' => $publico->id])}}"><img src="{{$publico->photo}}" class="card-img-top" alt="..." height="255"></a>
					<div class="mb-1"></div>
					<a href="{{route('admin.edit', ['admin'=> $publico->id])}}" class="btn btn-warning text-decoration-none h1 font-weight-bold">Edit</a>
					<form action="{{route('admin.destroy',$publico->id)}}" method="post">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger btn-block text-decoration-none h1 font-weight-bold">Eliminar</button>
					</form>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection