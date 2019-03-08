@extends('layout.principal') @section('conteudo')
<h1> Adicionar novo produto: </h1>
<form action="/produtos/adiciona" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}" >


<div class="form-group">
	<label>Nome</label> <input name="nome" class="form-control">
</div>
<div class="form-group">
	<label>Valor</label> <input name="valor" class="form-control">
</div>
<div class="form-group">
	<label>Quantidade</label> <input name="quantidade" class="form-control">
</div>
<div class="form-group">
	<label>Descricao</label> <textarea  name="descricao" class="form-control"></textarea>
	</div>
	
	<button class="btn btn-success" type="submit">Adicionar</button>
</form>

@stop
