<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
		<title>@yield('title','Blog')</title>
	</head>
	<body style="background: @yield('background', '#fff');">
		<section>
			<div class="container py-5">
				<div class="row">
					<div class="col-6 mb-4">
						<a href="{{route('home.index')}}" class="text-decoration-none"><p class="h1 text-white font-weight-bold">Welcome to Blog OtaKu</p></a>
					</div>
					<div class="col-7">
						<nav class="navbar navbar-light form-control" style="background-color: #e3f2fd;">
							<a href="{{route('home.index')}}" class="text-decoration-none font-weight-bold h4 text-center mx-3">Home</a>
							<a href="{{route('novedad.index')}}" class="text-decoration-none font-weight-bold h4 text-center mx-3">Novedades</a>
							<a href="{{route('view.index')}}" class="text-decoration-none font-weight-bold h4 text-center mx-3">Fotos</a>
							<a href="{{route('contact.index')}}" class="text-decoration-none font-weight-bold h4 text-center mx-3">Contactanos</a>
						</nav>
					</div>
				</div>
			</div>
		</section>
		@yield('content')
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>