<!DOCTYPE html>
<html>
<head>
<link href="/css/app.css" rel="stylesheet">
<link href="/css/custom.css" rel="stylesheet">
<title>Controle de estoque</title>
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutoController@lista')}}"> Listagem </a>
					</li>
					<li><a href="{{action('ProdutoController@novo')}}"> Novo </a></li>
					@if (Auth::guest())
					<li><a href="/login">Login</a></li>
					<li><a href="/register">Register</a></li> @else
					<li>{{ Auth::user()->name }}</li>
					<li><a href="/logout">Logout</a></li> @endif
				</ul>
			</div>
		</nav>

		@yield('conteudo')

		<footer class="footer">
			<p>© Livro de Laravel do Alura.</p>
		</footer>

	</div>
</body>
</html>