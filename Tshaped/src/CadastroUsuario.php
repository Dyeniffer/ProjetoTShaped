<?php

// Classe com atributos e métodos gets e sets


class CadastroUsuario{

	public $id;
	public $nome;
	public $email;
	public $telefone;
	public $datanascimento;
	public $sexo;
	public $endereco;
	public $estados;
	public $cidade;
	public $nomePai;
	public $nomeMae;
	public $cep;
	public $areaAtuacao;
	



	// construtor

	public function CadastroUsuario(){

	}

	############## CONJUNTO DE SET'S

	public function setId( $id ){
		$this->id = $id;

	}


	public function setNome( $nome){
		$this->nome = $nome;

	}


	public function setEmail( $email ){
		$this->email = $email;

	}


	public function setTelefone( $telefone ){
		$this->telefone = $telefone;

	}

	public function setDataNascimento($datanascimento){
		$this->datanascimento = $datanascimento;

	}

	public function setSexo( $sexo ){
		$this->sexo = $sexo;

	}
	public function setEndereco( $endereco ){
		$this->endereco = $endereco;

	}
	
	public function setEstados( $estados ){
		$this->estados = $estados;

	}
	public function setCidade( $cidade ){
		$this->cidade = $cidade;

	}
	public function setNomePai( $nomePai ){
		$this->nomePai = $nomePai;

	}
	public function setNomeMae( $nomeMae ){
		$this->nomeMae = $nomeMae;

	}
	public function setCep( $cep ){
		$this->cep = $cep;

	}
	public function setAreaAtuacao( $areaAtuacao ){
		$this->areaAtuacao = $areaAtuacao;

	}

	############## CONJUNTO DE GET'S

	public function getId(){
		return $this->id;

	}


	public function getNome(){
		return $this->nome;
	}


	public function getEmail(){
		return $this->email;
	}


	public function getTelefone(){
		return $this->telefone;

	}
	public function getDataNascimento(){
		return $this->datanascimento;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function getEstados(){
		return $this->estados;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function getNomePai(){
		return $this->nomePai;
	}
	public function getNomeMae(){
		return $this->nomeMae;
	}
	public function getCep(){
		return $this->cep;
	}
	public function getAreaAtuacao(){
		return $this->areaAtuacao;
	}
}

?>