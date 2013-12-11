
<?php 
// Classe DAO para a tabela cadastroEmpresa. 

include "PDOConnectionFactory.php";


class CadastroEmpresaDAO extends PDOConnectionFactory {

	// irá receber uma conexão

	public $conex = null;

 

   // constructor

	public function CadastroEmpresaDAO(){

		$this->conex = PDOConnectionFactory::getConnection();

	}

 

	// realiza uma inserção

	public function Insere( $CadastroEmpresa ){

		try{

			// preparo a query de inserçao - Prepare Statement

		
			// isso ficaria uma porta aberta para um SQL Injection.

			$stmt = $this->conex->prepare("INSERT INTO Empresa (nomeEmpresa,areaAtuacao,telefone,email,cnpj) VALUES (?, ?, ?, ?, ?)");

			// valores encapsulados nas variáveis da classe CadastroEmpresa.

			// sequencia de índices que representa cada valor de minha query

		

			$stmt->bindValue(1, $CadastroEmpresa->getNomeEmpresa() );

			$stmt->bindValue(2, $CadastroEmpresa->getAreaAtuacao() );

			$stmt->bindValue(3, $CadastroEmpresa->getTelefone() );

			$stmt->bindValue(4, $CadastroEmpresa->getEmail() );

			$stmt->bindValue(5, $CadastroEmpresa->getCnpj() );

 

			// executo a query preparada

			$stmt->execute();

 

			// fecho a conexão

			$this->conex = null;

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}

 

	// realiza um Update

	public function Update( $CadastroEmpresa, $condicao ){

		try{		

			// preparo a query de update - Prepare Statement

			$stmt = $this->conex->prepare("UPDATE cadastroEmpresa SET nomeEmpresa=?, areaAtuacao=?, telefone=? ,email=?, cnpj=?  WHERE id=?");

			$this->conex->beginTransaction();

			// valores encapsulados nas variáveis da classe CadastroEmpresa.

			// sequencia de índices que representa cada valor de minha query

			$stmt->bindValue(1, $CadastroEmpresa->getId() );

			$stmt->bindValue(2, $CadastroEmpresa->getNomeEmpresa() );

			$stmt->bindValue(3, $CadastroEmpresa->getAreaAtuacao() );

			$stmt->bindValue(4, $CadastroEmpresa->getTelefone() );

			$stmt->bindValue(5, $CadastroEmpresa->getEmail() );

			$stmt->bindValue(6, $CadastroEmpresa->getCnpj() );

			// $stmt->bindValue(7, $condicao);

 

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

			$num = $this->conex->exec("DELETE FROM CadastroEmpresa WHERE id=$id");

			// caso seja execuado ele retorna o número de rows que foram afetadas.

			if( $num >= 1 ){ return $num; } else { return 0; }	

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}

 

	public function Lista($query=null){

		try{

			if( $query == null ){

				// executo a query

				$stmt = $this->conex->query("SELECT * FROM CadastroEmpresa");

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
