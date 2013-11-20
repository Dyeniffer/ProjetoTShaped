<?php
// //conex�o com o servidor
// $conect = mysql_connect("127.0.0.1:3306", "root", "");

// // Caso a conex�o seja reprovada, exibe na tela uma mensagem de erro
// if (!$conect) die ("<h1>Falha na conex�o com o Banco de Dados!</h1>");

// // Caso a conex�o seja aprovada, ent�o conecta o Banco de Dados.
// $db = mysql_select_db("mydb");

// /*Configurando este arquivo, depois � s� voc� dar um include em suas paginas php, isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
//  voc� altera somente um arquivo*/


require("PDOConnectionFactory.class.php");

try {
	// inst�ncia da classe
	$pdo = new PDOConnectionFactory();
	// chamada do m�todo de conex�o
	if($pdo->getConnection())
		echo "Sucesso";
	else 
		echo "Erro";
	
	$pdo = null;
	
} catch (PDOException $ex){ echo "ERRO: ".$ex->getMessage(); }

?>
