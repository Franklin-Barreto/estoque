@extends('layout.principal') @section('conteudo') @if(empty($produtos))
<div class="alert alert-danger">Você não tem nenhum produto cadastrado.
</div>
@else
<h1>Listagem de produtos</h1>
<table class="table table-striped table-bordered table-hover">
	@foreach($produtos as $p)
	<tr class="{{$p->quantidade<=1 ? 'table-danger' : '' }}">
		<td>{{$p->nome}}</td>
		<td>{{$p->valor}}</td>
		<td>{{$p->descricao}}</td>
		<td>{{$p->quantidade}}</td>
		<td>{{$p->categoria->nome}}</td>
		<td><a href="/produtos/mostra/{{$p->id}}"> <span class="fa fa-search"></span>
		</a></td>
		<td><a href="/produtos/remove/{{$p->id}}"> <span class="fa fa-trash"></span>
		</a></td>
		<td><a href="/produtos/edita/{{$p->id}}"> <span class="fa fa-pencil"></span>
		</a></td>
	</tr>
	@endforeach
</table>
@endif

<h4>
	<span class="badge badge-danger pull-right"> Um ou menos itens no
		estoque </span>
</h4>
@if(old('nome'))
<div class="alert alert-success">Produto {{old('nome')}} adicionado com
	sucesso!</div>
@endif @endsection
