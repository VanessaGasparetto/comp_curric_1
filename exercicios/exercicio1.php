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
	for ($i=0; $i<=25; $i=$i+1) {
	   echo '<p>Lactobacilos vivos também possuem sentimentos</p>';
	}
	?>
	
	<!-- B  Escrever um algoritmo que receba qualquer valor e mostre os 
		valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3"; -->
	<?php
	$vlr = 5;
	for($i=0; $i<$vlr; $i++){
		echo "$i <br/>";
	}
	?>
	
	<!-- C  capturar dois valores em variáveis e mostrar os números entre 
		eles. Ex: 5 e 10, imprimir: "6 7 8 9"; -->
	<?php 
	$vlr1 = 5;
	$vlr2 = 10;
	for($vlr1; $vlr1<=$vlr2; $vlr1++){
		echo "<p>$vlr1 <br/></p>";
	}
	?>
	
	<!-- D Escrever um algoritmo que multiplique os números utilizando apenas o 
		operador +, ex: (3 * 5) = 5 + 5 + 5 -->
	<?php 
	$vlr1 = 4;
	$vlr2 = 3;
	$soma = 0;
	for ($i=0; $i<$vlr1; $i++){
		$soma = $soma + $vlr2;
	}
	echo "$soma<br/>";
	
	?>
	<!-- FIM DO EXERCICIO 4 -->
	
	<!-- INICIO DO EXERCICIO 5 -->
	<?php 
	function multiplica(){
		$vlr1 = 4;
	$vlr2 = 3;
	$soma = 0;
	for ($i=0; $i<$vlr1; $i++){
		$soma = $soma + $vlr2;
	}
	echo "<p>$soma<br/></p>";
	}
	
	multiplica();
	?>
	<!-- FIM DO EXERCICIO 5 -->
		
	<!-- INICIO DO EXERCICIO 6-->
	<h3>Exercício 6:</h3>
	<?php
	function imprime($var1) {
		$var2= $var1;
		return $var2;
	}

	echo "teste:" . imprime("skaposkapsk");
	?>
	<!-- FIM DO EXERCICIO 6 -->
	
	<!-- INICIO DO EXERCICIO 7 -->
	<h3>Exercício 7:</h3>
	<p></p><i>a - Descrever a sua funcionalidade e fazer exemplos das seguintes funções:<br/>Array(): Array é uma coleção de elementos 
		indexados na qual cada um dos elementos tem um número identificador único.<br/>Exemplo:</i></p>
	<?php
	$li = "aaaaa, bbbbbb, cccccc";
	$aL = explode(",", $li);

	echo "<p>Lista: </p>";
	echo "<ul>";
	echo "<li>" . $aL[0] . "</li>";
	echo "<li>" . $aL[1] . "</li>";
	echo "<li>" . $aL[2] . "</li>";
	echo "</ul>";
	?>
	
	<p><i>b - Trim(): Retira espaço no ínicio e final de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$teste = " \t\t ggggggg ";
	$tr = trim($teste);
	var_dump($teste);
	echo "<br/>";
	var_dump($tr);
	?>
	
	<p><i>c - Substr(): Responsável por retornar um pedaço da string, utilizando três parâmetros: a própria string, o índice inicial
		 e a quantidade de caracteres a ser retornada.<br/>Exemplo:<br/></i></p>
	<?php
	$teste = "aaaaaa";
	echo "Sem o substr: " . "$teste <br/>";
	echo "Com o substr: " . substr($teste, 0, 12);
	?>
	
	<p><i>d - Strtolower(): Convete toda a string em letra minúsculas.<br/>Exemplo:<br/></i></p>
	<?php
	$teste = "bbbbbbbb!";
	echo "Sem strtolower: " . "$teste <br/>";
	echo "Com strtolower: " . strtolower($teste);
	?>
	
	<p><i>e - Strtoupper(): Converte toda a string em letra maiúscula.<br/>Exemplo:</br></i></p>
	<?php
	$teste = "ccccccccccc";
	echo "Sem strtoupper: " . "$teste <br/>";
	echo "Com strtoupper: " . strtoupper($teste);
	?>
	
	<p><i>f - Ucfirst(): Converte para maiúscula o primeiro caractere de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$teste = "ccccccccccccccccc";
	echo "Sem ucfirst: " . "$teste <br/>";
	echo "Com ucfirst: " . ucfirst($teste);
	?>
	
	<p><i>g - Ucwords(): Converte para maiúsculas o primeiro caractere de cada palavra.<br/>Exemplo:<br/></i></p>
	<?php
	$teste = "aaa bb ccc";
	echo "Sem ucwords: " . "$teste <br/>";
	echo "Com ucwords: " . ucwords($teste);
	?>
	
	<p><i>h - Explode(): Divide uma string em string, retornando uma matriz de string, cada uma como substring
		de string formada pela divisão dela a partir do delimiter.<br/>Exemplo:<br/></i></p>
	<?php
	$teste = "a s c c f r g v";
	$o = explode(" ", $teste);
	echo $o[0];
	echo $o[1];
	echo $o[2];
	echo $o[3];
	echo $o[4];
	echo $o[5];
	echo $o[6];
	echo $o[7];
	?>
	
	<p><i>i - Var_dump(): Representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.<br/>Exemplo:<br/></i></p>
	<?php
	$num = 12.5;
	var_dump($num);
	?>
	
	<p><i>j - Implode(): Junta elementos de uma matriz em uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$a = array('aaaa', 'bbb', 'bbbb');
	$aS = implode(", ", $a);

	print $aS;
	?>
	
	<p><i>k - Htmlspecialchars(): Converte caracteres especiais para a realidade HTML.<br/>Exemplo:<br/></i></p>
	<?php
	$a = htmlspecialchars("<a href='teste'>Teste</a>", ENT_QUOTES);
	echo $a;
	?>
	
	<p><i>l - Join(): Sinônimo de implode().<br/>Exemplo:<br/></i></p>
	<?php
	$a = array('a', 'b', 'c', 'd');
	echo join(" ", $a);
	?>
	
	<p><i>m - Isset(): Informa se a variável foi iniciada.<br/>Exemplo:<br/></i></p>
	<?php
	$a = 'aaaa';

	if (isset($a)) {
		echo "ok ";
	}
	?>
	
	<p><i>n - Strlen(): Retorna o tamanho de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$a = 'aaaaa';
	echo $a . ": " . strlen($a);
	?>
	
	<p><i>o - Is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric():
		Informa o tipo da variavel.<br/>Exemplo:<br/></i></p>
	<?php
	if (is_float(30.02)) {
		echo "is float\n";
	} else {
		echo "is not float\n";
	}
	var_dump(is_float('asd'));
	var_dump(is_float(34));
	var_dump(is_float(25.6));
	var_dump(is_float(1e3));
	var_dump(is_float(false));
	?>
	<br/>
	<?php
	if (is_int(45)) {
		echo "is int\n";
	} else {
		echo "is not int\n";
	}
	var_dump(is_int('abc'));
	var_dump(is_int(23));
	var_dump(is_int(23.5));
	var_dump(is_int(1e7));
	var_dump(is_int(true));
	?>
	<br/>
	<?php
	$s = array('aaa', 'bbbb', 'bbbb');

	echo is_array($s) ? 'aaaa' : 'bbbbbb';
	echo "\n";

	$n = 'fdsfsd';

	echo is_array($n) ? 'ggggg' : 'ggggggggg';
	?>
	<br/>
	<?php
	if (is_string("10")) {
 		echo "strig\n";
	} else {
 		echo "n string\n";
	}
	var_dump(is_string('a'));
	var_dump(is_string("19"));
	var_dump(is_string(20.9));
	var_dump(is_string(true));
	?>
	<br/>
	<?php
	$a = false;
	$b = 0;

	if (is_bool($a)) {
    	echo 'A variável $a é um valor booleano';
	}
	if (is_bool($b)) {
    	echo 'A variável $b é um valor booleano';
	}
	?>
	<br/>
	<?php
	$var=123;  
  
	if (is_numeric($var))  
	{  
		echo "$var numerica.<br>" ;  
	} else {  
		echo "$var n numerica. <br>" ;  
	}
	?>
	
	<p><i>p - Getdate(): Retorna a data atual.<br/>Exemplo:<br/></i></p>
	<?php
	$a = getdate(); 
	print_r($a);
	?>
	
	<p><i>q - Empty(): Informa se a variável é vazia.<br/>Exemplo:<br/></i></p>
	<?php
	$var = 0;

	if (empty($var)) {
    	echo "$var variável não existe";
	}
	?>
	
	<p><i>r - Strip_tags(): Retira as tags HTML e PHP de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$t = '<p>Teste</p><!-- Comment --> <a href="#fragment">Teste2</a>';
	echo strip_tags($t);
	echo "\n";

	echo strip_tags($t, '<p><a>');
	?>
	
	<p><i>s - Max(): Encontra o maior valor. Min(): Encontra o menor valor.<br/>Exemplo:<br/></i></p>
	<?php
	echo min(3, 4, 1, 2, 9); 
	?>
	<br/>
	<?php
	echo max(array(4, 3, 5));
 	?>
	
	<p><i>t - Abs():  Valor absoluto.<br/>Exemplo:<br/></i></p>
	<?php
	echo $a = abs(-3.9);
	?>
	
	<p><i>u - ceil(), floor(), round(): Arredonda os vaçlores.<br/>Exemplo:<br/></i></p>
	<?php
	echo $a = ceil(4.7);
	?>
	<br/>
	<?php
	echo $a = floor(5.9);
	?>
	<br/>
	<?php
	echo $a = round(3.4);
	?>
	
	<p><i>v - Rand(): Gera um inteiro aleatório.<br/>Exemplo:<br/></i></p>
	<?php
	echo rand();
	?>
	
	<p><i>w - Sqrt(): Calcula a raiz quadrada.<br/>Exemplo:<br/></i></p>
	<?php
	echo "Raiz quadrada de 6 é: ". sqrt(6);
	?>
	
	<p><i>x - Str_replace(): Substitui todas as ocorrências da string de procura com a string de substituição.<br/>Exemplo:<br/></i></p>
	<?php
	$d = array('a', 'b');
	$c   = array('abc', 'bcd');
	$b   = 'a b';
	$a  = str_replace($d, $c, $b);
	echo $a;
	?>
	
	<p><i>y - Count(): Conta o número de elementos de uma variável, ou propriedades de um objeto.<br/>Exemplo:<br/></i></p>
	<?php
	$a[0] = 1;
	$a[1] = 3;
	$a[2] = 5;
	echo $resultado = count($a);
	?>
	
	<p><i>z - Htmlentities(): Converte todos os caracteres aplicáveis em entidades html..<br/>Exemplo:<br/></i></p>
	<?php
	$str = "The 'bold' is <b>bold</b>";

	echo htmlentities($str);
	?>
	
	<!-- FIM DO EXERCICIO 7 -->
	
	<!-- INICIO DO EXERCICIO 8 -->
	<h3>Exercício 8:</h3>
	<p><i>Conversão de string para integer:</i></p>
	<?php
	$str = '28';
	$int = (int)$str;
	echo $int;
	?>
	
	<p><i>Conversão de integer para string:</i></p>
	<?php
	$number2 = 19;
	$string = (string)$number2;
	echo $string;
	?>
	
	<p><i>Conversão de string para array:</i></p>
	<?php
	$tex = "saah, cris, rovani";
	$arrayTex = explode(',', $tex);
	print_r($arrayTex);
	?>
	
	<p><i>Conversão de array para string:</i></p>
	<?php
	$arrayList2[] = "dançar na chuva";
	$arrayList2[] = "não pise na grama";
	$arrayList2[] = "sem sono";

	print_r(implode(':', $arrayList2))
	?>
	
	<p><i>Conversão de integer para float:</i></p>
	<?php
	$int = (float)19;
	echo sprintf("%4.1f", $int);
	?>
	
	<p><i>Conversão de float para string em formato de R$:</i></p>
	<?php
	$int2 = (float)33.4;
	echo sprintf("R$ %4.1f", $int2);
	?>
	<!-- FIM DO EXERCICIO 8 -->
	
	<!-- INICIO DO EXERCICIO 9 -->
	<h3>Exercício 9:</h3>
	<form action="formulario.php" method="POST">
						
	<fieldset>
		<legend>Formulario de Informações</legend>
							
		<input type="hidden" name="pagina" value="contato">
          			
          			<label for="idNome">Nome: </label>
          			<input type="text" name="nome" id="idNome" required="true"/> 
          			<br />
          			
          			<label for="idEmail">Email: </label>
          			<input type="email" name="email" id="idEmail" required="true"/> 
          			<br />
          			
          			<label for="idSenha">Senha: </label>
          			<input type="password" name="senha" id="idSenha" required="true"/>
          			<br />
          			
      				<label for="idMensagem">Mensagem: </label><br />
          			<textarea name="mensagem" id="idMensagem" rows="3"></textarea>
          			<br />
          			<p>Sexo: </p>
          			<label for="idRadio">Masculino </label>
          			<input type="radio" name="radio" value="Masculino" id ="idRadio" required="true"/>
          			<br />
          			
          			<label for="idRadio">Feminino</label>
          			<input type="radio" name="radio" value="Feminino" id="idRadio" required=""/>
          			<br />
          			
          			<label for="idCheckBox">Desejo receber promoções e informativos. </label>
          			<input type="checkbox" name="promocoes" id="idCheckBox"/>
          			<br />
          			
          			
          			<button class="btn btn-primary">Enviar Informações</button>							
	</fieldset>
						
	</form>
	<!-- FIM DO EXERCICIO 9 -->
</body>
</html>
