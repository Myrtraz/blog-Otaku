@extends('layout.admin')
@section('title', 'AdminBlog - Admin')
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
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col mb-5">
				<a href="{{route('admin.create')}}" class="text-white text-decoration-none h2"><i class="fa fa-arrow-left"></i></a>
				<h1 class="text-white text-center">Subida a Foto</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<div class="row">
						<label class="text-light h1 mb-3">Coger Foto, para el apartado de Foto de la Principal</label>
						<div class="col-11 text-center">
							<form action="{{route('photo.store')}}" method="post" enctype="multipart/form-data">
								@csrf
								<img id="blah" name="img" src="https://rampromotional.com/wp-content/uploads/2016/05/250x250-3.png" class="mb-3" alt="your image" height="350"/>
								<input type='file' name="photo" class="form-control col-4 float-right" onchange="readURL(this);"/>
							</div>
							<div class="col">
								<button type="submit" class="btn btn-success float-right">Subir!</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
		$('#blah')
		.attr('src', e.target.result);
	};
		reader.readAsDataURL(input.files[0]);
	}
}
</script>
@endsection