<?php
$title = "Site.com";
$subtitle = "este é um site em PHP";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

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

			<h1>Contatos</h1>
			<form>
				<div class="formulario">
					<p>
						Nome: <input id="nome"	/>
					</p>
					
				</div>

				<div class="formulario">
					<p>
						E-mail: <input id="emai" />
					</p>
					
				</div>

				<div class="formulario">
					<p>
						Mensagem: <input id="mensagem" />
					</p>
					
				</div>

				<button name="Enviar" type="submit" >
					Enviar
				</button>
			</form>
			<ul>
				<li>
					E-mail: <a href="mailto:vanieu2009@hotmail.com">Hotmail</a>
				</li>
				<li>
					Page: <a href="http://www.facebook.com/vanessagasparetto" target="_blank">Facebook</a>
				</li>
				<li>
					Telefone: (49) 3433-9798
				</li>
				<li>
					Celular: (49) 9972-1189
				</li>
			</ul>
		</div>
		<!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../assets/js/jquery.js"></script>
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
		<script src="../assets/js/bootstrap-typeahead.js"></script>

	</body>
</html>
