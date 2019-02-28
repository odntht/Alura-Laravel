<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/app.css">
<title>Controle de Estoque</title>
</head>
<body>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<h1>Detalhes do produto: <?= $p->nome?></h1>
			<td><b>Descricao:</b></td>
			<td><?= $p->descricao ?></td>
		</tr>
		<td><b>Valor:</b></td>
		<td><?= $p->valor ?></td>
		</tr>
		<td><b>Quantidade:</b></td>
		<td><?= $p->quantidade ?></td>
		</tr>

	</table>
</body>
</html>