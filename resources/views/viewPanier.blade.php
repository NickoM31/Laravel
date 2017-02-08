<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h1>Mes fruits</h1>
	<h3>Ajouter un produit : </h3>
	<form action="/products" method="post">
		{{csrf_field()}}
		<label for="name">nom</label>
		<input type="text" name="name" id="name">
		<label for="description">Description</label>
		<input type="text" name="description" id="description">
		<label for="price">Prix</label>
		<input type="text" name="price" id="price">
		<label for="stock">Quantité</label>
		<input type="text" name="stock" id="stock">
		<button type="submit" class="ui button">Valider</button>
	</form>
	<table class="ui inverted orange table">
		
		<th>Nom</th>
		<th>Provenance</th>
		<th>Prix</th>
		<th>Quantité</th>
		@foreach($produits as $produit)
		<tr>
			<td>
				<a href="/products/show/{{$produit->id}}">{{$produit->name}}</a>
			</td>
			<td>{{$produit->description}}</td>
			<td>{{$produit->price /100}} €</td>
			<td>{{$produit->stock}}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>