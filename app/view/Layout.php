<?php

?>

<!-- DOCTYPE ou DTD -Document Type Definition- é a declaração de qual tipo de documento HTML 5 -->
<!DOCTYPE html>

<!-- Declarando idiomas no HTML -->
<html lang="pt-br">

<head>

	<!-- UTF-8 -U do Universal Character Set + Transformation Format - 8 bits-
        é uma codificação de caracteres capaz de codificar todos os caracteres possíveis  
        A codificação é de tamanho variável e usa unidades de código de 8 bits.
    -->
	<meta charset="UTF-8">

	<!-- Meta tag viewport para controlar o layout em navegadores de dispositivos móveis -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Descrição Pagina -->
	<meta name="description" content="Pagina Home" />

	<!-- Autor -->
	<meta name="author" content="Ronisvonn Gomes" />

	<!-- Titulo da Pagina -->
	<title>Modelo Projeto MVC</title>

	<!-- Incone da Pagina -->
	<link rel="icon" type="image/x-icon" href="<?php echo DIR_IMG.'icon/favicon.ico'; ?>" />
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo DIR_BOOTSTRAP_CSS.'bootstrap.min.css'; ?>" />

	<!-- Estilo Personalizado CSS -->
	<link rel="stylesheet" href="<?php echo DIR_CSS.'style-home.css'; ?>" />

</head>

<body>

	<div class="Header">
		<?php echo $this->addHeader(); ?>
	</div>

	<div class="Main">
		<?php echo $this->addMain(); ?>
	</div>

	<div class="Footer footer">
		<?php echo $this->addFooter(); ?>
	</div>

	<!-- JQUERY JS -->
	<script type='text/javascript' src="<?php echo DIR_JQUERY.'jquery.min.js'; ?>"></script>

	<!-- POPPER JS -->
	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

	<!-- BOOTSTRAP JS -->
	<script type='text/javascript' src="<?php echo DIR_BOOTSTRAP_JS.'bootstrap.min.js'; ?>"></script>


	<!-- Script Personalisado JS -->
	<script src="<?php echo DIR_JS.'script-home.js'; ?>"></script>

</body>

</html>