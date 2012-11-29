<?php
$title = "Site.com";
$subtitle = "este é um site em PHP";
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Trabalho de PHP">
		<meta name="author" content="Vanessa Gasparetto">

		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<link href="css/bootstrap-responsive.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="#">Atividade Vanessa</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li>
								<a href="home.php">Home</a>
							</li>
							<li>
								<a href="pagina1.php">Pagina 1</a>
							</li>
							<li>
								<a href="pagina2.php">Pagina 2</a>
							</li>
							<li>
								<a href="sobre_mim.php">Sobre Mim</a>
							</li>
							<li class="active">
								<a href="contato.php">Contato</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">

			<h1>Contato</h1>
			<form action="formulario.php" method="post">
				<fieldset>
					<legend>Formulário de Contato</legend>
					<!--<div class="formulario">
						<p>
						Nome:
						<input type="nome"/>
					</p>
					</div>
					<div class="formulario">
				 <p>
						E-mail:
						<input type="email"/>
					</p>

				</div>
				<div class="formulario">
					<p>
						Mensagem:
						<input id="mensagem" />
					</p>

				</div>
					-->
					<input type="hidden" name="pagina" value="contato" />	
						
					<label for="idNome">
						Nome:</label>
						<input type="text" name="nome" id="idNome"/>
		
				<label for="idEmail">
						E-mail</label>
						<input type="email" name="email" id="idEmail"/>

				
				<label for="idMensagem"> Mensagem:</label>
				<textarea name="mensagem" id="idMensagem" rows="3"></textarea>
				</fieldset>
				
				<button class="btn btn-primary">
					Enviar
				</button>
			</form>

		</div>
		<!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- <script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap-transition.js"></script>
		<script src="../assets/js/bootstrap-alert.js"></script>
		<script src="../assets/js/bootstrap-modal.js"></script>
		<script src="../assets/js/bootstrap-dropdown.js"></script>
		<script src="../assets/js/bootstrap-scrollspy.js"></script>
		<script src="../assets/js/bootstrap-tab.js"></script>
		<script src="../assets/js/bootstrap-tooltip.js"></script>
		<script src="../assets/js/bootstrap-popover.js"></script>
		<script src="../assets/js/bootstrap-button.js"></script>
		<script src="../assets/js/bootstrap-collapse.js"></script>
		<script src="../assets/js/bootstrap-carousel.js"></script>
		<script src="../assets/js/bootstrap-typeahead.js"></script> -->

	</body>
</html>
