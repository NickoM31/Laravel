<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
<h1>Mes fruits</h1>
	<table class="ui inverted orange table">
		<th>Id</th>
		<th>Nom</th>
		<th>Provenance</th>
		<th>Prix</th>
		<th>Quantité</th>
		
		@foreach($produits as $produit)
		<tr>
			<td>
				<a href="/products/show/{{$produit->id}}">{{$produit->id}}</a>
			</td>
			<td>{{$produit->name}}</td>
			<td>{{$produit->description}}</td>
			<td>{{$produit->price /100}} €</td>
			<td>{{$produit->stock}}</td>
			@endforeach
		</tr>
</table>

</body>
</html>