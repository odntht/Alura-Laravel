@extends('layout.principal') @section('conteudo')


	<div class="container">
		<table class="table table-striped table-bordered table-hover">
			<h1>Detalhes do produto : {{ $p->nome}}</h1>
			<tr>
				<td><b>Descricao:</b></td>
				<td>{{ $p->descricao }}</td>
			</tr>
			<tr>
				<td><b>Valor:</b></td>
				<td>R$ {{ $p->valor }}</td>
			</tr>
			<tr>
				<td><b>Quantidade:</b></td>
				<td>{{$p->quantidade}} {{ $p->quantidade <= 1 ? ' item' : ' itens'}}
				</td>
			</tr>

		</table>
	</div>

	@stop