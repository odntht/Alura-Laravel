@extends('layout.principal') @section('conteudo')

<form>
<div class="form-group">
	<label>Nome</label> <input class="form-control">
</div>
<div class="form-group">
	<label>Valor</label> <input class="form-control">
</div>
<div class="form-group">
	<label>Quantidade</label> <input class="form-control">
</div>
<div class="form-group">
	<label>Descricao</label> <textarea class="form-control"></textarea>
	</div>
	
	<button class="btn btn-primary" type="submit">Adicionar</button>
</form>

@stop
