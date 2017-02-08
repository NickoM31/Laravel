
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
		<table>
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
		</table>
		<form action="/products/{{$produits->id}}" method="post">
			{{csrf_field()}}
			{{method_field('DELETE')}}
			<button class="ui black button">Supprimer produit</button>
		</form>
	</div>
	<div style="text-align:center" >
		<a href="/products" class="ui orange button">Revenir à la liste</a>
	</div>

</body>
</html>