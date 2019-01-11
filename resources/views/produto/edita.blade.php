@extends('layout.principal') 
@section('conteudo')
<form action="{{action('ProdutoController@altera', $p->id)}}" method="post">
	@csrf
	<div class="form-group">
		<label for="nome">Nome:</label> <input type="text"
			value="{{$p->nome}}" name="nome" class="form-control" /> <label
			for="descricao">Descrição:</label> <input [ type="text"
			value="{{$p->descricao}}" name="descricao" class="form-control" /> <label
			for="valor">Valor:</label> <input type="number" value="{{$p->valor}}"
			name="valor" class="form-control" /> <label for="quantidade">Quantidade:</label>
		<input type="number" value="{{$p->quantidade}}" name="quantidade"
			class="form-control" />
			<label
			for="categoria">Categorias:</label> 
			<select name="categoria_id" class="form-control"> 
			@foreach($categorias as $c)
			<option {{$c->id == $p->categoria->id?"selected=selected":""}} value="{{$c->id}}">{{$c->nome}}</option> 
			@endforeach
		</select>
	</div>
	<button class="btn btn-primary" type="submit">Altera</button>
</form>
@endsection
