<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<table class="ui table">
		<th>id</th>
		<th>nom</th>
		<th>description</th>
		<th>price</th>
		<th>quantité</th>
		@foreach($produits as $produit)
		<tr>

			<td>{{$produit->id}}</td>
			<td>{{$produit->name}}</td>
			<td>{{$produit->description}}</td>
			<td>{{$produit->price}}</td>
			<td>{{$produit->stock}}</td>

			

			


			@endforeach
		</tr>

	</table>

</body>
</html>