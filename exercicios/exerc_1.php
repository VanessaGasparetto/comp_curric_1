<?php
    $title="Site.com";
	$subtitle="este é um site em PHP";
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title. "-". $subtitle; ?></title>
</head>
<body>
	<!-- INICIO DO EXERCICIO 1 -->
	<div id="rodape">
		<p>&reg copyright Site.com – <?php echo date("Y") ?></p>
	</div>
	<!-- FIM DO EXERCICIO 1 -->
	
	<!-- INICIO DO EXERCICIO 2-->
	<h1>
		<div id="conteudo">
		<?php 
		$nome1="Fulano"; $nome2="Fulana"; $nome3="Ciclana"; $sexo1="M"; $sexo2="F"; $sexo3="M"; 
		?>
		
		<p><?php echo $nome1. ", ". $nome2. " e ". $nome3;?></p>		
		
		<?php
		if($sexo1 == "M" && $sexo2 == "M" && $sexo == "M"){
			echo "A equipe é formada por meninos";
		} else if($sexo1 == "F" && $sexo2 == "F" & $sexo == "F"){
			echo "A equipe é formada por meninas";
		} else {
			echo "A equipe é mista";
		}
		?>
		</div>
	</h1>
	<!-- FIM DO EXERCICIO 2 -->
	
	<!-- INICIO DO EXERCICIO 3 -->
	<?php 
	switch ($qt="1") {
		case '0':
			echo "Não possui nenhum produto cadastrado";
			break;
		case '1':
			echo "Você possui um produto cadastrado";
			break;
		case '1,2,3':
			echo "Você possui vários produtos cadastrados";
			break;
		default:
			echo "Cadastro inválido, tente novamente";
			break;
	}
	?>
	<!-- FIM DO EXERCICIO 3-->
	
	<!-- INICIO DO EXERCICIO 4 -->
	<!-- A -->
	<?php
	for ($x=0; $x<=25; $x=$x+1) {
	   echo '<p>Lactobacilos vivos também possuem sentimentos</p>';
	}
	?>
	
	<!-- B  Escrever um algoritmo que receba qualquer valor e mostre os 
		valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3"; -->
	<?php
	$valor = 5;
	for($x=0; $x<=$valor; $x++){
		echo "$x <br/>";
	}
	?>
	
	<!-- C  capturar dois valores em variáveis e mostrar os números entre 
		eles. Ex: 5 e 10, imprimir: "6 7 8 9"; -->
	<?php 
	$valor1 = 5;
	$valor2 = 10;
	for($valor1; $valor1<=$valor2; $valor1++){
		echo "<p>$valor1 <br/></p>";
	}
	?>
	
	<!-- D Escrever um algoritmo que multiplique os números utilizando apenas o 
		operador +, ex: (3 * 5) = 5 + 5 + 5 -->
	
	<!-- FIM DO EXERCICIO 4 -->
	
	<!-- -->
	<!-- -->
</body>
</html>

