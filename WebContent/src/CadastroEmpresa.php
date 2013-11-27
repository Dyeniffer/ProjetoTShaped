<?php
// Classe com atributos e métodos gets e sets


class CadastroEmpresa {

	public $id;
	public $nomeEmpresa;
	public $areaAtuacao;
	public $telefone;
	public $email;
	public $cnpj;
 

	// construtor
	public function CadastroEmpresa(){
	}

	############## CONJUNTO DE SET'S

	public function setId( $id ){
		$this->id = $id;

	}


	public function setNomeEmpresa( $nomeEmpresa ){
		$this->nomeEmpresa = $nomeEmpresa;
	}
 

	public function setAreaAtuacao( $areaAtuacao ){
		$this->areaAtuacao = $areaAtuacao;

	}
 

	public function setTelefone( $telefone ){
		$this->telefone = $telefone;

	}	

	public function setEmail( $email ){
		$this->email = $email;

	}

	public function setCnpj( $cnpj ){
		$this->cnpj = $cnpj;

	}



	############## CONJUNTO DE GET'S

	public function getId(){
		return $this->id;

	}
 

	public function getNomeEmpresa(){
	return $this->nomeEmpresa;
	}
 

	public function getAreaAtuacao(){
		return $this->areaAtuacao;
	}


	public function getTelefone(){
		return $this->telefone;

	}

	public function getEmail(){
		return $this->email;

	}	
	public function getCnpj(){
		return $this->cnpj;

	}

}



?>