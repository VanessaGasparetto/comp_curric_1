<?php
$title = "Site.com";
$subtitle = "este é um site em PHP";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>AboutMe</title>
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
							<li class="active">
								<a href="sobre_mim.php">Sobre Mim</a>
							</li>
							<li>
								<a href="contato.php">Contato</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">
			<?php
			$nome = "Vanessa Gasparetto";
			?>
			<h1>Apresentação</h1>
			<img src="http://sphotos-e.ak.fbcdn.net/hphotos-ak-snc7/431147_396241773764586_1658725890_n.jpg" align="left" width="130px" height="130px" hspace="50" >
			<ul>
				<li>
					Nome: <?php echo $nome; ?>
				</li>
				<li>
					Idade: 18 anos.
				</li>
				<li>
					Moro em Xanxerê.
				</li>
				<li>
					Atualmente não Trabalho.
				</li>
				<li>
					Gosto de QUASE todos os estilos de musica (menos Funk e Pagode/Samba).
				</li>
				<li>
					Curso 4º Período de Tecnologia em Análise e Desenvolvimento de Sistemas na Unoesc Campus de Xanxerê
				</li>
			</ul>
			<h1>Conhecimentos</h1>
			<ul>
				<li>
					HTM1 e HTML5
				</li>
				<li>
					CSS3
				</li>
				<li>
					Java
				</li>
				<li>
					C
				</li>
				<li>
					SQL
				</li>
				<li>
					Conhecimentos em Métodos Ágeis de Desenvolvimento (XP);
				</li>
				<li>
					UML
				</li>
				<li>
					Dreamweaver
				</li>
				<li>
					Fireworks
				</li>
				<li>
					InDesing CS3
				</li>
				<li>
					CorelDrown
				</li>
				<li>
					Photoshop Cs2
				</li>
				<li>
					Front Page
				</li>
				<li>
					Flash
				</li>
			</ul>
			<h1>Objetivos</h1>
			<ul>
				<li>
					Terminar a Faculdade de TADS
				</li>
				<li>
					Fazer um Curso Técnico ou algo na área de Hardware
				</li>
				<li>
					Trabalhar na Área de TI, mais precisamente em manutenção ou suporte, algo relacionado a hardware, ou pode ser software, mas não em desenvolvimento. Em desenvolvimento é uma realidade distante.
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
