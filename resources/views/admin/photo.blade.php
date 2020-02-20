@extends('layout.admin')
@section('title', 'AdminBlog - Admin')
@section('background', '#123')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1></h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			@foreach($photos as $key)
			<div class="col-4">
				<div class="card" style="background-color: #123">
					<div class="card-body" >
						<a href="{{$key->photo}}"><img src="{{$key->photo}}" style="border: 3px solid white" alt="" height="215" class="card-img-top"></a>
						<form action="{{route('photo.destroy',$key->id)}}" method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger btn-block">Eliminar</button>
						</form>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection