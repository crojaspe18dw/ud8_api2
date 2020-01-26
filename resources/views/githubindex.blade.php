<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
	<title></title>
</head>
<body>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img src="{{$imagen}}" class="col-12">
				</div>
				<div class="col-6">
					<h1>nombre:<b>{{$nombre}}</b></h1>
					<h3>seguidores</h3>
					@forelse($seguidores as $seguidor)
						<label>nombre:<b>{{$seguidor->login}}</b></label><br>
					@empty
						<label>no se han encontrado seguidores</label>
					@endforelse
					<h3>seguidos</h3>
					@forelse($seguidos as $seguido)
						<label>nombre:<b>{{$seguido->login}}</b></label><br>
					@empty
						<label>no se han encontrado seguidos</label>
					@endforelse
				</div>
			</div>
		</div>
	</div>
		<div class="container">
		<div class="container">
			<div class="row">
	@forelse($cuerpod as $card)
		@foreach($card as $key)
						<div class="col-6">
							<label>descripcion:{{$key->description}}</label>
							
						</div>

		@endforeach
	@empty
		no se han encontrado repositorios
	@endforelse
				</div>
		</div>
	</div>
</body>
</html>