<?php

//error_reporting("E_ALL");

include "CadastroVagas.php";
include "CadastroVagasDAO.php";

/**
 * Cria��o do objeto de CadastroVaga
 */

$cad = new CadastroVagas();

$cad->setAreaVaga( $_POST["areaVaga"] );
$cad->setGrauEstudo( $_POST["grauEstudo"] );
$cad->setRequisitos( $_POST["requisitos"] );
$cad->setDescricao( $_POST["descricao"] );
$cad->setSalario( $_POST["salario"] );
$cad->setBeneficios( $_POST["beneficios"] );
/**
 * Conex�o com o banco
 */

$dao = new CadastroVagasDAO();

$dao->Insere( $cad );

?>