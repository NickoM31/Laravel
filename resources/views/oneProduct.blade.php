
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<div class="ui inverted orange centered card">
		<h3 style="text-align:center">{{$produits->name}}</h3>
		<div>Provenance : {{$produits->description}}</div>
		<div>Prix : {{$produits->price/100}} €</div>
		<div>En stock : {{$produits->stock}}</div>
		<table class="ui centered table">
			<tr>
				<td>
					<form action="/products/sold/{{$produits->id}}" method="post">
						{{csrf_field()}}
						<button class="ui orange button">+</button>
					</form>
				</td>
				<td>
					<form action="/products/restock/{{$produits->id}}" method="post">
						{{csrf_field()}}
						<button class="ui orange button">-</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form action="/products/{{$produits->id}}" method="post">
						{{csrf_field()}}
						<label for="name">nom</label>
						<input type="text" name="name" id="name" value="{{$produits->name}}">
						<label for="description">Description</label>
						<input type="text" name="description" id="description" value="{{$produits->description}}">
						<label for="price">Prix</label>
						<input type="text" name="price" id="price" value="{{$produits->price/100}}">
						<label for="stock">Quantité</label>
						<input type="text" name="stock" id="stock" value="{{$produits->stock}}">
						<button type="submit" class="ui button">Modifier produit</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form action="/products/{{$produits->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="ui black button">Supprimer produit</button>
					</form>
				</td>
			</tr>
		</table>
	</div>
	<div style="text-align:center" >
		<a href="/products" class="ui orange button">Revenir à la liste</a>
	</div>
</body>
</html>