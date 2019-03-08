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
					<li><a href="/produtos">Listagem</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/produtos/novo">Adicionar</a></li>
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