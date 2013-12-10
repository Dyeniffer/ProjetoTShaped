<?php
include "PDOConnectionFactory.php";
class BuscaCurriculosDAO extends PDOConnectionFactory {
	
	// irá receber uma conexão
	public $conex = null;
	
	// constructor
	public function BuscaCurriculosDAO() {
		$this->conex = PDOConnectionFactory::getConnection ();
	}
	public function areasAtuacao() {
		try {
			$stmt = $this->conex->prepare ( "SELECT areaAtuacao FROM usuario" );
			$stmt->execute ();
			
			while ( $dados = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
				$op = "<option value='" . $dados->areaAtuacao . "'>" . $dados->areaAtuacao . "</option>";
				echo $op;
			}
		} catch ( PDOException $ex ) {
			echo "Erro: " . $ex->getMessage ();
		}
	}
	public function retornaCurriculos($areaCurriculo) {
		if ($areaCurriculo == null) {
			echo "<center> Por favor Selecione uma Area a ser Pesquisada";
			echo "<br/>";
			echo "<a href='BuscaVagas.php'> Voltar </a>";
			exit ();
		}
		try {
			$stmt = $this->conex->prepare ( "SELECT * FROM usuario WHERE areaAtuacao='$areaCurriculo'");
			$stmt->execute ();
			
			echo ' <table class="table table-bordered" align="center"  width="100%" cellspacing="5spx"> ';
			
			echo '<tr>';
			
			echo '<td> <b> Nome </b></td>';
			
			echo '<td><b> Email </b></td>';
			
			echo '<td><b> Telefone </b></td>';
			
			echo '<td><b> Data de Nascimento </b></td>';
			
			echo '<td><b> Cidade</b> </td> ';
			
			echo '<td><b> Estado</b> </td> ';
			
			echo '<td><b> Verificar T Shaped</b> </td> ';
			
			echo '</tr> ';
			echo "<tr>";
			echo "</tr>";
			echo "<tr>";
			echo "</tr>";
			
			while ( $dados = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
				
				$idUsuario = $dados->id;
				$nome = $dados->nome;
				$email = $dados->email;
				$telefone = $dados->telefone;
				$datanascimento = $dados->datanascimento;
				$cidade = $dados->cidade;
				$estado = $dados->estados;
				
				echo "<tr>";
				
				echo " <td> $nome </td>";
				
				echo "<td> $email</td>";
				
				echo "<td>$telefone</td>";
				
				echo "<td>$datanascimento</td>";
				
				echo "<td> $cidade</td>";
				
				echo "<td> $estado</td>";
				
				echo "<td><a href='visualizarTshaped.php?idUsuario=$idUsuario'>Visualizar tshaped candidato</a></td>";
				
				echo "</tr>";
			}
		} catch ( PDOException $ex ) {
			echo "Erro: " . $ex->getMessage ();
		}
	}
}
?>