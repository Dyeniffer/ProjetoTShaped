<?php

//error_reporting("E_ALL");

include "CadastroVagas.php";
include "CadastroVagasDAO.php";

/**
 * Criaчуo do objeto de CadastroVaga
 */

$cad = new CadastroVagas();

$cad->setAreaVaga( $_POST["areaVaga"] );
$cad->setGrauEstudo( $_POST["grauEstudo"] );
$cad->setRequisitos( $_POST["requisitos"] );
$cad->setDescricao( $_POST["descricao"] );
$cad->setSalario( $_POST["salario"] );
$cad->setBeneficios( $_POST["beneficios"] );
/**
 * Conexуo com o banco
 */

$dao = new CadastroVagasDAO();

$dao->Insere( $cad );

?>