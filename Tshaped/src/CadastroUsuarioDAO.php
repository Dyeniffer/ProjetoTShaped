
<?php 
// Classe DAO para a tabela cadastroEmpresa. 

include "PDOConnectionFactory.php";

class CadastroUsuarioDAO extends PDOConnectionFactory {

	// irá receber uma conexão

	public $conex = null;

 

   // constructor

	public function CadastroUsuarioDAO(){

		$this->conex = PDOConnectionFactory::getConnection();

	}

 

	// realiza uma inserção

	public function Insere( $CadastroUsuarioDAO ){

		try{

			// preparo a query de inserçao - Prepare Statement

		
			// isso ficaria uma porta aberta para um SQL Injection.

			$stmt = $this->conex->prepare("INSERT INTO usuario (id,nome,email,telefone,datanascimento,sexo, endereco,estados, cidade, nomePai, nomeMae, cep, areaAtuacao) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

			// valores encapsulados nas variáveis da classe CadastroUsuarioDAO.

			// sequencia de índices que representa cada valor de minha query

			$stmt->bindValue(1, $CadastroUsuarioDAO->getId() );

			$stmt->bindValue(2, $CadastroUsuarioDAO->getNome() );

			$stmt->bindValue(3, $CadastroUsuarioDAO->getEmail() );

			$stmt->bindValue(4, $CadastroUsuarioDAO->getTelefone() );

			$stmt->bindValue(5, $CadastroUsuarioDAO->getDataNascimento() );

			$stmt->bindValue(6, $CadastroUsuarioDAO->getSexo() );
			
			$stmt->bindValue(7, $CadastroUsuarioDAO->getEndereco() );
			
			$stmt->bindValue(8, $CadastroUsuarioDAO->getEstados() );
			
			$stmt->bindValue(9, $CadastroUsuarioDAO->getCidade() );
			
			$stmt->bindValue(10, $CadastroUsuarioDAO->getNomePai() );
			
			$stmt->bindValue(11, $CadastroUsuarioDAO->getNomeMae() );
			
			$stmt->bindValue(12, $CadastroUsuarioDAO->getCep() );
			
			$stmt->bindValue(13, $CadastroUsuarioDAO->getAreaAtuacao() );


 

			// executo a query preparada

			if($stmt->execute())
				return true;
			else{
				print_r($stmt->errorInfo());
				return false;	
			}

			// fecho a conexão

			$this->conex = null;

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}

 

	// realiza um Update

	public function Update( $CadastroUsuarioDAO, $condicao ){

		try{		

			// preparo a query de update - Prepare Statement

			$stmt = $this->conex->prepare("UPDATE cadastroUsuarioDAO SET nome=?, email=?,telefone=?,idade=?,sexo=?, endereco=?, estados=?, cidade=?, nomePai=?, nomeMae=?, cep=?, areaAtuacao=?  WHERE id=?");

			$this->conex->beginTransaction();

			// valores encapsulados nas variáveis da classe CadastroEmpresaDAO.

			// sequencia de índices que representa cada valor de minha query

			$stmt->bindValue(1, $CadastroUsuarioDAO->getId() );

			$stmt->bindValue(2, $CadastroUsuarioDAO->getNome() );

			$stmt->bindValue(3, $CadastroUsuarioDAO->getEmail() );

			$stmt->bindValue(4, $CadastroUsuarioDAO->getTelefone() );

			$stmt->bindValue(5, $$CadastroUsuarioDAO->getIdade() );

			$stmt->bindValue(6, $CadastroUsuarioDAO->getSexo() );
			
			$stmt->bindValue(7, $CadastroUsuarioDAO->getEndereco() );
			
			$stmt->bindValue(8, $CadastroUsuarioDAO->getEstados() );
			
			$stmt->bindValue(9, $CadastroUsuarioDAO->getCidade() );
			
			$stmt->bindValue(10, $CadastroUsuarioDAO->getNomePai() );
			
			$stmt->bindValue(11, $CadastroUsuarioDAO->getNomeMae() );
			
			$stmt->bindValue(12, $CadastroUsuarioDAO->getCep() );
			
			$stmt->bindValue(13, $CadastroUsuarioDAO->getAreaAtuacao() );
			

 

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

			$num = $this->conex->exec("DELETE FROM CadastroUsuarioDAO WHERE id=$id");

			// caso seja execuado ele retorna o número de rows que foram afetadas.

			if( $num >= 1 ){ return $num; } else { return 0; }	

		// caso ocorra um erro, retorna o erro;

		}catch ( PDOException $ex ){  echo "Erro: ".$ex->getMessage(); }

	}

 

	public function Lista($query=null){

		try{

			if( $query == null ){

				// executo a query

				$stmt = $this->conex->query("SELECT * FROM CadastroUsuarioDAO");

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
