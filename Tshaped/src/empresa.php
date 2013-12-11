<?php


include "CadastroEmpresa.php";
include "CadastroEmpresaDAO.php";


$cad = new CadastroEmpresa();

$cad->setNomeEmpresa($_POST["nomeEmpresa"]);
$cad->setAreaAtuacao($_POST["areaAtuacao"]);
$cad->setTelefone($_POST["telefone"]);
$cad->setEmail($_POST["email"]);
$cad->setCnpj($_POST["cnpj"]);
// ..


//print_r($cad);

$dao = new CadastroEmpresaDAO();
$dao->Insere($cad);
//$dao->Update($cad);
//$dao->Deleta($cad);
//$dao->Lista($cad);



?>