
<?php 
// Classe DAO para a tabela cadastroEmpresa. 
include "PDOConnectionFactory.php";


class CadastroVagasDAO extends PDOConnectionFactory {

	// irá receber uma conexão

	public $conex = null;

 

   // constructor

	public function CadastroVagasDAO(){

		$this->conex = PDOConnectionFactory::getConnection();

	}

 

	// realiza uma inserção

	public function Insere( $CadastroVagas ){

		try{

			// preparo a query de inserçao - Prepare Statement

		
			// isso ficaria uma porta aberta para um SQL Injection.

			$stmt = $this->conex->prepare("INSERT INTO vagas (areavaga_Id,grauestudo,requisito,descricao,salario,beneficio) VALUES (?, ?, ?,?,?,?)");

			// valores encapsulados nas variáveis da classe CadastroEmpresa.

			// sequencia de índices que representa cada valor de minha query

		

			$stmt->bindValue(1, $CadastroVagas->getAreaVaga() );

			$stmt->bindValue(2, $CadastroVagas->getGrauEstudo() );

			$stmt->bindValue(3, $CadastroVagas->getRequisitos() );
			
			$stmt->bindValue(4, $CadastroVagas->getDescricao() );
			$stmt->bindValue(5, $CadastroVagas->getSalario() );
			$stmt->bindValue(6, $CadastroVagas->getBeneficio() );
		

		

			// executo a query preparada

			$stmt->execute();

			// fecho a conexão

			$this->conex = null;

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }
	
	}

 

	// realiza um Update

	public function Update( $CadastroVagas, $condicao ){

		try{		

			// preparo a query de update - Prepare Statement

			$stmt = $this->conex->prepare("UPDATE cadastroVagas SET areaVaga=?, grauEstudo=?, requisitos=? WHERE id=?");

			$this->conex->beginTransaction();

			// valores encapsulados nas variáveis da classe CadastroEmpresa.

			// sequencia de índices que representa cada valor de minha query

			
			$stmt->bindValue(1, $CadastroVagas->getAreaVaga() );

			$stmt->bindValue(2, $CadastroVagas->getGrauEstudo() );

			$stmt->bindValue(3, $CadastroVagas->getRequisitos() );

			// $stmt->bindValue(4, $condicao);

 

			// executo a query preparada

			$stmt->execute();

 

			$this->conex->commit();

 

			// fecho a conexão

			$this->conex = null;

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }		

	}

 

	// remove um registro

	public function Deleta( $id ){

		try{

			// executo a query

			$num = $this->conex->exec("DELETE FROM CadastroVagas WHERE id=$id");

			// caso seja execuado ele retorna o número de rows que foram afetadas.

			if( $num >= 1 ){ return $num; } else { return 0; }	

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}

 

	public function Lista($query=null){

		try{

			if( $query == null ){

				// executo a query

				$stmt = $this->conex->query("SELECT * FROM CadastroVagas");

			}else{

				$stmt = $this->conex->query($query);

			}

			// desconecta 

			$this->conex = null;

			// retorna o resultado da query

			return $stmt;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}

}
?>
