<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Mensaje Recibido</title>
	</head>
	<body>
		<section class="py-3">
			<div class="container">
				<div class="row">
					<div class="col">
						<hr>
						<p><strong>Nombre:</strong> {{$msg['name']}}</p>
						<hr>
						<p><strong>Correo:</strong> {{$msg['email']}}</p>
						<hr>
						<p><strong>Asunto:</strong> {{$msg['subject']}}</p>
						<hr>
						<p><strong>Mensaje:</strong> {{$msg['message']}}</p>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>