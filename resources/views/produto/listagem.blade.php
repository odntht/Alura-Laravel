@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
<div class="container">
	<div class="alert alert-danger">Voce nao tem nenhum produto cadastrado!
	</div>
</div>

@else

<h1>Listagem de Produtos</h1>
<table class="table table-striped table-bordered table-hover">
	<tr>
		<td><b>Nome</b></td>
		<td><b>Valor</b></td>
		<td><b>Descricao</b></td>
		<td><b>Quantidade</b></td>
		<td><b>Detalhar</b></td>
	</tr>
	@foreach ($produtos as $p)
	<tr class="{{$p->quantidade <= 1 ? 'danger' : ''}}">
		<td>{{$p->nome}}</td>
		<td>{{'R$ '. number_format($p->valor , 2, ',', '.')}}</td>
		<td>{{$p->descricao}}</td>
		<td>{{$p->quantidade}}</td>
		<td><a href="/produtos/mostra/{{$p->id}}"> <span
				class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</a></td>
	</tr>
	@endforeach
</table>
</div>

@endif
<h4>
	<span class="label label-danger pull-right">Um ou menos itens no
		estoque</span>
</h4>
@stop
