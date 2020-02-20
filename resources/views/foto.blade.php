@extends('layout.plantilla')
@section('title', 'Blog - Fotos')
@section('background', '#123')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-white text-center">GALERY</h1>
			</div>
			<div class="py-2">
				<div class="row">
					@foreach($photos as $key)
					<div class="col-4">
						<div class="card" style="background-color: #123">
							<div class="card-body" >
								<a href="{{$key->photo}}"><img src="{{$key->photo}}" style="border: 3px solid white" alt="" height="215" class="card-img-top"></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection