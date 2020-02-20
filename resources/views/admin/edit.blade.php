@extends('layout.admin')
@section('title', 'AdminBlog - Admin')
@section('background', '#123')
@section('content')
<section>
	<div class="container py-3">
		<div class="row">
			<a href="{{route('admin.index')}}" class="text-white text-decoration-none h2"><i class="fa fa-arrow-left"></i></a>
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
				<h1 class="text-white text-center font-weight-bold">Menú de Edición</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container py-2">
		<div class="row">
			<div class="col-12">
				<form action="{{route('admin.update', ['admin' => $publicacion->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<label class="text-white h2">Titulo del Post</label>
								<input type="text" class="form-control" name="title" placeholder="Titulo Del Articulo" value="{{$publicacion->title}}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<label class="text-white h2">Resumen del Post</label>
								<input type="text" class="form-control" name="resume" placeholder="Resumen Del Articulo" value="{{$publicacion->resume}}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<div class="bg-white">
									<div id="editor">{!!$publicacion->text!!}</div>
									<input type="hidden" name="text" value='{!!$publicacion->text!!}'>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="">
								<input type='file' name="photo" class="form-control col-4" onchange="readURL(this);" style="position: absolute; top:40%; left: 60%;" value="{{$publicacion->photo}}" />
								<img id="blah" name="img" src="{{$publicacion->photo}}" alt="your image" height="250" style="position: absolute; top:5%; left: 60%; min-height: 100px; max-height: 250px"  />
							</div>
						</div>
					</div>
					<div class="col-6">
						<button type="submit" name="submit" class="btn btn-link btn-outline-success text-white float-right btn-lg text-decoration-none">Actualizar!</button>
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

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
var quill = new Quill('#editor', {
theme: 'snow'
});

quill.on('text-change', function(delta, oldDelta, source) {
  if (source == 'user') {
    console.log("A user action triggered this change.");
    const html = quill.container.firstChild.innerHTML

    document.getElementsByName('text')[0].value = html
  }
});
</script>
@endsection