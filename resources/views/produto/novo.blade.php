@extends('layout.principal') 
@section('conteudo') 
@if ($errors->any())

<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li> @endforeach
	</ul>
</div>
@endif
<form action="/produtos/adiciona" method="post">
	@csrf
	<div class="form-group">
		<label for="nome">Nome:</label> <input type="text" name=nome
			class="form-control" /> <label for="descricao">Descrição:</label> <input
			type="text" name="descricao" class="form-control" /> <label
			for="valor">Valor:</label> <input type="number" name="valor"
			class="form-control" /> <label for="quantidade">Quantidade:</label> <input
			type="number" name="quantidade" class="form-control" /> <label
			for="categoria">Categorias:</label> 
			<select name="categoria_id" class="form-control"> 
			@foreach($categorias as $c)
			<option value="{{$c->id}}">{{$c->nome}}</option> 
			@endforeach
		</select>
	</div>
	<button class="btn btn-primary" type="submit">Adicionar</button>
</form>
@endsection
