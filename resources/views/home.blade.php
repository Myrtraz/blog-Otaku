@extends('layout.plantilla')
@section('title', 'Blog - Home')
@section('background', '#123')
@section('content')
<section class="mb-3">
	<div class="container">
		<div class="row">

		</div>
		<div class="row">
			@foreach($publicaciones as $public)
			<div class="col-7 mb-3">
				<div class="card">
					<div class="card-body">
						<img src="{{$public->photo}}" alt="..." class="card-img-top mb-3" width="800" height="400">
						<h1 class="font-weight-bold"><a href="{{route('contenido.show', ['contenido' => $public->id])}}" class="text-decoration-none text-dark">{{$public->title}}</a></h1>
						<hr>
						<p>
							{{$public->resume}}
						</p>
						<small class="text-muted">Fecha de publicación {{$public->created_at->format('Y-m-d')}}</small>
						<a href="{{route('contenido.show', ['contenido' => $public->id])}}" class="btn btn-primary float-right">Ver más</a>
						<!--{{route('admin.edit', ['admin'=> 1])}} -->
					</div>
				</div>
			</div>
			@endforeach
				<div class="row mx-5">
					<div class="card shadow-lg" style="background-color:Black;">
						<!--Color de background #7289da-->
						<div class="card-body text-center py-4" style="background-color: #7289da;border: 2px solid black;border-radius: 12px;padding:2px;">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2FXvs7MVCZmNfAAA3xGoTUokyrXUAIguvLqtbZGLenwvhFRRa&s" alt="" class="rounded-circle" width="100px" height="100px">
							<h3 class="text-center"><a href="#" class="text-decoration-none text-white">Blog OtaKu</a></h3>
							<p class="mb-4"></p>
							<a href="https://discord.gg/bg9kFRB" class="h1 font-weight-bold text-decoration-none text-white form-control btn btn-outline-primary" style="background-color:; border:black 1px solid;">Uneté a Discord</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection