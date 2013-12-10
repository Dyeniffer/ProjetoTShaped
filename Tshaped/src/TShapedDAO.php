
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
			$stmt->bindValue(5, $tshaped->id);
			
			$stmt->bindValue(6, $tshaped->tp_conhecimento);
			
			$stmt->bindValue(7, $tshaped->texto);

			// executo a query preparada

			if($stmt->execute()){
				return true;
			} else {
				return false;
			}

 

			// fecho a conexão

			$this->conex = null;

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}
	
	
	function buscaTshapedHorizontal($id) {
		
		try{
		
			$stmt = $this->conex->prepare("SELECT * FROM TSHAPED WHERE ID_USUARIO = " . $id ." AND TP_CONHECIMENTO = 0");
			$stmt->execute();
			
			$dadosTshaped = array();
			$i=0;
			while($dados = $stmt->fetch(PDO::FETCH_OBJ)) {
				$dadosTshaped[$i]['texto'] = $dados->texto;
				$dadosTshaped[$i]['css_top'] = $dados->css_top;
				$dadosTshaped[$i]['css_left'] = $dados->css_left;
				$dadosTshaped[$i]['css_size'] = $dados->css_size;
				$dadosTshaped[$i]['css_fonte'] = $dados->css_fonte;
				$dadosTshaped[$i]['tp_conhecimento'] = $dados->tp_conhecimento;
				$i++;
			}
			
			return $dadosTshaped;
		
			// fecho a conexão
		
			$this->conex = null;
		
			// caso ocorra um erro, retorna o erro;
		
		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }
		
		
	}
	
	function buscaTshapedVertical($id) {
	
		try{
	
			$stmt = $this->conex->prepare("SELECT * FROM TSHAPED WHERE ID_USUARIO = " . $id ." AND TP_CONHECIMENTO = 1");
			$stmt->execute();
				
			$dadosTshaped = array();
			$i=0;
			while($dados = $stmt->fetch(PDO::FETCH_OBJ)) {
				$dadosTshaped[$i]['texto'] = $dados->texto;
				$dadosTshaped[$i]['css_top'] = $dados->css_top;
				$dadosTshaped[$i]['css_left'] = $dados->css_left;
				$dadosTshaped[$i]['css_size'] = $dados->css_size;
				$dadosTshaped[$i]['css_fonte'] = $dados->css_fonte;
				$dadosTshaped[$i]['tp_conhecimento'] = $dados->tp_conhecimento;
				$i++;
			}
				
			return $dadosTshaped;
	
			// fecho a conexão
	
			$this->conex = null;
	
			// caso ocorra um erro, retorna o erro;
	
		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }
	
	
	}
	
	
	
}
?>
