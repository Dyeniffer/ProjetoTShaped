<?php
// Classe com atributos e métodos gets e sets


//O include chama a classe conexão.
include "conexao.php";



class CadastroVagas{

	public $id;
	public $areaVaga;
	public $grauEstudo;
	public $requisitos;
	
	public $descricao;
	public $salario;
	public $beneficio;	

	// construtor

	public function CadastroVagas(){

}

	############## CONJUNTO DE SET'S

	

public function setId( $id ){
	$this->id = $id;

}

	public function setAreaVaga( $areaVaga ){
		$this->areaVaga = $areaVaga;

	}
 

	public function setGrauEstudo( $grauEstudo ){
		$this->grauEstudo = $grauEstudo;

	}
 

	public function setRequisitos( $requisitos ){
		$this->requisitos = $requisitos;

	}	
	
	public function setDescricao( $descricao ){
		$this->descricao = $descricao;
	
	}
	
	public function setSalario( $salario ){
		$this->salario = $salario;
	
	}
	

	public function setBeneficio( $beneficio ){
		$this->beneficio = $beneficio;
	
	}
	

	
	
	
	############## CONJUNTO DE GET'S


	public function getId(){
	return $this->id;
	}
 
	
	
	public function getAreaVaga(){
	return $this->areaVaga;
	}
 

	public function getGrauEstudo(){
		return $this->grauEstudo;
	}


	public function getRequisitos(){
		return $this->requisitos;

	}
	

	
	public function getDescricao(){
		return $this->descricao;
	
	}
	public function getSalario(){
		return $this->salario;
	
	}
	public function getBeneficio(){
		return $this->beneficio;
	
	}
	
	

	}



?>