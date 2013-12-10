<?php
// Classe DAO para a tabela cadastroEmpresa.
include "PDOConnectionFactory.php";
class BuscaVagasDao extends PDOConnectionFactory {
	
	// irá receber uma conexão
	public $conex = null;
	
	// constructor
	public function BuscaVagasDao() {
		$this->conex = PDOConnectionFactory::getConnection ();
	}
	public function areasVagas() {
		try {
			$stmt = $this->conex->prepare ( "SELECT * FROM areavagas" );
			$stmt->execute ();
			
			while ( $dados = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
				$op = "<option value='" . $dados->id . "'>" . $dados->areavaga . "</option>";
				echo $op;
			}
		} catch ( PDOException $ex ) {
			echo "Erro: " . $ex->getMessage ();
		}
	}
	public function retornarAreaVagas() {
		try {
			$stmt = $this->conex->prepare ( "SELECT * FROM areavagas" );
			$stmt->execute ();
		} catch ( PDOException $ex ) {
			echo "Erro: " . $ex->getMessage ();
		}
	}
	public function retornaVagas($areaVaga, $busca) {

		if ($areaVaga == null) {
			echo "<center> Por favor Selecione uma Area a ser Pesquisada";
			echo "<br/>";
			echo "<a href='BuscaVagas.php'> Voltar </a>";
			exit ();
		}
		try {
			$stmt = $this->conex->prepare ( "SELECT * FROM vagas WHERE areavaga_id='$areaVaga' and descricao like'%".$busca."%'" );
			$stmt->execute ();
		
			
			echo ' <table class="table table-bordered" align="center"  width="100%" cellspacing="5spx"> ';
			
			echo '<tr>';
				
			echo '<td> <b> Grau de Estudo </b></td>';
				
			echo '<td><b> Descricao </b></td>';
				
			echo '<td><b> Requisito </b></td>';
				
			echo '<td><b> Salario </b></td>';
				
			echo '<td><b> Beneficio </b> </td> ';
				
			echo '</tr> ';
			echo "<tr>";
			echo "</tr>";
			echo "<tr>";
			echo "</tr>";
			
				while ( $dados = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
				
				
					$descricao = $dados->descricao;
					$grauestudo = $dados->grauestudo;
					$requisito = $dados->requisito;
					$salario = $dados->salario;
					$beneficio = $dados->beneficio;
					
					echo "<tr>";
						
					echo " <td> $grauestudo </td>";
						
					echo "<td> $descricao</td>";
						
					echo "<td>$requisito</td>";
						
					echo "<td>$salario</td>";
						
					echo "<td> $beneficio</td>";
						
					echo "</tr>";
				
				}
				
			} catch ( PDOException $ex ) {
				echo "Erro: " . $ex->getMessage ();
			}
		
			
			
			
			
			
		
			
		
	}


}

?>