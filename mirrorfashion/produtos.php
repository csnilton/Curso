<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Mirror Fashion</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width:939px)">
		<link rel="stylesheet" type="text/css" href="css/produtos.css">
</head>
<body>

<!-- CABEÇALHO -->
	<?php include("cabecalho.php"); ?>

<!-- PRODUTOS -->
	<div class="produto conteudo">
		<h1>Fuzzy Cardigan</h1>
		<p>por apenas R$ 129,00</p>
		<form>
			<fieldset class="cores">
				<legend>Escolha a cor:</legend>
				
					<input type="radio" name="cor" value="verde" id="verde" checked>
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="verde">
						</label>

					<input type="radio" name="cor" value="rosa" id="rosa">
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="rosa">
						</label>

					<input type="radio" name="cor" value="azul" id="azul">
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="azul">
						</label>	
			</fieldset>
		</form>
		<input type="submit" class="comprar" value="Comprar">


<!-- RODAPÉ -->
	<?php include("rodape.php"); ?>


</body>
</html>
