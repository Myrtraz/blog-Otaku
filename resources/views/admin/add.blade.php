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
<section>
	<div class="container py-5">
		<div class="row">
			<div class="col-12">
				<a href="{{route('admin.index')}}" class="text-white text-decoration-none h2"><i class="fa fa-arrow-left"></i></a>
				<a href="{{route('photo.create')}}" class="text-white text-decoration-none float-right h2"><i class="fa fa-arrow-right"></i></a>
			</div>
			<div class="col-12">
				<h1 class="text-white text-center font-weight-bold">Subida de Post</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container py-2">
		<div class="row">
			<div class="col-12">
				<form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<label class="text-white h2">Titulo del Post</label>
								<input type="text" class="form-control" name="title" placeholder="Titulo Del Articulo">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<label class="text-white h2">Resumen del Post</label>
								<input type="text" class="form-control" name="resume" placeholder="Resumen Del Articulo">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<label class="text-white h2">Contenido del Post</label>
								<textarea name="text" id="text" class="form-control"  placeholder="Texto Del Articulo" cols="30" rows="10" style="resize: none;"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<label class="text-white h2">Imagen del Post</label>
								<input type="text" class="form-control" name="" placeholder="Link de la imagen">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="">
								<input type='file' name="photo" class="form-control col-4" onchange="readURL(this);" style="position: absolute; top:40%; left: 60%;" />
								<img id="blah" name="img" src="https://rampromotional.com/wp-content/uploads/2016/05/250x250-3.png" alt="your image" height="250" style="position: absolute; top:5%; left: 60%; min-height: 100px; max-height: 250px"  />
							</div>
						</div>
					</div>
					<div class="col-6">
						<button type="submit" name="submit" class="btn btn-link btn-outline-success text-white float-right btn-lg text-decoration-none">Subir!</button>
					</div>
					<div class="py-5"></div>
				</form>
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