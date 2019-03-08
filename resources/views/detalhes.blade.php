@extends('principal') @section('conteudo')

<title>Controle de Estoque</title>
</head>
<body>
	<div class="container">
		<table class="table table-striped table-bordered table-hover">
			<h1>Detalhes do produto : {{ $p->nome}}</h1>
			<tr>
				<td><b>Descricao:</b></td>
				<td>{{ $p->descricao }}</td>
			</tr>
			<tr>
				<td><b>Valor:</b></td>
				<td>{{ $p->valor }}</td>
			</tr>
			<tr>
				<td><b>Quantidade:</b></td>
				<td>{{ $p->quantidade }}</td>
			</tr>

		</table>
	</div>

	@stop