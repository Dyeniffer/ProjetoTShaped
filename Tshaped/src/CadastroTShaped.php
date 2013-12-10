<?php
// Classe com atributos e métodos gets e sets


class CadastroTShaped {
	
	private $css_size, $css_left, $css_top, $css_fonte, $tp_conhecimento , $texto , $id_usuario;
	
	// construtor
	public function cadastrarTshaped(){
	}

	public function __get($field) {
		 return $this->$field;
	}
	
	public function __set($field, $value) {
		$this->$field = $value;
	}
}

//set $obj->css_size = 10px;
//get $obj->css_size;



?>