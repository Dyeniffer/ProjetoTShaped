<?php
// //conexão com o servidor
// $conect = mysql_connect("127.0.0.1:3306", "root", "");

// // Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
// if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

// // Caso a conexão seja aprovada, então conecta o Banco de Dados.
// $db = mysql_select_db("mydb");

// /*Configurando este arquivo, depois é só você dar um include em suas paginas php, isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
//  você altera somente um arquivo*/


require("PDOConnectionFactory.class.php");

try {
	// instância da classe
	$pdo = new PDOConnectionFactory();
	// chamada do método de conexão
	if($pdo->getConnection())
		echo "Sucesso";
	else 
		echo "Erro";
	
	$pdo = null;
	
} catch (PDOException $ex){ echo "ERRO: ".$ex->getMessage(); }

?>
