<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/app.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">

<title>Controle de Estoque</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos"> Estoque Laravel</a>
				</div>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutoController@novo')}}">Adicionar</a></li>
				</ul>
			</div>
			

		</nav>

		@yield('conteudo')
		<footer class="footer">
			<p>Livro de Laravel do Alura.</p>
		</footer>

	</div>
</body>
</html>