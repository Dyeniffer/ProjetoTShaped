
<?php 
// Classe DAO para a tabela cadastroEmpresa. 

include "PDOConnectionFactory.php";


class TShapedDAO extends PDOConnectionFactory {

	// irá receber uma conexão

	public $conex = null;

 

   // constructor

	public function TShapedDAO(){

		$this->conex = PDOConnectionFactory::getConnection();

	}

 

	// realiza uma inserção

	public function Insere( $tshaped ){

		try{

			// preparo a query de inserçao - Prepare Statement

		
			// isso ficaria uma porta aberta para um SQL Injection.

			$stmt = $this->conex->prepare("INSERT INTO tshaped (css_top ,css_left,css_fonte,css_size,id_usuario,tp_conhecimento,texto) VALUES (?, ?, ?, ?, ?, ?, ?)");

			// valores encapsulados nas variáveis da classe CadastroEmpresa.

			// sequencia de índices que representa cada valor de minha query

		

			$stmt->bindValue(1, $tshaped->css_top);

			$stmt->bindValue(2, $tshaped->css_left);

			$stmt->bindValue(3, $tshaped->css_fonte);

			$stmt->bindValue(4, $tshaped->css_size);

			//$stmt->bindValue(5, $tshaped->id_usuario);
			$stmt->bindValue(5, 1);
			
			$stmt->bindValue(6, $tshaped->tp_conhecimento);
			
			$stmt->bindValue(7, $tshaped->texto);

			// executo a query preparada

			$stmt->execute();

 

			// fecho a conexão

			$this->conex = null;

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}
}
?>
