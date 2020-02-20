@extends('layout.plantilla')
@section('title', 'Blog - Contact')
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
	<div class="container">
		<div class="row">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<div class="mb-3">
							<form action="{{route('contact.store')}}" method="post">
								@csrf
							<label class="text-dark h1 font-weight-bold">Nombre</label>
							<input type="name" class="form-control" name="name" placeholder="Nombre...">
						</div>
						<div class="mb-3">
							<label class="text-dark h1 font-weight-bold">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email...">
						</div>
						<div class="mb-3">
							<label class="text-dark h1 font-weight-bold">Asunto</label>
							<input type="text" class="form-control text-muted" name="subject" placeholder="Asunto...">
						</div>
						<div class="mb-3">
							<textarea class="form-control" name="message" id="message" cols="30" rows="10" style="resize: none;" placeholder="Mensaje..."></textarea>
						</div>
						<button type="submit" class="btn btn-outline-success float-right">Enviar!</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection