<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Mirror Fashion</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width:939px)">
</head>
<body>

<!-- CABEÇALHO PHP -->
	<?php include("cabecalho.php"); ?>

<!-- INCIO DA SEÇÃO MAIN -->
	<div class="conteudo destaque"> <!-- No layout temos duas divisões e cada uma com suas seções -->
		<section class="busca">
			<h2>BUSCA</h2>
			<form>
				<input type="search">
				<input type="image" src="img/busca.png" class="lupa">
			</form>
		</section>
		<section class="menu-departamentos">
			<h2>departamentos</h2>
			<nav>
			<ul>
				<li>
					<a href="#">blusas e camisa</a> <!-- Não fechar o li aqui para criar uma sublista -->
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">camisa social</a></li>
							<li><a href="#">camisa casual</a></li>
						</ul>
				</li>		
				<li><a href="#">calças</a></li>
				<li><a href="#">saias</a></li>
				<li><a href="#">vestidos</a></li>
				<li><a href="#">sapatos</a></li>
				<li><a href="#">bolsas e carteiras</a></li>
				<li><a href="#">acessórios</a></li>
			</ul>
			</nav>
		</section>
		<img src="img/destaque-home.png" alt="Promoção: Big City">
	</div> 

<!-- INCIO DA SEÇÃO PAINEIS -->
	<div class="paineis conteudo">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption>Miniatura 1 por R$ 129,90</figcaption>
						</figure>
					</a>	
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Miniatura 2 por R$ 129,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Miniatura 3 por R$ 89,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura4.png">
							<figcaption>Miniatura 4 por R$ 99,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<img src="img/produtos/miniatura5.png">
						<figcaption>Miniatura 5 por R$ 129,00</figcaption>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<img src="img/produtos/miniatura6.png">
						<figcaption>Miniatura 6 por R$ 129,00</figcaption>
					</a>
				</li>
			</ol>
		</section>
<!-- FIM DO PAINEL NOVIDADES -->
		<section class="painel mais-vendidos">
			<h2>Mais vendidos</h2>
			<ol>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura7.png">
							<figcaption>Miniatura 7 por R$ 119,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura8.png">
							<figcaption>Miniatura 8 por R$ 129,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura9.png">
							<figcaption>Miniatura 9 por R$ 119,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura10.png">
							<figcaption>Miniatura 10 por R$ 129,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura11.png">
							<figcaption>Miniatura 11 por R$ 129,00</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produtos.html">
						<figure>
							<img src="img/produtos/miniatura12.png">
							<figcaption>Miniatura 12 por R$ 119,00</figcaption>
						</figure>
					</a>
				</li>
			</ol>
		</section>
	</div>

<!--RODAPÉ PHP -->
	<?php include("rodape.php"); ?>

</body>
</html>