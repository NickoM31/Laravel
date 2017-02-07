
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
<div class="ui centered card">
		<h3>{{$produits->name}}</h3>
		<div>Provenance : {{$produits->description}}</div>
		<div>Prix : {{$produits->price/100}} €</div>
		<div>En stock : {{$produits->stock}}</div>

		<form action="/products/sold/{{$produits->id}}" method="post">
			{{csrf_field()}}
			<button class="ui button">+</button>
		</form>
		<form action="/products/restock/{{$produits->id}}" method="post">
			{{csrf_field()}}
			<button class="ui button">-</button>
		</form>
		<a href="/products">Revenir à la liste</a>
	</div>
	
</body>
</html>