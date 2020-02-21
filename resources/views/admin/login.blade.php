@extends('layout.admin')
@section('title', 'AdminBlog - Login')
@section('background', '#123')
@section('content')
<section>
	<div class="container py-3">
		<div class="row">
			<div class="col-5">
				@if(count($errors->all()))
				<div class="alert alert-danger" role="alert">
					<h4 class="alert-heading">Error:</h4>
					<ul class="alert-danger">
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container py-3">
		<div class="row">
			<div class="col">
				<form action="{{route('login.store')}}" method="post">
					@csrf
					<h1 class="text-center text-white font-weight-bold">Administrador</h1>
					<div class="mb-3">
						<label class="h2 text-white font-weight-bold">Email Address</label>
						<input type="email" class="form-control" name="email" placeholder="Correo">
					</div>
					<div class="mb-3">
						<label class="h2 text-white font-weight-bold">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Contraseña">
					</div>
					<button type="submit" class="form-control btn-success float-right">Ingresar</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection