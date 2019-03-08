@extends('principal') @section('conteudo')

<title>Listagem de Produtos</title>
</head>
<body>
	<div class="container">
		<h1>Listagem de Produtos</h1>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<td><b>Nome</b></td>
				<td><b>Valor (R$)</b></td>
				<td><b>Descricao</b></td>
				<td><b>Quantidade</b></td>
				<td><b>Detalhar</b></td>
			</tr>
			@foreach ($produtos as $p)
			<tr class="{{$p->quantidade <= 1 ? 'danger' : ''}}">
				<td>{{$p->nome}}</td>
				<td>{{$p->valor}}</td>
				<td>{{$p->descricao}}</td>
				<td>{{$p->quantidade}}</td>
				<td><a href="/produtos/mostra/{{$p->id}}"> <span
						class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</a></td>
			</tr>
			@endforeach
		</table>
	</div>

	@stop