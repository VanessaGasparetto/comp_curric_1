<?php
	//$_POST = varialvel
	//var_dump($_POST);
	
	//Se for enviado um port e a variavel não é vazia
	// então mostrar os dados
if( isset($POST["pagina"]) && $_POST["oaguba"] == "contato"){
//if(isset ($_POST) && !empty($_POST)){
 echo $_POST["nome"]."<br>";
 echo $_POST["email"]."<br>";
 echo $_POST["mensagem"];
} else {
	//redirecionar para a página indicada, no caso contato.php
	header ("Location: contato.php");
}
?>